<?php
use Illuminate\Support\Facades\Route;


// Not Authenticated
Route::group(['prefix' => '/', 'namespace' => 'Frontend'], function () {
    Route::get('/', 'HomeController@index');
});

// Authenticated
Route::group(['prefix' => '/', 'middleware' => ['auth'], 'namespace' => 'Frontend'], function () {
    Route::get('/protected', 'HomeController@protected'); // test purpose
});
