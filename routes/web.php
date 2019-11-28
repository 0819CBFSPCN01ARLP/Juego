<?php

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
    return view('welcome');
});

Auth::routes();


Route::get('/home', function () {
    return view('home');
});

Route::get('/play', function () {
    return view('play');
});

<<<<<<< HEAD
Route::get('/abm', function () {
    return view('abm');
});
=======

Route::get('/abm', "abmController@list");

Route::post('/abm', "abmController@insert");

Route::patch('/abm', "abmController@modify");

Route::delete('/abm', "abmController@delete");
>>>>>>> 187f4cd78c03d9442db7228b810542960c5589ac

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', function () {
    return view('contact');
});

Route::get('/edition', function () {
    return view('edition');
});

Route::get('/ranking', function () {
    return view('ranking');
});
