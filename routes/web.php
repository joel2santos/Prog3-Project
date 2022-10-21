<?php

// Methods:
// get(), post(), patch(), put(), delete(), options())
// To use various methods: match([method1, method2])
// To use any method: any()

// Route::view can be used as a get() method when the screen has no additional logic (no controller, no middleware)

use Illuminate\Support\Facades\Route;

// project.test
Route::view('/', 'index')->name('Home');
Route::view('/blog', 'blog')->name('Blog');
Route::view('/about', 'about')->name('About');
Route::view('/contact', 'contact')->name('Contact');
