<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('frontend.index');
})->name('home');

Route::get('/about_us', function () {
    return view('frontend.about_us');
})->name('about_us');

Route::get('/boyan', function () {
    return view('frontend.boyan');
})->name('boyan');

Route::get('/blog_grid', function () {
    return view('frontend.blog_grid');
})->name('blog_grid');
