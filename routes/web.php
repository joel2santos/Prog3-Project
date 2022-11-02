<?php

// Methods:
// get(), post(), patch(), put(), delete(), options())
// To use various methods: match([method1, method2])
// To use any method: any()

// Route::view can be used as a get() method when the screen has no additional logic (no controller, no middleware)

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// project.test
Route::view('/', 'index')->name('home');

// project.test/blog
// Route::controller(PostController::class)->group(function () {
//     // Views
//     Route::get('/blog', 'index')->name('posts.index');
//     Route::get('/blog/create', 'create')->name('posts.create');
//     Route::get('/blog/edit/{post}', 'edit')->name('posts.edit');
//     Route::get('/blog/post/{post}', 'show')->name('posts.show');

//     // Methods
//     Route::post('/blog', 'store')->name('posts.store');
//     Route::patch('/blog/{post}', 'update')->name('posts.update');
//     Route::delete('/blog/{post}', 'destroy')->name('posts.destroy');
// });

Route::resource('blog', PostController::class, [
    'names' => 'posts',
    'parameters' => ['blog' => 'post'],
]);

// project.test/about
Route::view('/about', 'about')->name('about')->middleware('auth');

// project.test/contact
Route::view('/contact', 'contact')->name('contact');

//project.test/login
Route::get('/login', function () {
    return 'Login page';
})->name('login');
