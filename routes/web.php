<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get("/services", function () {
    return view('services');
});

Route::get("/about", function () {
    return view('about');
});

Route::get("/portfolio", function () {
    return view('portfolio');
});
Route::get("/contact", function () {
    return view('contact');
});