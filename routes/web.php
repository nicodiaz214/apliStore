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
//Route::get('/', 'IndexController@create');
Route::post('/', 'IndexController@store');
Route::get('/userprofile', 'UsersController@index');
Route::get('/applications', 'ApplicationsController@index');
Route::get('/applications/{id}', 'ApplicationsController@show');
Route::get('/applications', 'ApplicationsController@search');
Route::get('/categories', 'CategoriesController@index');
Route::get('/categories/{id}', 'CategoriesController@show');
Route::get('/userprofile/orders','OrdersController@index');
Route::post('/userprofile/orders','OrdersController@store');
Route::get('/userprofile/orders','OrdersController@list');
Route::post('/userprofile/list','CommentsController@store');


//desarrollador
Route::group(['prefix' => 'developer', 'middleware'=>'developer'], function (){
Route::get('/applications/add', 'ApplicationsController@create');
Route::post('/applications/add', 'ApplicationsController@store');
Route::get('/applications/list','ApplicationsController@list');
Route::get('/applications/{id}/edit', 'ApplicationsController@edit');
Route::patch('/applications/{id}', 'ApplicationsController@update');
Route::delete('/applications/{id}', 'ApplicationsController@destroy');
});


//login - registro
Auth::routes();

