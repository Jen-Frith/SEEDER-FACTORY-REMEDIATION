<?php

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


Route::get('/jokes', function () {return view('jokes');})->name('jokes');

Route::get('/pomme', 'RemediationController@index', function(){})->name('pomme');

Route::get('/pomme/edit', 'RemediationController@edit', function(){})->name('pommeEdit');
Route::get('/pomme/show', 'RemediationController@show', function(){})->name('pommeShow');
Route::get('/pomme/destroy', 'RemediationController@destroy', function(){})->name('pommeDestroy');


Route::get('/user/create', 'PostController@create',function(){})->name('user.create');
Route::post('/user/store', 'PostController@store',function(){})->name('user.store');
Route::get('/user/show', 'PostController@show',function(){})->name('user.show');