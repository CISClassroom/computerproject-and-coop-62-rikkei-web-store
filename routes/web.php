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
// Public Routes

// Auth
Auth::routes(['verify' => true]);

// home
Route::get('/home', 'HomeController@index')->name('home');

// profile
Route::get('/profile', function () {
    // verified user profile Only verified users may enter...
})->middleware('verified');


// Admin routes
Route::group(['middleware' => ['auth']], function () {
    Route::prefix('/admin')->group(function () {
        Route::get('/', function () {
            return view('admin/home');
        });
        Route::get('/dashboard', function () {
            return view('admin/layouts/test');
        });

        Route::resource('/users', 'UserController');
        Route::resource('/roles', 'RoleController');
        Route::resource('/products', 'ProductController');
        Route::resource('/producttypes', 'ProductTypeController');
        Route::resource('/productcategories', 'ProductCategoryController');
    });
});

// Client routes
Route::get('/', function () {
    return view('client/home');
});
Route::resource('/shop', 'ShopController');
Route::resource('/swiper', 'SwiperController');

// cannot use, cause bug, why?
// Route::prefix('/shop')->group(function () {
// });

// test
Route::name('Test')->group(function () {
    Route::get('/test', function () {
        return view('client/test');
    });
    Route::get('/email', function () {
        return view('auth/oldauth/passwords/email');
    });
    Route::get('/show', function () {
        return view('client/shop/show');
    });
    //admin test
    Route::get('/admin/test', function () {
        return view('admin/layouts/test');
    });
});
