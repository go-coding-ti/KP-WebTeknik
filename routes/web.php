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
    Route::get('/', 'AdminController\HomeController@index')->name('admin-home');

    //Kategori Controller
    Route::get('/category', 'AdminController\KategoriController@index')->name('admin-kategori-home');
    Route::post('/category/store', 'AdminController\KategoriController@store')->name('admin-kategori-store');
    Route::get('/category/{id}/edit', 'AdminController\KategoriController@edit')->name('admin-kategori-edit');
    Route::put('/category/{id}', 'AdminController\KategoriController@update')->name('admin-kategori-update');
    Route::delete('/category/{id}/delete', 'AdminController\KategoriController@destroy')->name('admin-kategori-destroy');

    //Pages Controller
    Route::get('/pages', 'AdminController\PageController@index')->name('admin-page-home');
    Route::get('/pages/create', 'AdminController\PageController@create')->name('admin-page-create');
    Route::post('/pages/store', 'AdminController\PageController@store')->name('admin-page-store');
    Route::get('/pages/{id}/edit', 'AdminController\PageController@edit')->name('admin-page-edit');
    Route::put('/pages/{id}', 'AdminController\PageController@update')->name('admin-page-update');
    Route::get('/pages/delete/{id}', 'AdminController\PageController@destroy')->name('admin-page-delete');
    Route::get('/pages/{pagestitle}', 'AdminController\PageController@show')->name('admin-page-show');
    Route::post('/pages/status', 'AdminController\PageController@status')->name('admin-page-status');

    //Video Controller
    Route::get('/video', 'AdminController\VideoController@index')->name('admin-video-home');
    Route::get('/video/create', 'AdminController\VideoController@create')->name('admin-video-create');
    Route::post('video/store', 'AdminController\VideoController@store')->name('admin-video-store');
    Route::get('/video/{id}/edit', 'AdminController\VideoController@edit')->name('admin-video-edit');
    Route::put('/video/{id}', 'AdminController\VideoController@update')->name('admin-video-update');
    Route::delete('/video/{id}/delete', 'AdminController\VideoController@destroy')->name('admin-video-destroy');
    Route::get('/video/show/{judul_slug}', 'AdminController\VideoController@show')->name('admin-video-show');

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
