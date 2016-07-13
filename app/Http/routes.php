<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', 'UploadsController@index');
//Route::get('upload', 'UploadsController@upload');
//Route::post('update','UploadsController@update');
Route::get('/', 'SignaturesController@getIndex');
Route::get('home', 'HomeController@index');
Route::controller('signatures', 'SignaturesController');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::filter('locale', function () {
    Lang::setLocale('vi');
});
Route::get('lang/en', 'SignaturesController@getLangEn');
Route::get('lang/vi', 'SignaturesController@getLangVi');


//Route::get('lang/vi', function () {
//    $location = GeoIP::getLocation('42.114.37.41');
////    $location = GeoIP::getLocation();
//
//    if ($location['isoCode'] == "VN") {
//        Lang::setLocale('vi');
//    } else {
//        Lang::setLocale('en');
//    }
//    return Redirect::to('signatures/index');
//});
//Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']);

//Route::get('lang/{lang}', function ($lang) {
//    // App::setLocale(Session::get($lang, 'en'));
//    Session::set('applocale',$lang);
//    return Redirect::to('signatures/upload');
//});