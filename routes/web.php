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

Route::get('/', 'ProjectdetailsController@show');
Route::get('addproject', 'ProjectdetailsController@create');
Route::get('projectdelete/{id}', 'ProjectdetailsController@destroy');
Route::get('projectedit/{id}', 'ProjectdetailsController@edit');
Route::post('projectupdate/{id}', 'ProjectdetailsController@update')->name('project.edit');


Route::post('saveproject', 'ProjectdetailsController@store');
