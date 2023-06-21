<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/portfolio-details', function () {
    return view('portfolio-details');
});

Route::get('/portfolio-details', function () {
    return view('portfolio-details');
});

Route::get('/service-details', function () {
    return view('service-details');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/price', function () {
    return view('price');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/process', function () {
    return view('process');
});

Route::get('/404', function () {
    return view('404');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blog-details', function () {
    return view('blog-details');
});

Route::get('/blog-details', function () {
    return view('blog-details');
});

Route::get('/blog-details', function () {
    return view('blog-details');
});

Route::get('/contact', function () {
    return view('contact');
});
