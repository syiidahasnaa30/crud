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

use Illuminate\Routing\Route;

Route::get('/home', function () {
    return view('welcome');
});
Route::get('/master', function () {
    return view('adminlte.master');
});
Route::get('/test/{angka}', function ($angka) {
    return view('test', ["angka" => $angka]);
});
Route::get('/halo/{nama}', function ($nama) {
    return "<h1>halo " . $nama . "</h1>";
});
Route::get('/', "Homecontroller@home");
Route::get('/register', 'Authcontroller@register');
Route::post('/welcome', 'Authcontroller@welcome');

Route::get('/pertanyaan', 'PertanyaanController@index');
Route::get('/pertanyaan/create', 'PertanyaanController@create');
Route::post('/pertanyaan', 'PertanyaanController@store');
Route::get('/pertanyaan/{id}', 'PertanyaanController@show');
Route::get('/pertanyaan/edit/{pertanyaan_id}', 'PertanyaanController@edit');
Route::post('/pertanyaan/edit/{pertanyaan_id}', 'PertanyaanController@update');
Route::delete('/pertayaan/{pertanyaan_id}');
Route::get('/jawaban/{pertanyaan_id}', 'JawabanController@index');
Route::post('/jawaban/{pertanyaan_id}', 'JawabanController@store');
Route::get('/jawaban/edit/{pertanyaan_id}', 'JawabanController@edit');
Route::POST('/jawaban/edit/{pertanyaan_id}', 'JawabanController@update');
