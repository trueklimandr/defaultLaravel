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

//Route::get('heroes', 'HeroController@index');
//
//Route::get('heroes/create', 'HeroController@create');
//
//Route::post('heroes', 'HeroController@store');
//
//Route::get('heroes/{id}/delete', 'HeroController@delete');
//
//Route::delete('heroes/{id}', 'HeroController@remove');

Route::resource('heroes', 'HeroController');
