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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/tips', 'PagesController@tips');
Route::get('/dataTerkini', 'PagesController@DataTerkini' );

//odp
Route::get('/odp', 'OdpController@index');
Route::get('/odp/json', 'OdpController@json')->name('odp.json');
Route::post('/odp', 'OdpController@store');
Route::put('/odp/{id}', 'OdpController@update');
Route::get('/odp/{id}', 'OdpController@destroy');

//pdp
Route::get('/pdp', 'PdpController@index');
Route::get('/pdp/json', 'PdpController@json')->name('pdp.json');
Route::post('/pdp', 'PdpController@store');
Route::put('/pdp/{id}', 'PdpController@update');
Route::get('/pdp/{id}', 'PdpController@destroy');

//positif
Route::get('/positif', 'PositifController@index');
Route::get('/positif/json', 'PositifController@json')->name('positif.json');
Route::post('/positif', 'PositifController@store');
Route::put('/positif/{id}', 'PositifController@update');
Route::get('/positif/{id}', 'PositifController@destroy');

//sembuh
Route::get('/sembuh', 'SembuhController@index');
Route::get('/sembuh/json', 'SembuhController@json')->name('sembuh.json');
Route::post('/sembuh', 'SembuhController@store');
Route::put('/sembuh/{id}', 'SembuhController@update');
Route::get('/sembuh/{id}', 'SembuhController@destroy');

//meninggal
Route::get('/meninggal', 'MeninggalController@index');
Route::get('/meninggal/json', 'MeninggalController@json')->name('meninggal.json');
Route::post('/meninggal', 'MeninggalController@store');
Route::put('/meninggal/{id}', 'MeninggalController@update');
Route::get('/meninggal/{id}', 'MeninggalController@destroy');