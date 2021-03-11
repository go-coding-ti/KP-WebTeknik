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


//Pages Front End Routes




//Admin Route
//Route::get('/', 'AdminController\BeritaController@index')->name('admin-berita');

Route::prefix('admin')->group(function () {

	//Admin Home Route Belum Fix
    Route::get('/', 'AdminController\BeritaController@index')->name('admin-home');


    //Pages Controller
    Route::get('/pages', 'AdminController\PageController@index')->name('admin-page-home');
    Route::get('/pages/create', 'AdminController\PageController@create')->name('admin-page-create');
    Route::post('/pages/store', 'AdminController\PageController@store')->name('admin-page-store');
    
    Route::get('/pages/{pagestitle}', 'AdminController\PageController@show')->name('admin-page-show');

    Route::post('/pages/status', 'AdminController\PageController@status')->name('admin-page-status');

    //Berita Controller
    Route::get('/berita', 'AdminController\BeritaController@index')->name('admin-berita-home');
    Route::get('/berita/create', 'AdminController\BeritaController@create')->name('admin-berita-create');
    Route::post('/berita/store', 'AdminController\BeritaController@store')->name('admin-berita-store');
    Route::get('/berita/{id}/edit', 'AdminController\BeritaController@edit')->name('admin-berita-edit');
    Route::post('/berita/update', 'AdminController\BeritaController@update')->name('admin-berita-update');
    Route::get('/berita/{id}/delete', 'AdminController\BeritaController@destroy')->name('admin-berita-delete');

    //Agenda Controller
    Route::get('/agenda', 'AdminController\AgendaController@index')->name('admin-agenda-home');
});
