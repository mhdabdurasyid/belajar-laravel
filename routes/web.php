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

//Route::get('/', 'HomeController@home');

//Route::get('/register', 'AuthController@form');

//Route::post('/welcome', 'AuthController@welcome');

// Route::get('/', function () {
// return view('welcome');
// });

//Route::get('/data-tables', function () {
//return view('data-tables');
//});

// Route::get('/pertanyaan', 'PertanyaanController@index');
// Route::get('/pertanyaan/create', 'PertanyaanController@create');
// Route::post('/pertanyaan', 'PertanyaanController@store');
// Route::get('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@show');
// Route::get('/pertanyaan/{pertanyaan_id}/edit', 'PertanyaanController@edit');
// Route::put('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@update');
// Route::delete('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@destroy');

Route::resource('pertanyaan', 'PertanyaanController');

Auth::routes();

Route::get('/', 'PertanyaanController@index');
