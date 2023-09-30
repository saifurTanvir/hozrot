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
    return view('frontend.about_us');
})->name('home');

Route::get('/about_us', function () {
    $basicInfo = \App\Models\Profile::orderBy('id')->first();
    $shayekhs = \App\Models\Shaekh::orderBy('id')->get();
    return view('frontend.about_us', compact('basicInfo', 'shayekhs'));
})->name('about_us');

Route::get('/shaekh_detail/{id}', function ($id) {
    $shayekh = \App\Models\Shaekh::where('id', $id)->first();
    return view('frontend.shaekh_detail', compact('shayekh', ));
})->name('shaekh_detail');

Route::get('/boyan', function () {
    return view('frontend.boyan');
})->name('boyan');

Route::get('/article', function () {
    return view('frontend.article');
})->name('blog_grid');

Route::get('/article_detail', function () {
    return view('frontend.article_detail');
})->name('article_detail');

Route::get('/books', function () {
    return view('frontend.books');
})->name('books');

Route::get('/khanka', function () {
    return view('frontend.khanka');
})->name('khanka');

Route::get('/khanka_detail', function () {
    return view('frontend.khanka_detail');
})->name('khanka_detail');

Route::get('/shobgujari', function () {
    return view('frontend.shobgujari');
})->name('shobgujari');

Route::get('/madrasa', function () {
    return view('frontend.madrasa');
})->name('madrasa');

Route::get('/madrasa_detail', function () {
    return view('frontend.madrasa_detail');
})->name('madrasa_detail');

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
