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
Route::group(['prefix' => '/moo'], function () {
    Voyager::routes();
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/catalog', function () {
    return view('dress-catalog',['dresses' => \App\Dress::all()]);
});
