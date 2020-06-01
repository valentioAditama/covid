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
Route::get('/', 'HomeController@login');
Route::get('/index', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::get('/tips', 'HomeController@tips');
Route::get('/dataTerkini', 'HomeController@DataTerkini' );

//odp
Route::resource('/odp','OdpController')->except(['show','update']);

//pdp
Route::resource('/pdp','PdpController')->except(['show','update']);

//positif
Route::resource('/positif','PositifController')->except(['show','update']);
Route::get('/positif/{id}', 'PositifController@destroy');

//sembuh
Route::resource('/sembuh','SembuhController')->except(['show','update']);

//meninggal
Route::resource('/meninggal','MeninggalController')->except(['show','update']);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('index');
