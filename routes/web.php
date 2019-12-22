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

use App\Code;

Route::get('/', function () {
    $codes = Code::all();
    return view('index', compact('codes'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
