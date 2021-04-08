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
Route::redirect('/', '/id');
Route::group(['prefix' => '{language}'], function () {
    Route::get('/', function () {
        return view('pages/index');
    })->name('Index');

    Route::get('/video', function () {
        return view('pages/video');
    })->name('Video');
    
    Route::get('/video/detail', function () {
        return view('pages/detail-video');
    })->name('Detail Video');

    Route::get('/agenda', function () {
        return view('pages/agenda');
    })->name('Agenda');

    Route::get('/agenda/detail', function () {
        return view('pages/detail-agenda');
    })->name('Detail Agenda');

    Route::get('/pengumuman', function () {
        return view('pages/pengumuman');
    })->name('Pengumuman');

    Route::get('/pengumuman/detail', function () {
        return view('pages/detail-pengumuman');
    })->name('Detail Pengumuman');

    Route::get('/berita', function () {
        return view('pages/berita');
    })->name('Berita');

    Route::get('/berita/detail', function () {
        return view('pages/detail-berita');
    })->name('Detail Berita');

    Route::get('/staff-pengajar', function () {
        return view('pages/staff-pengajar');
    })->name('Staff Pengajar');

    Route::get('/staff-pengajar/detail', function () {
        return view('pages/detail-staff-pengajar');
    })->name('Detail Staff Pengajar');

    Route::get('/management', function () {
        return view('pages/management');
    })->name('Management');

    Route::get('/management/detail', function () {
        return view('pages/detail-management');
    })->name('Detail Management');

    Route::get('/about', function () {
        return view('pages/tentang-teknik');
    })->name('About');
});

//Pages Front End Routes




//Admin Route
//Route::get('/', 'AdminController\BeritaController@index')->name('admin-berita');

Route::prefix('admin')->group(function () {

	//Admin Dashboard
    Route::get('/dashboard', 'AdminController\HomeController@index')->name('admin-home');

    //Kategori Controller
    Route::get('/category', 'AdminController\KategoriController@index')->name('admin-kategori-home');
    Route::post('/category/store', 'AdminController\KategoriController@store')->name('admin-kategori-store');
    Route::get('/category/{id}/edit', 'AdminController\KategoriController@edit')->name('admin-kategori-edit');
    Route::put('/category/{id}', 'AdminController\KategoriController@update')->name('admin-kategori-update');
    Route::delete('/category/{id}/delete', 'AdminController\KategoriController@destroy')->name('admin-kategori-destroy');

    //Post Controller
    Route::get('/posts', 'AdminController\PostController@index')->name('admin-post-home');
    Route::get('/posts/create', 'AdminController\PostController@create')->name('admin-post-create');
    Route::post('/posts/store', 'AdminController\PostController@store')->name('admin-post-store');
    Route::get('/posts/{id}/edit', 'AdminController\PostController@edit')->name('admin-post-edit');
    Route::post('/posts/{id}', 'AdminController\PostController@update')->name('admin-post-update');
    Route::get('/posts/delete/{id}', 'AdminController\PostController@destroy')->name('admin-post-delete');
    Route::get('/posts/show/{kategori}/{judul_slug}', 'AdminController\PostController@show')->name('admin-post-show');
    Route::post('/posts/status', 'AdminController\PostController@status')->name('admin-post-status');

    //Pages Controller
    Route::get('/pages', 'AdminController\PageController@index')->name('admin-page-home');
    Route::get('/pages/create', 'AdminController\PageController@create')->name('admin-page-create');
    Route::post('/pages/store', 'AdminController\PageController@store')->name('admin-page-store');
    Route::get('/pages/{id}/edit', 'AdminController\PageController@edit')->name('admin-page-edit');
    Route::put('/pages/{id}', 'AdminController\PageController@update')->name('admin-page-update');
    Route::get('/pages/delete/{id}', 'AdminController\PageController@destroy')->name('admin-page-delete');
    Route::get('/pages/{pagestitle}', 'AdminController\PageController@show')->name('admin-page-show');
    Route::post('/pages/status', 'AdminController\PageController@status')->name('admin-page-status');

    //Menu Controller
    Route::get('/menu', 'AdminController\MenuController@index')->name('admin-menu-home');

    //Pengaturan Controller
    //Social Controller
    Route::get('/setting/social', 'AdminController\SocialController@index')->name('admin-social-home');
    Route::post('setting/social/{id}/store', 'AdminController\SocialController@update')->name('admin-social-update');

    //Video Controller
    Route::get('/videos', 'AdminController\VideoController@index')->name('admin-video-home');
    Route::get('/videos/create', 'AdminController\VideoController@create')->name('admin-video-create');
    Route::post('videos/store', 'AdminController\VideoController@store')->name('admin-video-store');
    Route::get('/videos/{id}/edit', 'AdminController\VideoController@edit')->name('admin-video-edit');
    Route::put('/videos/{id}', 'AdminController\VideoController@update')->name('admin-video-update');
    Route::delete('/videos/{id}/delete', 'AdminController\VideoController@destroy')->name('admin-video-destroy');
    Route::get('/videos/show/{judul_slug}', 'AdminController\VideoController@show')->name('admin-video-show');
});
