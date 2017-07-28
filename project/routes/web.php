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

Route::get('/home', function () {
    return view('home');
});

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
    $lang = "lv";
    \App::setLocale($lang);
    Session::put('language', $lang);
    $rec = DB::table('data_lang')->where('link',__('words.lrental'))->first();
    return App::make("App\Http\Controllers\SiteController")->sitehome($lang, $rec);
});




//Route::get('/', function () {
//    $locale = \App::getLocale();
//    Session::put('language', 'lv');

Route::get('/{lang}', function ($lang) {
    \App::setLocale($lang);
    Session::put('language', $lang);
    if($lang == 'lv'){
        return redirect('/', 301);
    }else {
        $rec = DB::table('data_lang')->where('link',__('words.lrental'))->first();
        return App::make("App\Http\Controllers\SiteController")->sitehome($lang, $rec);
    }
})->where('lang','lv|en|ru');
//Route::get('/en', function () {
//    \App::setLocale('en');
//    Session::put('language', 'en');
//    return view('site');
//});
//Route::get('/ru', function () {
//    \App::setLocale('ru');
//    Session::put('language', 'ru');
//    return view('site');
//});




Auth::routes();
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/{lang}/admin', 'AdminController@index');
Route::get('/site', 'SiteController@index')->name('site');
//Route::get('/{lang}/', 'SiteController@index');


Route::get('/{lang}/{page}', function ($lang, $page) {
   // Session::put('language', 'lv');
        \App::setLocale($lang);
  //  echo $lang."<br/>";
  //  echo $page;
    $rec = DB::table('data_lang')->where('lang', $lang)->where('link',$page)->first();
    if($page == __('words.lrental')){
        return App::make("App\Http\Controllers\SiteController")->sitehome($lang, $rec);
    }else{
        if($page == __('words.lcontacts')){
            return App::make("App\Http\Controllers\SiteController")->contacts($lang, $rec);
        }else{
            if($page == __('words.laccessories')){
                return App::make("App\Http\Controllers\SiteController")->accessories($lang, $rec);
            }
        return App::make("App\Http\Controllers\SiteController")->site($lang, $rec);
    }
}})->where('lang','lv|en|ru');
Route::post('/admin/uploadcar', 'AdminController@uploadCar');
Route::get('/admin/createcars', 'AdminController@createCars');
Route::post('/admin/uploadcar', 'AdminController@uploadCar');

Route::any('/admin/par-mums', 'AparmumsController@view');
Route::any('/admin/par-mums/save', 'AparmumsController@save');

Route::get('/admin/transferi', 'AtransfersController@view');
Route::any('/admin/transferi/save', 'AtransfersController@save');

Route::any('/admin/kontakti', 'AkontaktiController@view');
Route::any('/admin/kontakti/save', 'AkontaktiController@save');

Route::any('/admin/cars', 'AkontaktiController@view');
Route::any('/admin/cars/save', 'AhomeController@save');