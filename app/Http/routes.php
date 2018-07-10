<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::auth();

Route::get('/', function () {
    return view('auth.login');
});

//Route::get('/', 'CustomersController@index');

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/Customers', 'CustomersController@index');
Route::get('/Customers/create', 'CustomersController@create');
Route::resource('Customers', 'CustomersController');

