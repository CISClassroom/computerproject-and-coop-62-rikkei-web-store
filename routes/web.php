<?php

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/
// Auth
Auth::routes(['verify' => true]);

// store
Route::get('/home', 'HomeController@index')->name('Nike Store');
Route::resource('/cart', 'CartController');

// status
Route::get('/status', 'HomeController@status')->name('status');



/*
|--------------------------------------------------------------------------
| Admin routes
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => ['auth']], function () {
    Route::prefix('/admin')->group(function () {
        Route::get('/dashboard', function () {
            return view('admin/layouts/test');
        });
        Route::resource('/', 'AdminHomeController');
        Route::resource('/queued', 'OrderController');
        Route::resource('/preparing', 'OrderController');
        Route::resource('/delivered', 'OrderController');
        Route::resource('/completed', 'OrderController');
        Route::resource('/products', 'ProductController');
        Route::resource('/producttypes', 'ProductTypeController');
        Route::resource('/productcategories', 'ProductCategoryController');
        Route::resource('/users', 'UserController');
        Route::resource('/roles', 'RoleController');
    });
});



/*
|--------------------------------------------------------------------------
| Client routes
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('client/home');
});
Route::prefix('/account')->group(function () {
    Route::resource('/profile', 'ProfileController')->middleware('verified');
    Route::resource('/orderhistory', 'OrderHistoryController')->middleware('verified');
    Route::resource('/favorite', 'FavoriteController')->middleware('verified');
    Route::resource('/address', 'AddressController')->middleware('verified');


    Route::post('/address-store-ajax', 'AddressController@storeAjax')
        ->middleware('verified')
        ->name('storeAjax');
});

Route::resource('/shop', 'ShopController');
Route::resource('/swiper', 'SwiperController');

//need to login and verified to checkout
Route::resource('/checkout', 'CheckoutController')->middleware('verified');
Route::post('/storeCartSummary', 'CheckoutController@storeCartSummary')->middleware('verified')->name('storeCartSummary');
Route::post('/applyPromotionCode', 'CheckoutController@applyPromotionCode')->middleware('verified')->name('applyPromotionCode');
Route::get('/summary', 'CheckoutController@summary')->middleware('verified')->name('summary');
Route::resource('/payment', 'PaymentController')->middleware('verified');
Route::get('/storeOrder', 'CartController@storeOrder')->middleware('verified')->name('storeOrder');
Route::get('/storeProductOrder', 'CartController@storeProductOrder')->middleware('verified')->name('storeProductOrder');







/*
|--------------------------------------------------------------------------
| test routes
|--------------------------------------------------------------------------
*/
Route::name('Test')->group(function () {
    Route::get('/test', function () {
        return view('client/shop/checkouts/success');
    });
    Route::get('/test2', function () {
        return view('client/test2');
    });
    Route::get('/test3', function () {
        return view('client/shop/carts/index');
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
