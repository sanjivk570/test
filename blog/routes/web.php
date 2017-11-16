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

Route::get('/', function () {
	echo "test for home page";
    return view('test');
});

Route::get('about-us/{id?}', function ($id = 2) {
	echo "this is a id=> ".$id ;
    //return view('about-us');
});

//Route::get('users', 'CustomerController@index'); 
Route::resource('customers', 'CustomerController');
Route::resource('orders', 'OrderController');
Route::resource('roles', 'RoleController');
Route::resource('users', 'UserController');
Route::resource('profiles', 'ProfileController');
