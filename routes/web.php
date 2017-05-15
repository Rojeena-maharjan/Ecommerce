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


Route::get('/','ShirtController@index')->name('home');

// Route::get('/shirts','ShirtController@shirts')->name('shirts');
// Route::get('/shirt','ShirtController@shirt')->name('shirt');
// Route::get('/contact','ShirtController@contact')->name('contact');


// Auth::routes();




// Route::get('/home', 'HomeController@index');
// Route::resource('cart', 'CartController');
// Route::get('/cart/add-items/{id}', 'CartController@addItem')->name('cart.addItem');

// Route::get('/logout', 'Auth\LoginController@logout');

// Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function(){

// 	Route::get('/',function(){

// 		return view('admin.index');
// 	})->name('admin.index');

// 	Route::resource('product','ProductsController');
// 	Route::resource('category','CategoriesController');

// 	Route::get('/orders/{type?}','OrderController@orders');

// 	Route::post('toggledeliver/{orderId}', 'OrderController@toggledeliver')->name('toggle.deliver');
// });


// Route:: group(['middleware'=>'auth'],function(){

// 	Route::get('shipping','CheckoutController@shipping')->name('checkout.shipping');
// });


// Route::get('payment','CheckoutController@payment')->name('checkout.payment');

// Route::post('store','CheckoutController@store')->name('payment.store');

// Route::resource('address','AddressController');


Route::resource('blog','BlogController');

Route::resource('comment','CommentController');