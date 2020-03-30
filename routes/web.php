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

Route::get('lang/{locale}', 'IndexController@lang')->name('lang');

Route::get('/', 'IndexController@index')->name('index');
Route::get('zh', 'IndexController@index_zh')->name('index_zh');

// Auth::routes();

Route::get('login335', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/pos', 'IndexController@pos')->name('pos');
route::post('/pos_submit', 'IndexController@pos_submit')->name('pos_submit');

route::get('/form/{id}', 'IndexController@form')->name('form');
route::post('/form_submit', 'IndexController@form_submit')->name('form_submit');

route::post('/bank_submit', 'IndexController@bank_submit')->name('bank_submit');

Route::any('/home', 'HomeController@index')->name('home');
Route::get('/sale/delete/{id}', 'HomeController@delete_sale')->name('sale.delete');

Route::any('/blocked', 'HomeController@blocked_phones')->name('blocked_phones');
Route::post('/blocked/create', 'HomeController@create_blocked_phone')->name('blocked_phones.create');
Route::get('/blocked/delete/{id}', 'HomeController@delete_blocked_phone')->name('blocked_phones.delete');
