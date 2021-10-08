<?php

Route::group(
    ['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath','auth','admin' ]
    ],
     function(){ 
        

 Route::get('/dashbord','DashbordController@index')->name('dashbord.index');

//users
Route::resource('users','UserController')->except(['show']);
Route::get('/user_destroy/{id}','UserController@destroy')->name('users.destroy'); 
Route::get('/users/edit/{id}', 'UserController@edit')->name('users.edit');
Route::get('/users/update/{id}', 'UserController@update')->name('users.update');
//categories
Route::resource('categories','CategoryController')->except(['show']);
Route::get('/category_destroy/{id}','CategoryController@destroy')->name('categories.destroy'); 
Route::get('/categories/edit/{id}', 'CategoryController@edit')->name('categories.edit');
Route::get('/categories/update/{id}', 'CategoryController@update')->name('categories.update');

  //products
  Route::resource('products','ProductController')->except(['show']);
  Route::get('/product_destroy/{id}','ProductController@destroy')->name('products.destroy'); 
  Route::get('/products/edit/{id}', 'ProductController@edit')->name('products.edit');
  Route::get('/products/update/{id}', 'ProductController@update')->name('products.update');
//clients
Route::resource('clients','ClientController')->except(['show']);
Route::get('/client_destroy/{id}','ClientController@destroy')->name('clients.destroy'); 
Route::get('/clients/edit/{id}', 'ClientController@edit')->name('clients.edit');
Route::get('/clients/update/{id}', 'ClientController@update')->name('clients.update');

//orders
Route::resource('clients.orders','client\OrderController')->except(['show']);
Route::get('/clients.orders_destroy/{id}','client\OrderController@destroy')->name('clients.orders.destroy'); 
Route::get('/clients.orders/edit/{client_id}/{order_id}', 'client\OrderController@edit')->name('clients.orders.edit');
Route::get('/clients.orders/update/{client_id}/{order_id}', 'client\OrderController@update')->name('clients.orders.update');
//orders views
Route::resource('orders','OrderController');
Route::get('/order_destroy/{id}','OrderController@destroy')->name('orders.destroy'); 
Route::get('/orders/edit/{id}', 'OrderController@edit')->name('orders.edit');
Route::get('/orders/update/{id}', 'OrderController@update')->name('orders.update');
Route::get('/orders_show/{id}','OrderController@show');
Route::get('/orders/{order}/products','OrderController@products')->name('orders.products');





     });


?>