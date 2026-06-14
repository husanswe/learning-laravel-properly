<?php

    use App\Http\Controllers\ContactController;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\Controller;
    use App\Http\Controllers\PageController;
    use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RedirectController;
    use App\Http\Controllers\SearchController;
    use App\Http\Controllers\RegisterController;
    
    /* Route::get('/', function() {
        return view('welcome');
    });

    Route::get('/test-route', function() {
        return view('test');
    });

    Route::get('users', function() {
        return 'Users';
    });

    
    // Task 1. Basic Routes
    Route::get('/', [PageController::class, 'index']);

    Route::get('/about', [PageController::class, 'about']);

    Route::get('/contact', [PageController::class, 'contact']);


    // Task 2. Route parameters
    Route::get('/user/{username}', function(string $username) {
        return "Hello, " . $username . "!";
    });

    Route::get('/user/{username?}', function(string $username = "Guest") {
        return "Hello, " . $username . "!";
    });

    
    // Task 3 — Route with constraints
    Route::get('/post/{id}', function(int $id) {
        return "Post ID is: " . $id;
    })->whereNumber('id');

    Route::get('/username/{name}', function(string $name) {
        return "This is " . $name;
    })->where('name', '[A-Za-z]+');


    //Task 4. Named routes
    Route::get('/blog', function() {
        return "Blog page";
    })->name('blog.index');

    Route::get('/blog/{id}', function(int $id) {
        return "Blog post: " . $id;
    })->name('blog.show');

    Route::get('/links', function() {
        return route('blog.index') . ' and ' . route('blog.show', ['id' => 5]);
    });


    // Task 5. Route groups
    Route::prefix('/admin')->group(function() {
        Route::get('/dashboard', function() {
            return "Admin dashboard";
        });
        Route::get('/users', function() {
            return "Admin users list";
        });
        Route::get('/settings', function() {
            return "Admin settings";
        });
    }); */


    // ------------------------------------------------------

    
    // Controllers lesson. Task 2 — Resource-style controller

    Route::get('/posts/{id}', [PostController::class, 'show']);
    Route::get('/posts', [PostController::class, 'index']);
    Route::get('/pages', [PageController::class, 'pages']);
    Route::get('/show/{id}', [PostController::class, 'show']);
    Route::get('/create', [PostController::class, 'create']);
    Route::get('/store', [PostController::class, 'store']);
    Route::get('/destroy/{id}', [PostController::class, 'destroy']);


    // Task 3. Single action controller
    Route::get('/redirect', RedirectController::class);

    
    Route::get('/about', [PageController::class, 'index']);
    
    // Laravel Request lesson. 
    Route::get('/search', [SearchController::class, 'index']);

    // Task 3. Contact route
    Route::get('/contact', [ContactController::class, 'contact']);
    Route::post('/contact', [ContactController::class, 'store']);

    // Task 5. Get all input + only specific fields
    Route::get('/register', [RegisterController::class, 'register']);
    Route::post('/register', [RegisterController::class, 'submit']);

    // Task 6 — Input as JSON with validation:
    Route::get('/profile', [ProfileController::class, 'profile']);
    Route::post('/profile', [ProfileController::class, 'store']);
?>