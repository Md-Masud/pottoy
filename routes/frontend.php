<?php

use Illuminate\Support\Facades\Route;

// Frontend Route
Route::group(['namespace' => 'App\Http\Controllers\Frontend'], function(){
    Route::get('/', 'FrontendController@index')->name('index');
    Route::get('/product/details', 'FrontendController@details')->name('details');
    Route::get('/customer/login', 'FrontendController@userLogin')->name('user.login');
    Route::get('/customer/register', 'FrontendController@userRegister')->name('user.register');
    Route::post('/customer/login', 'CustomerController@login')->name('customer.login');
    Route::post('/customer/register', 'CustomerController@registration')->name('customer.registration');
    Route::get('product/details/{slug}','FrontendController@product_details')->name('product.details.show');
});
