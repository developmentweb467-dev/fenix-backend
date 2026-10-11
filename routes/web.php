
<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AppController;
Route::get('/', function () {
    return view ('home');
});
// Display posts
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{id}', [PostController::class, 'show']);
// Save a new post
Route::post('/posts', [PostController::class, 'store']);
// Display applications
Route::get('/apps', [AppController::class, 'index']); 
Route::get('/apps/{id}', [AppController::class, 'show']);
// About page
Route::get('/about', function () {
    return view('about');
});
// Contact page
Route::get('/contact', function () {
    return view('contact');
});
// Privacy Policy page
Route::get('/privacy', function () {
    return view ('privacy');
});
// Terms & Conditions page
Route::get('/terms', function () {
    return view('terms');
});