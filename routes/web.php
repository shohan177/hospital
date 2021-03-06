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

Route::get('/', 'frontendController@index')->name('mainHome');
Route::get('/about', 'frontendController@about')->name('about');
Route::get('/department/{slug}', 'frontendController@singleDepartment')->name('department');
Route::get('/service/{slug}', 'frontendController@singleService')->name('service');
Route::get('/doctors', 'frontendController@allDoctors')->name('doctors');
Route::get('/chosedepartment', 'frontendController@makeAppoinment')->name('appoinment');
Route::get('/getappoinment', 'frontendController@appoinmentForm')->name('appoinmentForm');
Route::post('storeAppoinment', 'frontendController@storeSerial')->name('StoreAppoinment');
Route::get('/drlist/{id}', 'frontendController@drList');
Route::get('/singledr/{id}', 'frontendController@singleDr');
Route::get('/dr/profile/{id}', 'frontendController@drProfile')->name('drProfile');
Route::get('success', 'frontendController@successMesage')->name('success');



// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/sym', function () {
    return view('symlinkexample');
});

Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return "Cleared!";
});

Route::get('/cache', function () {
    Artisan::call('route:cache');
    Artisan::call('view:cache');
    return "cache!";
});
