<?php

use App\Http\Controllers\CrudController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('crud_show', 'App\Http\Controllers\CrudController@show');
Route::get('crud_delete/{id}', 'App\Http\Controllers\CrudController@destroy');

Route::get('crud_create', 'App\Http\Controllers\CrudController@create');
Route::post('crud_submit', 'App\Http\Controllers\CrudController@store');

Route::get('crud_edit/{id}', 'App\Http\Controllers\CrudController@edit');
Route::post('crud_update/{id}', 'App\Http\Controllers\CrudController@update')->name('crud.update');




