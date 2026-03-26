<?php

use Illuminate\Support\Facades\Route;
// Route::get('/', function () {
//     return view('home');
// });


Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/donate', 'pages.donate')->name('donate');
