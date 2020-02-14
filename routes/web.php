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

// home
Route::get('/home', 'HomeController@index')->name('home');

// Client routes
Route::get('/shop', 'ShopController@index');
Route::get('/', function () {
    return view('client/home');
});

// test
Route::get('/test', function () {
    return view('client/test');
});

// verified user profile Only verified users may enter...
Route::get('/profile', function () {
    //
})->middleware('verified');

// Route::get('/admin', function () {
// })->middleware('');


// Admin routes
Route::group(['middleware' => ['auth']], function () {
    Route::prefix('admin')->group(function () {
        // Route::resource('/', 'UserController');
        Route::get('/', function () {
            return view('admin/home');
        })->middleware('');

        // used to be outside of group
        Route::get('/test', function () {
            return view('admin/layouts/test');
        });
        Route::get('/dashboard', function () {
            return view('admin/layouts/test');
        });

        //shoud be in here
        Route::resource('/users', 'UserController');
        Route::resource('/roles', 'RoleController');
        Route::resource('/products', 'ProductController');
    });
});
