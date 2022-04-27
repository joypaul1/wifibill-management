<?php

use Illuminate\Support\Facades\Route;

// customer page
Route::group(['prefix' => '/customer'], function (){
    Route::get('/','CustomerController@index')->name('backend.customer.index');
    Route::get('/show','CustomerController@show')->name('backend.customer.show');
    Route::get('/delete/{id}','CustomerController@destroy')->name('backend.customer.destroy');
});


// employee page
Route::group(['prefix' => '/employee'], function (){
    Route::get('/','EmployeeController@index')->name('backend.employee.index');
    Route::get('/show','EmployeeController@show')->name('backend.employee.show');
    Route::get('/delete/{id}','EmployeeController@destroy')->name('backend.employee.destroy');
});
