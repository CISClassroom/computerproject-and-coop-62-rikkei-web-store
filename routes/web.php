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

Auth::routes(['verify' => true]);

// Client routes
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('client/home');
});

Route::get('/store', function () {
    return view('client/store');
});

Route::get('/test', function () {
    return view('client/test');
});

// Admin routes
Route::get('/admin/test', function () {
    return view('admin/layouts/test');
});
Route::get('/admin/dashboard', function () {
    return view('admin/layouts/test');
});

Route::get('/profile', function () {
    // Only verified users may enter...
})->middleware('verified');

// Route::get('/admin', function () {

// })->middleware('');
Route::get('/admin', function () {
    return view('admin/index');
});

Route::group(['middleware' => ['auth']], function () {

    Route::resource('/admin/users', 'UserController');
    Route::resource('/admin/roles', 'RoleController');
    Route::resource('/admin/products', 'ProductController');
});
