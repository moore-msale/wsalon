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
    $main_page = \App\MainPage::all()->first();
    return view('welcome',['content' => $main_page]);
})->name('main');
Route::get('/about', function () {
    $content = \App\About::all()->first();
    return view('about',['content' => $content]);
});


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/catalog', 'DressController@catalog')->name('catalog');
Route::get('/catalog/{title}', 'DressController@catalogSort')->name('catalogSort');
//Route::get('/catalog', function () {
//    return view('dress-catalog',['dresses' => \App\Dress::all()]);
//});
Route::post('/message', 'MessageController@mail')->name('message');
Route::post('/message2', 'MessageController@mail2')->name('message2');
Route::get('/dress/{title}', 'DressController@index')->name('dress');
Route::get('/feedback', function () {
    $content = \App\Feedpage::all()->first();
    return view('feedback',['content' => $content]);
});

Route::group($checker, function () {
    Route::get('/unpublish', function() {
        return view('unpublish');
    });
});

Route::get('/feed', 'FeedbackController@single')->name('feed');
Route::post('/feedback_store','FeedbackController@store')->name('feedback_store');


View::composer(['*'],function($view){
    $search = urldecode(Request::server('REQUEST_URI'));
    $seos = \App\Seo::where('url',str_replace('_',' ',$search))->first();

    $view->with('seo',$seos);
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/updateSitemap', 'SitemapController@updateSitemap')->name('updateSitemap');
});
