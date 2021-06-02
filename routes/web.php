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

Auth::routes();
Route::get('/register-step-2', 'RegisterController@register_step_2')->name("register_step_2");
Route::post('/register-step-3', 'RegisterController@create')->name("register2");

Route::get('/home', 'HomeController@index')->name('home');
