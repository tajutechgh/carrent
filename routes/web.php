<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

// User Routes
Route::group(['namespace'=>'User'],function(){

    // about route
    Route::get('user/about', 'PagesController@about')->name('about');
    
    // booking route
    Route::post('user/booking', 'BookingController@store')->name('booking');
    
    // service route
    Route::get('user/service', 'PagesController@service')->name('service');
    
    // contact route
    Route::resource('user/contact','ContactController');
});

// Admin Routes
Route::group(['namespace'=>'Admin'],function(){

    // home route
    Route::get('admin/home', 'HomeController@index')->name('index');

    // vehicle route
    Route::resource('admin/vehicle','VehicleController');
    
    // driver route
    Route::resource('admin/driver','DriverController');
    
    // booking route
    Route::resource('admin/booking','BookingController');
    
    // permission route
    Route::resource('admin/permission','PermissionController');
    
    // role route
    Route::resource('admin/role','RoleController');
    
    // user route
    Route::resource('admin/user','UserController');
    
    // booking report route
    Route::get('admin/bookingReport','ReportController@bookingReport')->name('bookingReport');

    Route::post('admin/searchBookingReport','ReportController@searchBookingReport')->name('searchBookingReport');
});