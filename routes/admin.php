<?php

use App\Http\Controllers\Admin\CouponController;
use Illuminate\Support\Facades\Route;


// admin route
Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'namespace' => 'App\Http\Controllers\Admin'], function () {
    Route::resource('category', 'CategoryController');
    Route::resource('sub-category', 'SubCategoryController');
    Route::resource('brand', 'BrandController');
    Route::resource('warehouse', 'WarehouseController');
    Route::resource('pickup_point', 'PickupPointController');
    Route::resource('product', 'ProductController');
    Route::resource('campaign', 'CampaignController');
    Route::resource('coupon', 'CouponController');
    Route::get('coupon/status/{id}','CouponController@status')->name('coupon.status');
    // Route::get('coupon/show_page', 'CouponController@sshow_page_index')->name('scoupon_show_page');
    Route::get('page', 'CouponController@show_page_index')->name('coupon_show_page');
    Route::get('coupon/show_page', 'CouponController@sshow_page_index')->name('scoupon_show_page');
    Route::get('setting/show', 'SettingController@index')->name('setting.show');
    Route::get('setting/store', 'SettingController@index')->name('setting.store');
    Route::post('setting/store', 'SettingController@webside_setting_store')->name('setting.store');
    Route::post('setting/edit/{id}', 'SettingController@webside_setting')->name('setting.edit');
    Route::get('smtp/setting/', 'SmtpController@index')->name('smtp.setting');
    Route::post('smtp/setting/update/{id}', 'SmtpController@update')->name('smtp.setting.update');
    Route::get('change/password', 'Auth@changePasswordShow')->name('change.password');
    Route::post('change/password', 'Auth@changePassword')->name('change.password');
    Route::get('logOut', 'Auth@logOut')->name('logOut');
});
Route::get('product/not-featured/{id}', [App\Http\Controllers\Admin\ProductController::class, 'notfeatured']);
Route::get('product/active-featured/{id}', [App\Http\Controllers\Admin\ProductController::class, 'activefeatured']);
Route::get('product/active-deal/{id}', [App\Http\Controllers\Admin\ProductController::class, 'activedeal']);
Route::get('product/not-deal/{id}', [App\Http\Controllers\Admin\ProductController::class, 'notdeal']);
Route::get('product/active-status/{id}', [App\Http\Controllers\Admin\ProductController::class, 'activestatus']);
Route::get('product/not-status/{id}', [App\Http\Controllers\Admin\ProductController::class, 'notstatus']);
Route::get('campaign/active-status/{id}', [App\Http\Controllers\Admin\CampaignController::class, 'activestatus']);
Route::get('campaign/not-status/{id}', [App\Http\Controllers\Admin\CampaignController::class, 'notstatus']);
Route::get('cat', [App\Http\Controllers\Admin\ProductController::class, 'cat']);
