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
Route::get('/about', function () {
    return view('about');
});
Route::get('/info', function () {
    return view('info');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/', function () {
    $data = [
        "about" => 'ABOUT US',
        "info" => 'INFO',
        "blog" => 'BLOG',
        "news" => 'NEWS'
    ];
    return view('home',$data);
});

