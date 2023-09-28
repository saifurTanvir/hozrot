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

Route::get('/books', function () {
    return view('frontend.books');
})->name('books');

Route::get('/khanka', function () {
    return view('frontend.khanka');
})->name('khanka');

Route::get('/shobgujari', function () {
    return view('frontend.shobgujari');
})->name('shobgujari');

Route::get('/madrasa', function () {
    return view('frontend.madrasa');
})->name('madrasa');

Route::get('/mahfil', function () {
    return view('frontend.mahfil');
})->name('mahfil');

Route::get('/faq', function () {
    return view('frontend.faq');
})->name('faq');

Route::get('/contact-us', function () {
    return view('frontend.contact-us');
})->name('contact-us');

Route::get('/donation', function () {
    return view('frontend.donation');
})->name('donation');
