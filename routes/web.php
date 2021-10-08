<?php

use Illuminate\Support\Facades\Route;
use Livewire\Component;

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

// Route::get('/test',function(){


//     return view('layouts.dashbord.app');
// });

Auth::routes();
Route::get('/',function(){

return redirect()->route('dashbord.index');

});

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/login_user','AloginController@index')->name('login_user');     

Route::group(
    ['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath','auth','user' ]
    ],
     function(){ 
       
         

        

 Route::get('/user','User\UserController@index')->name('user.content');
//carts
Route::resource('carts','User\CartController');
Route::get('/cart_destroy/{id}','User\CartController@destroy')->name('carts.destroy'); 
Route::get('/carts/edit/{id}', 'User\CartController@edit')->name('carts.edit');
Route::get('/carts/update/{id}', 'User\CartController@update')->name('carts.update');
Route::get('/carts/show/{id}', 'User\CartController@show')->name('carts.show');
// add to cart

Route::get('/add/to/cart/{id}','User\CartController@AddCart');


Route::get('/add/to/cart2/{id}','User\CartController@AddCart2');
//checkout
Route::get('/checkout','User\CheckoutController@index')->name('user.checkout');
Route::get('handle-payment', 'User\PayPalPaymentController@handlePayment')->name('make.payment');
Route::get('cancel-payment', 'User\PayPalPaymentController@paymentCancel')->name('cancel.payment');
Route::get('payment-success', 'User\PayPalPaymentController@paymentSuccess')->name('success.payment');
Route::resource('offers','User\OfferController') ; 
    Route::get('/', 'User\OfferController@index')->name('offers.all');
    Route::get('checkout/{offer_id}', 'User\OfferController@show')->name('offers.show');
    Route::get('/request/{total_price}','User\PaymentController@sendperformrequest')->name('user.payment');
Route::get('/handeler','User\HandleController@gethandlerrequest')->name('user.handle');


});


Route::get('/test',function(){

return view('user.myfatorah');

});
Route::get('/x',function(){

return view('user.details');

})->name('user.details');