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

Route::get('sample/index', 'SampleController@index');

Route::get('sample/tpl', 'SampleController@tpl');

Route::get('sample/child', 'SampleController@child');

Route::get('sample/view-compose', 'SampleController@viewCompose');

Route::get('sample/request1', 'SampleController@request1');
Route::match(['get', 'post'],'sample/request2', 'SampleController@request2');

Route::post('sample/post', 'SampleController@post');

Route::get('sample/session1', 'SampleController@session1');
Route::get('sample/session2', 'SampleController@session2');
