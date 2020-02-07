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
});

Route::get('/store', function () {
    return view('client/store');
});

Route::get('/test', function () {
    return view('client/test');
});
<<<<<<< Updated upstream
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

=======

Auth::routes(['verify' => true]);

Route::get('/profile', function () {
    // Only verified users may enter...
})->middleware('verified');

// Route::get('/admin', function () {

// })->middleware('');
Route::get('/admin', function () {
    return view('admin/index');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {

    Route::resource('/users', 'UserController');
    Route::resource('/roles', 'RoleController');
    Route::resource('/products', 'ProductController');
});
>>>>>>> Stashed changes
