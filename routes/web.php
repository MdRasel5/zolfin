<?php

use Illuminate\Support\Facades\Route;


// Route::get('/test', function () {
//     print_r(DB::table('posts')->get());
// });


Route::get('/test', function(){

    //    $insert = DB::table('posts')
    //    ->truncate();

    // dd( $insert);
    // return("post added");

});

Route::get('/', function () {
    return view('pages/index');
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

    $all_posts = DB::table('posts')->get();

    return view('blog', [
        'posts' => $all_posts
    ]);
});

Route::get('/blog-details/{slug}', function ($slug) {

    $all_posts = DB::table('posts')->get();

    $data = DB::table('posts')->where('slug', $slug)->first();

    return view('blog-details', [
        'single_post' => $data,
        'posts' => $all_posts
    ]);

})->name('single-post');

Route::get('/blog-details', function () {
    return view('blog-details');
});

Route::get('/blog-details', function () {
    return view('blog-details');
});

Route::get('/contact', function () {
    return view('contact');
});