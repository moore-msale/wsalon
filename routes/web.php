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
$checker = [];
if(\Illuminate\Support\Facades\Config::get('app.debug'))
{
    array_push($checker, ['middleware' => 'clearcache']);
}
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

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/catalog', 'DressController@catalog')->name('catalog');

//Route::get('/catalog', function () {
//    return view('dress-catalog',['dresses' => \App\Dress::all()]);
//});
Route::post('/message', 'MessageController@mail')->name('message');
Route::post('/message2', 'MessageController@mail2')->name('message2');
Route::get('/dress/{id}', 'DressController@index')->name('dress');
Route::get('/feedback', function () {
    return view('feedback');
});

Route::group($checker, function () {
    Route::get('/unpublish', function() {
        return view('unpublish');
    });
});

Route::get('/feed', 'FeedbackController@single')->name('feed');
Route::post('/feedback_store','FeedbackController@store')->name('feedback_store');
