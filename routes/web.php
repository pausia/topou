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

Route::redirect('/', '/Home');

Route::get('/Home', function () {
    return view('landing-page.home');
})->name('home');

Route::get('/About-Us', function () {
    return view('landing-page.about');
})->name('about-us');

Route::get('/Education', function () {
    return view('landing-page.education');
})->name('education');
Route::get('/Download', function () {
    return view('landing-page.download');
})->name('download');
Route::get('/Deatail-Artikel', function () {
    return view('landing-page.educatio-artikel-detail');
})->name('detailartikel');
