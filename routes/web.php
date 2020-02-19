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

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('/', 'IndexController@index');
Route::get('login', function () {
    return view('login');
});
Route::get('register', function () {
    return view('register');
});

Route::get('categories', 'CategoriesController@index');
Route::get('/category/{id}', 'CategoriesController@show');
route::get('applications', 'ApplicationsController@index');
route::get('applications/{id}', 'ApplicationsController@show');
