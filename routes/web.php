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

Route::get('/', function () {
    return view('pages/index');
});


//Admin Route
Route::get('/', 'AdminController\BeritaController@index')->name('admin-berita');

Route::prefix('admin')->group(function () {
    Route::get('/', 'AdminController\HomeController@Home')->name('admin-home');

    //Berita Controller
    Route::get('/berita', 'AdminController\BeritaController@index')->name('admin-berita-home');






    Route::get('/{id}/delete', 'ValidatorController@destroy')->name('admin-delete');
    Route::get('/create', 'ValidatorController@index')->name('admin-create');
    Route::post('/store', 'ValidatorController@store')->name('admin-store');

    //agenda
    Route::get('/agenda', 'AgendaController@index')->name('admin-agenda');
});
