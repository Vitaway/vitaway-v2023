@extends('layouts.guest')

@section('title') Insightful & Informative Healthcare Blogs @stop

@section('metas')
    <meta name="robots" content="index, follow">
    <meta name="description" content="Explore insightful and informative healthcare blogs by Vitaway. Stay updated with the latest trends, tips, and news in the world of health and wellness.">
    <meta name="keywords" content="Vitaway, blogs, healthcare blogs, health and wellness, latest trends, healthcare news, wellness tips, vitaway blogs">
@stop

@section('styles')
    <link rel="stylesheet" href="/css/navigation-bar.css">
    <link rel="stylesheet" href="/css/footer.css">
@stop

@section('content')
    <x-navigation-bar />

    <template>
        <div class="px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:pt-20">
            <div class="flex flex-col w-full mb-6 lg:justify-between lg:flex-row md:mb-8">
                <div class="flex items-center mb-5 md:mb-6 group lg:max-w-xl">
                    <a href="/" aria-label="Item" class="mr-4">
                        <div class="flex items-center justify-center w-16 h-16 rounded-full bg-indigo-50">
                            <svg class="w-12 h-12 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                                <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                            </svg>
                        </div>
                    </a>
                    <h3 class="font-sans text-2xl font-bold leading-none tracking-tight text-gray-900 sm:text-3xl">
                        <span class="inline-block mb-2 font-patua font-normal">
                            For insightful articles, expert tips, and up-to-date information on all things healthcare, wellness, and lifestyle.
                        </span>
                        <div class="h-1 ml-auto duration-300 origin-left transform bg-deep-purple-accent-400 scale-x-30 group-hover:scale-x-100"></div>
                    </h3>
                </div>
                <p class="w-full text-gray-700 lg:text-sm lg:max-w-md font-patua font-normal">
                    From researchs to practical advice, our blog is your trusted source for staying
                    informed and making the most of your health journey.
                </p>
            </div>
        </div>
    </template>

    <div class="section pb-20">
        <div class="container">
            <div class="row g-5">

                @foreach ($blogs as $blog)
                    <div class="col-lg-4">
                        <div class="post-entry d-block small-post-entry-v">
                            <div class="thumbnail">
                                <div class="h-[250px] rounded-lg" href="{{ route('single.blog', ['blog' => $blog->slug]) }}">
                                    <img src="{{ $blog->blogMedia->graphic }}" alt="{{ $blog->title }}" alt="{{ $blog->title }}" class="w-full h-full rounded-lg object-cover">
                                </div>
                            </div>
                            <div class="post-content mt-4">
                                <div class="post-meta mb-1">
                                    <a href="{{ route('single.blog', ['blog' => $blog->slug]) }}" class="category capitalize font-patua font-normal">{{ $blog->blogCategory->name }}</a> —
                                    <span class="date">{{ $blog->created_at->diffForHumans() }}</span>
                                </div>
                                <h2 class="heading mb-3">
                                    <a class="font-patua font-normal text-2xl" href="{{ route('single.blog', ['blog' => $blog->slug]) }}">{{ $blog->title }}</a>
                                </h2>
                                <p class="trancate block line-clamp-3 font-merri font-normal leading-7 text-gray-600" style="display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;">{{ $blog->caption }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <x-footer />
@endsection
