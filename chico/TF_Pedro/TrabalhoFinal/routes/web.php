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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/public/ver-jogos', 'JogosController@index');
Route::get('/public/ver-plataformas', 'PlataformasController@index');
Route::get('/private/create-jogo', 'JogosController@create');
Route::get('/private/create-plataforma', 'PlataformasController@create');
Route::post('/private/jogos/store', 'JogosController@store');
Route::post('/public/ver-jogos', 'JogosController@search');
Route::get('/public/{id}', 'JogosController@show');
Route::get('/private-jogos/{id}/edit', 'JogosController@edit');
Route::delete('/private-jogos/{id}', 'JogosController@destroy');
Route::patch('/private-jogos/{id}', 'JogosController@update');
Route::get('/private-plataformas/{id}/edit', 'PlataformasController@edit');
Route::delete('/private-plataformas/{id}', 'PlataformasController@destroy');
Route::patch('/private-plataformas/{id}', 'PlataformasController@update');
Route::post('/private/plataformas/store', 'PlataformasController@store');
