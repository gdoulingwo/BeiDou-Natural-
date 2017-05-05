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
View::addExtension('html', 'php');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/', 'AdminController@index');
Route::get('/admin/contingencyPlan', 'Admin\ContingencyPlanController@index');
Route::post('/admin/contingencyPlan', 'Admin\ContingencyPlanController@store');
