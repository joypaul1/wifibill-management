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
    Route::get('/create','EmployeeController@create')->name('backend.employee.create');
    Route::post('/store','EmployeeController@store')->name('backend.employee.store');
    Route::get('/show','EmployeeController@show')->name('backend.employee.show');
    Route::get('/edit/{id}','EmployeeController@edit')->name('backend.employee.edit');
    Route::post('/update/{id}','EmployeeController@update')->name('backend.employee.destroy');
    Route::get('/delete/{id}','EmployeeController@destroy')->name('backend.employee.destroy');
});
