<?php

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/
// Auth

use App\Models\Product;

Auth::routes(['verify' => true]);

// store
Route::get('/home', 'HomeController@index')->name('Nike Store');
Route::post('/search', 'SearchController@index')->name('search');
Route::get('/filter', 'SearchController@filter')->name('filter');
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
        Route::resource('/orders', 'OrderController');
        Route::get('/orders-queue', 'OrderController@queue')->name('orders.queue');
        Route::get('/orders-prepare', 'OrderController@prepare')->name('orders.prepare');
        Route::get('/orders-deliver', 'OrderController@deliver')->name('orders.deliver');
        Route::get('/orders-complete', 'OrderController@complete')->name('orders.complete');
        Route::resource('/products', 'ProductController');
        Route::resource('/producttypes', 'ProductTypeController');
        Route::resource('/productcategories', 'ProductCategoryController');
        Route::resource('/promotions', 'PromotionController');
        Route::resource('/users', 'UserController');
        Route::resource('/roles', 'RoleController');

        // status
        Route::get('/status', 'HomeController@adminStatus')->name('status');
    });
});



/*
|--------------------------------------------------------------------------
| Client routes
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    $products = Product::latest()->paginate(9);
    return view('client.home.index', compact('products'));
});
Route::prefix('/account')->group(function () {
    Route::resource('/profile', 'ProfileController')->middleware('verified');
    // Route::resource('/orderhistory', 'OrderHistoryController')->middleware('verified');
    Route::resource('/orderhistory', 'OrderHistoryController');
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
    Route::resource('/swiper', 'SwiperController');
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
