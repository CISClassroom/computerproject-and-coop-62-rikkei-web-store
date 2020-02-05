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
    return view('client/home');
    // ->withSuccess('Success message')
});
Route::get('/store', function () {
    return view('client/store');
});
Route::get('/test', function () {
    return view('client/test');
});
Auth::routes(['verify' => true]);

Route::get('/profile', function () {
    // Only verified users may enter...
})->middleware('verified');

Route::get('/admin', function () {
    
})->middleware('RolesAuth');

Route::get('/home', 'HomeController@index')->name('home');
