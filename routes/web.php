<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalamanController;

// Route::get('/', function () {
//     return view('HalamanUtama.index');
// });

Route::controller(HalamanController::class)->group(function () {
    Route::get('/home', 'home')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/services', 'services')->name('services');
    Route::get('/gallery', 'gallery')->name('gallery');

});