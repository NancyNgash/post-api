<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('/posts', 'ApiController@index')->name('index');
Route::post('/posts', 'ApiController@store')->name('store');
Route::post('/posts/{post}', 'ApiController@update')->name('update');
Route::post('/posts/{post}', 'ApiController@destroy')->name('destroy');
Route::get('/comments', 'ApiController@comment')->name('comment');
Route::get('/albums', 'ApiController@album')->name('album');
Route::get('/photos', 'ApiController@photo')->name('photo');


Route::get('/create', 'ApiController@create')->name('create');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
