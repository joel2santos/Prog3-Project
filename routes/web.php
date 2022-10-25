<?php

// Methods:
// get(), post(), patch(), put(), delete(), options())
// To use various methods: match([method1, method2])
// To use any method: any()

// Route::view can be used as a get() method when the screen has no additional logic (no controller, no middleware)

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// project.test
Route::view('/', 'index')->name('Home');

// project.test/blog
Route::controller(PostController::class)->group(function () {
    Route::get('/blog', 'index')->name('posts.index');
    Route::get('/blog/create', 'create')->name('posts.create');
    Route::get('/blog/post/{post}', 'show')->name('posts.show');
    Route::post('/blog', 'store')->name('posts.store');
});

// project.test/about
Route::view('/about', 'about')->name('About');

// project.test/contact
Route::view('/contact', 'contact')->name('Contact');
