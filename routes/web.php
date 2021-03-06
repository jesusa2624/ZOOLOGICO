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

Route::get('/', 'HomeController@index')->name('index');
Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/evento','EventsController@index')->name('evento');
Route::get('/info','InfoController@index')->name('info');
Route::get('/tickets','TicketsController@index')->name('tickets');
Route::get('/gallery','GaleryController@index')->name('gallery');
Route::get('/contac','ContacController@index')->name('contact');


