<?php

    namespace App\Http\Controllers;

    use App\Http\Requests\StoreBlogRequest;
    use App\Models\Blog;
    use App\Models\BlogCategory;
    use App\Models\BlogContent;
    use App\Models\BlogMedia;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Session;
    use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Str;

    class BlogController extends Controller {
        public function index() {
            $blogs = Auth::user()->blogs()->orderBy('created_at', 'desc')->get();

            return response()->json([
                "data" => $blogs
            ]);
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \App\Http\Requests\StoreBlogRequest  $request
         * @return \Illuminate\Http\Response
         */
        public function store(StoreBlogRequest $request) {
            $blog = authUser()->blogs()->create([
                'blog_category_id' => $request->blog_category_id,
                'title' => $request->title,
                'caption' => $request->caption,
                'contents' => $request->contents,
                'slug' => Str::slug(Str::random(10).'-'.$request->title),
            ]);

            $uploadedFileUrl = Cloudinary::uploadFile(
                $request->file('image')->getRealPath(),
            )->getSecurePath();

            if(!$uploadedFileUrl)
                return response()->json([
                    "message" => "Unable to upload image"
                ], 400);

            $blog->blogMedia()->create([
                'graphic' => $uploadedFileUrl,
            ]);

            BlogContent::create([
                'blog_id' => $blog->id,
                'contents' => $request->contents,
                'active_status' => true
            ]);

            return response()->json([
                "message" => "blog saved successfully",
                "data" => $blog
            ], 201);
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \App\Http\Requests\StoreBlogRequest  $request
         * @return \Illuminate\Http\Response
         */
        public function update(Blog $blog, StoreBlogRequest $request) {
            $uploadedFileUrl = Cloudinary::uploadFile(
                $request->file('image')->getRealPath(),
            )->getSecurePath();

            if(!$uploadedFileUrl) return response()->json([ "message" => "Unable to upload image"], 400);

            $blog->update($request->validated());
            $blog->blogMedia()->update([ 'graphic' => $uploadedFileUrl ]);
            $blog->blogContent()->update([ 'contents' => $request->contents]);

            return response()->json([ "message" => "blog update successfully" ]);
        }

        /**
         * Display the specified resource.
         *
         * @param  \App\Models\Blog  $blog
         * @return \Illuminate\Http\Response
         */
        public function show(Blog $blog) {
            return view('pages.single-blog', compact('blog'));
        }

        public function singleBlogDetails(Blog $blog) {
            $categories = BlogCategory::orderBy('created_at', 'desc')->get();

            return view('auth.update', compact('blog', 'categories'));
        }

        /**
         * Display the specified resource.
         *
         * @param  \App\Models\Blog  $blog
         * @return \Illuminate\Http\Response
         */
        public function homepage() {
            $blogs = Blog::orderBy('created_at', 'desc')->get();
            return view('pages.blogs', compact('blogs'));
        }

        public  function storeCategories(Request $request) {
            $request->validate(['category_name' => ['required']]);
            $category = BlogCategory::create([ 'name' => $request->category_name ]);

            return response()->json([
                "message" => "category created",
                "data" => $category,
            ], 201);
        }

        public function destroy(Blog $blog) {
            $blog->delete();
            return response()->json([
                "message" => "blog deleted"
            ]);
        }
    }
