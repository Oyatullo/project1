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

/*Routes*/
Route::get('/',"RouteController@getHome")->name('getHome');
Route::get('/about',"RouteController@getAbout")->name('getAbout');
Route::get('/product',"RouteController@getProduct")->name('getProduct');
Route::get('/contact',"RouteController@getContact")->name('getContact');
Route::get('/post',"RouteController@getPost")->name('getPost');

Route::get('/productAdd','RouteController@addProduct')->name('addProduct');

Route::post('/productAdd/submit',"ProductController@submitProduct")->name('submitProduct');
Route::post('/product/all','ProductController@allData')->name('allCard');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
