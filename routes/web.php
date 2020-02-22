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

//website
Route::get('/', 'IndexController@index');
Route::get('/', 'IndexController@create');
Route::post('/', 'IndexController@store');
Route::get('categories', 'CategoriesController@index');
Route::get('/categories/{id}', 'CategoriesController@show');
Route::get('/applications', 'ApplicationsController@index');
Route::get('/applications/{id}', 'ApplicationsController@show');
Route::get('/applications', 'ApplicationsController@search');

//desarrollador
Route::group(['prefix' => 'developer'], function (){
route::get('/applications/add', 'ApplicationsController@create');
route::post('/applications/add', 'ApplicationsController@store');
Route::get('/applications/{id}/edit', 'ApplicationsController@edit');
Route::patch('/applications/{id}', 'ApplicationsController@update');
});


//login - registro
Auth::routes();

