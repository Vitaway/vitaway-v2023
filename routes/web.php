<?php

    use App\Http\Controllers\AdminController;
    use App\Http\Controllers\BlogController;
    use App\Http\Controllers\HealthEatingController;
    use App\Http\Controllers\LoginController;
    use App\Http\Controllers\ProfileController;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;
    use Illuminate\Support\Facades\Session;

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | contains the "web" middleware group. Now create something great!
    |
    */

    Route::get('/', fn () => view('pages.index'))->name('home');

    Route::post('/locale', function (Request $request) {
        if ($request->locale) {
            Session::put('locale', "kin");
        } else {
            Session::put('locale', "en");
        }

        return redirect()->back();
    })->name('locale');

    Route::get('/indivitual', fn () => view('pages.indivitual'))->name('indivitual');
    Route::get('/about', fn () => view('pages.about'))->name('about');
    Route::get('/faqs', fn () => view('pages.faqs'))->name('faqs');
    Route::get('/who-we-serve', fn () => view('pages.who-we-serve'))->name('who-we-serve');
    Route::get('/meet-team', fn() => view('pages.meet-team'))->name('get.team');
    Route::get('/pricing', fn() => view('pages.pricing'))->name('get.pricing');
    Route::get('/download', fn() => view('pages.download'))->name('get.download');

    Route::get('/blogs', [BlogController::class, 'homepage'])->name('blogs');
    Route::get('/blogs/{blog:slug}', [BlogController::class, 'show'])->name('single.blog');
    Route::get('/contact-us', fn () => view('pages.contact-us'))->name('contact');
    Route::post('/contacts', [ProfileController::class, 'storeContact'])->name('post.contact');

    /**
     * --------------------------------------
     * OAuth pages Web route
     * --------------------------------------
     */
    Route::get('/oauth/login', fn() => view('auth.login'))->name('get.login');
    Route::get('/oauth/{provider}', [LoginController::class, 'redirectToProvider'])->name('init.oauth');

    /**
     * --------------------------------------
     * OAuth Authentication Web route
     * --------------------------------------
     */
    Route::get('/complete/github/oauth', [LoginController::class, 'handleGithubCallback'])->name('complete.github.oauth');
    Route::get('/complete/google/oauth', [LoginController::class, 'handleGoogleCallback'])->name('complete.google.oauth');

    /**
     * --------------------------------------
     * Authenticated user Web route
     * --------------------------------------
     */
    Route::group(['middleware' => ['auth']], function() {
        Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::post('/blogs', [BlogController::class, 'store'])->name('post.blogs');
        Route::get('/blogs/show/{blog}', [BlogController::class, 'singleBlogDetails'])->name('show.blog');
        Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
        Route::post('/profile', [ProfileController::class, 'store'])->name('post.profile');
        Route::get('/logout', [LoginController::class, 'logout'])->name('adminLogout');
    });

    Route::prefix('/health-eating')->group(function() {
        Route::get('/well-guide', [HealthEatingController::class, 'guides'])->name('well-guide');
        Route::get('/food-group', [HealthEatingController::class, 'foodGroup'])->name('food-group');
        Route::get('/life-stages', [HealthEatingController::class, 'lifeStages'])->name('life-stages');
        Route::get('/well-being', [HealthEatingController::class, 'wellBeing'])->name('well-being');

        Route::prefix('/food-groups')->group(function() {
            Route::get('/grains', [HealthEatingController::class, 'grains'])->name('food-groups.grains');
            Route::get('/proteins', [HealthEatingController::class, 'proteins'])->name('food-groups.proteins');
            Route::get('/vegetables', [HealthEatingController::class, 'vegetables'])->name('food-groups.vegetables');
            Route::get('/dairy', [HealthEatingController::class, 'dairy'])->name('food-groups.dairy');

            Route::get('/fruit-and-vegetables', [HealthEatingController::class, 'fruits'])->name('food-groups.fruits');
            Route::get('/myplate', [HealthEatingController::class, 'myplate'])->name('food-groups.myplate');
            Route::get('/hydration', [HealthEatingController::class, 'hydration'])->name('food-groups.hydration');
        });

        Route::prefix('/life-stages')->group(function() {
            Route::get('/adult', [HealthEatingController::class, 'adult'])->name('life-stages.adult');
            Route::get('/children', [HealthEatingController::class, 'children'])->name('life-stages.children');
            Route::get('/pregnancy', [HealthEatingController::class, 'pregnancy'])->name('life-stages.pregnancy');
        });
    });

    Route::fallback(fn() => view('pages.404') );
