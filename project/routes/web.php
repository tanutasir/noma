<?php
//use \Illuminate\
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

/*Route::get('/', function () {
    return view('welcome');
});
*/
//Route::get('/', 'SiteController@index')->name('site');
//Route::get('/lv', 'SiteController@index')->name('site');
//Route::get('/en', 'SiteController@index')->name('site');
//Route::get('/ru', 'SiteController@index')->name('site');
//Route::get('/', function () {
//    $locale = \App::getLocale();
//    Session::put('language', $locale);
//    return view('site');
//});

Route::get('/', function () {
    $locale = \App::getLocale();
    Session::put('language', 'lv');
    return view('site');
});
Route::get('/lv', function () {
    $locale = \App::getLocale();
    \App::setLocale('lv');
    Session::put('language', 'lv');
    return view('site');
});
Route::get('/en', function () {
    \App::setLocale('en');
    Session::put('language', 'en');
    return view('site');
});
Route::get('/ru', function () {
    \App::setLocale('ru');
    Session::put('language', 'ru');
    return view('site');
});




Auth::routes();
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/{lang}/admin', 'AdminController@index')->name('admin');
Route::get('/site', 'SiteController@index')->name('site');
