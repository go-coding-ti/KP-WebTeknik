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
});


// Route::get('/', function () {
//     return view('pages/index');
// });

// Route::get('/video', function () {
//     return view('pages/video');
// });

// Route::get('/lang', function () {
//     App::setlocale('id');
//     dd(App::getLocale());
// });

//Pages Front End Routes




//Admin Route
//Route::get('/', 'AdminController\BeritaController@index')->name('admin-berita');

Route::prefix('admin')->group(function () {

	//Admin Dashboard
    Route::get('/dashboard', 'AdminController\HomeController@index')->name('admin-home');

    //Kategori Berita Controller
    Route::get('/category', 'AdminController\KategoriController@index')->name('admin-kategori-home');
    Route::post('/category/store', 'AdminController\KategoriController@store')->name('admin-kategori-store');
    Route::get('/category/{id}/edit', 'AdminController\KategoriController@edit')->name('admin-kategori-edit');
    Route::put('/category/{id}', 'AdminController\KategoriController@update')->name('admin-kategori-update');
    Route::delete('/category/{id}/delete', 'AdminController\KategoriController@destroy')->name('admin-kategori-destroy');

    //Kategori Agenda Controller
    Route::get('/category/agenda', 'AdminController\AgendaKategoriController@index')->name('admin-agendakategori-home');
    Route::post('/category/agenda/store', 'AdminController\AgendaKategoriController@store')->name('admin-agendakategori-store');
    Route::get('/category/agenda/{id}/edit', 'AdminController\AgendaKategoriController@edit')->name('admin-agendakategori-edit');
    Route::put('/category/agenda/{id}', 'AdminController\AgendaKategoriController@update')->name('admin-agendakategori-update');
    Route::delete('/category/agenda/{id}/delete', 'AdminController\AgendaKategoriController@destroy')->name('admin-agendakategori-destroy');

    //Kategori Pengumuman Controller
    Route::get('/category/pengumuman', 'AdminController\PengumumanKategoriController@index')->name('admin-pengumumankategori-home');
    Route::post('/category/pengumuman/store', 'AdminController\PengumumanKategoriController@store')->name('admin-pengumumankategori-store');
    Route::get('/category/pengumuman/{id}/edit', 'AdminController\PengumumanKategoriController@edit')->name('admin-pengumumankategori-edit');
    Route::put('/category/pengumuman/{id}', 'AdminController\PengumumanKategoriController@update')->name('admin-pengumumankategori-update');
    Route::delete('/category/pengumuman/{id}/delete', 'AdminController\PengumumanKategoriController@destroy')->name('admin-pengumumankategori-destroy');

    //Post Controller
    Route::get('/posts', 'AdminController\PostController@index')->name('admin-post-home');
    Route::get('/posts/create', 'AdminController\PostController@create')->name('admin-post-create');
    Route::post('/posts/store', 'AdminController\PostController@store')->name('admin-post-store');
    Route::get('/posts/{id}/edit', 'AdminController\PostController@edit')->name('admin-post-edit');
    Route::post('/posts/{id}', 'AdminController\PostController@update')->name('admin-post-update');
    Route::get('/posts/delete/{id}', 'AdminController\PostController@destroy')->name('admin-post-delete');
    Route::get('/posts/show/{kategori}/{judul_slug}', 'AdminController\PostController@show')->name('admin-post-show');
    Route::post('/posts/status', 'AdminController\PostController@status')->name('admin-post-status');

    //Berita Controller
    Route::get('/news', 'AdminController\BeritaController@index')->name('admin-berita-home');
    Route::get('/news/create', 'AdminController\BeritaController@create')->name('admin-berita-create');
    Route::post('/news/store', 'AdminController\BeritaController@store')->name('admin-berita-store');
    Route::get('/news/{id}/edit', 'AdminController\BeritaController@edit')->name('admin-berita-edit');
    Route::post('/news/{id}', 'AdminController\BeritaController@update')->name('admin-berita-update');
    Route::get('/news/delete/{id}', 'AdminController\BeritaController@destroy')->name('admin-berita-delete');
    Route::get('/news/show/{kategori}/{judul_slug}', 'AdminController\BeritaController@show')->name('admin-berita-show');
    Route::get('/news/status/{id}/{status}', 'AdminController\BeritaController@status')->name('admin-berita-status');

    //Pengumuman Controller
    Route::get('/announcement', 'AdminController\PengumumanController@index')->name('admin-pengumuman-home');
    Route::get('/announcement/create', 'AdminController\PengumumanController@create')->name('admin-pengumuman-create');
    Route::post('/announcement/store', 'AdminController\PengumumanController@store')->name('admin-pengumuman-store');
    Route::get('/announcement/{id}/edit', 'AdminController\PengumumanController@edit')->name('admin-pengumuman-edit');
    Route::post('/announcement/{id}', 'AdminController\PengumumanController@update')->name('admin-pengumuman-update');
    Route::get('/announcement/delete/{id}', 'AdminController\PengumumanController@destroy')->name('admin-pengumuman-delete');
    Route::get('/announcement/show/{judul_slug}', 'AdminController\PengumumanController@show')->name('admin-pengumuman-show');
    Route::get('/announcement/status/{id}/{status}', 'AdminController\PengumumanController@status')->name('admin-pengumuman-status');

    //Agenda Controller
    Route::get('/events', 'AdminController\AgendaController@index')->name('admin-agenda-home');
    Route::get('/events/create', 'AdminController\AgendaController@create')->name('admin-agenda-create');
    Route::post('/events/store', 'AdminController\AgendaController@store')->name('admin-agenda-store');
    Route::get('/events/{id}/edit', 'AdminController\AgendaController@edit')->name('admin-agenda-edit');
    Route::post('/events/{id}', 'AdminController\AgendaController@update')->name('admin-agenda-update');
    Route::get('/events/delete/{id}', 'AdminController\AgendaController@destroy')->name('admin-agenda-delete');
    Route::get('/events/show/{kategori}/{judul_slug}', 'AdminController\AgendaController@show')->name('admin-agenda-show');
    Route::get('/events/status/{id}/{status}', 'AdminController\AgendaController@status')->name('admin-agenda-status');

    //Pages Controller
    Route::get('/pages', 'AdminController\PageController@index')->name('admin-page-home');
    Route::get('/pages/create', 'AdminController\PageController@create')->name('admin-page-create');
    Route::post('/pages/store', 'AdminController\PageController@store')->name('admin-page-store');
    Route::get('/pages/{id}/edit', 'AdminController\PageController@edit')->name('admin-page-edit');
    Route::put('/pages/{id}', 'AdminController\PageController@update')->name('admin-page-update');
    Route::get('/pages/delete/{id}', 'AdminController\PageController@destroy')->name('admin-page-delete');
    Route::get('/pages/{pagestitle}', 'AdminController\PageController@show')->name('admin-page-show');
    Route::get('/pages/status/{id}/{status}', 'AdminController\PageController@status')->name('admin-page-status');

    //Galery Controller
    Route::get('/galery', 'AdminController\GaleriController@index')->name('admin-galeri-home');
    Route::get('/galery/create', 'AdminController\GaleriController@create')->name('admin-galeri-create');
    Route::post('galery/store', 'AdminController\GaleriController@store')->name('admin-galeri-store');
    Route::get('/galery/{id}/edit', 'AdminController\GaleriController@edit')->name('admin-galeri-edit');
    Route::put('/galery/{id}', 'AdminController\GaleriController@update')->name('admin-galeri-update');
    Route::get('/galery/show/{title_slug}', 'AdminController\GaleriController@show')->name('admin-galeri-show');
    Route::get('/galery/delete/{id}', 'AdminController\GaleriController@destroy')->name('admin-galeri-delete');

    //Menu Controller
    Route::get('/menus', 'AdminController\MenuController@index')->name('admin-menu-home');
    //Header
    Route::get('/menus/headers/create', 'AdminController\MenuController@headerCreate')->name('admin-header-create');
    Route::post('/menus/headers/store', 'AdminController\MenuController@headerStore')->name('admin-header-store');
    Route::get('/menus/headers/{id}/edit', 'AdminController\MenuController@headerEdit')->name('admin-header-edit');
    Route::post('/menus/headers/{id}', 'AdminController\MenuController@headerUpdate')->name('admin-header-update');
    Route::get('/menus/headers/delete/{id}', 'AdminController\MenuController@headerDestroy')->name('admin-header-delete');
    //Menu
    Route::get('/menus/menus/create', 'AdminController\MenuController@menuCreate')->name('admin-menu-create');
    Route::post('/menus/menus/store', 'AdminController\MenuController@menuStore')->name('admin-menu-store');
    Route::get('/menus/menus/{id}/edit', 'AdminController\MenuController@menuEdit')->name('admin-menu-edit');
    Route::post('/menus/menus/{id}', 'AdminController\MenuController@menuUpdate')->name('admin-menu-update');
    Route::get('/menus/menus/delete/{id}', 'AdminController\MenuController@menuDestroy')->name('admin-menu-delete');
    //Sub Menu
    Route::get('/menus/submenus/create', 'AdminController\MenuController@submenuCreate')->name('admin-submenu-create');
    Route::post('/menus/submenus/store', 'AdminController\MenuController@submenuStore')->name('admin-submenu-store');
    Route::get('/menus/submenus/{id}/edit', 'AdminController\MenuController@submenuEdit')->name('admin-submenu-edit');
    Route::post('/menus/submenus/{id}', 'AdminController\MenuController@submenuUpdate')->name('admin-submenu-update');
    Route::get('/menus/submenus/delete/{id}', 'AdminController\MenuController@submenuDestroy')->name('admin-submenu-delete');
    Route::get('menus/menus/get/{id}', 'AdminController\MenuController@getMenu')->name('admin-menu-get');

    //Download Controller
    Route::get('/downloads', 'AdminController\DownloadController@index')->name('admin-download-home');
    Route::get('/downloads/create', 'AdminController\DownloadController@create')->name('admin-download-create');
    Route::post('/downloads/store', 'AdminController\DownloadController@store')->name('admin-download-store');
    Route::get('/downloads/{id}/edit', 'AdminController\DownloadController@edit')->name('admin-download-edit');
    Route::get('/downloads/delete/{id}', 'AdminController\DownloadController@destroy')->name('admin-download-delete');
    Route::post('/downloads/{id}', 'AdminController\DownloadController@update')->name('admin-download-update');

    //Pengaturan Controller
    //Preferences Controller
    Route::get('/setting/preferences', 'AdminController\PreferenceController@index')->name('admin-preference-home');
    Route::post('/setting/preferences/store', 'AdminController\PreferenceController@store')->name('admin-preference-store');

    //Social Controller
    Route::get('/setting/social', 'AdminController\SocialController@index')->name('admin-social-home');
    Route::post('setting/social/store', 'AdminController\SocialController@store')->name('admin-social-store');
    Route::get('/setting/social/{id}/edit', 'AdminController\SocialController@edit')->name('admin-social-edit');
    Route::post('/setting/social/{id}', 'AdminController\SocialController@update')->name('admin->social-update');
    Route::get('/setting/social/delete/{id}', 'AdminController\SocialController@destroy')->name('admin-social-delete');

    //Video Controller
    Route::get('/videos', 'AdminController\VideoController@index')->name('admin-video-home');
    Route::get('/videos/create', 'AdminController\VideoController@create')->name('admin-video-create');
    Route::post('videos/store', 'AdminController\VideoController@store')->name('admin-video-store');
    Route::get('/videos/{id}/edit', 'AdminController\VideoController@edit')->name('admin-video-edit');
    Route::put('/videos/{id}', 'AdminController\VideoController@update')->name('admin-video-update');
    Route::delete('/videos/{id}/delete', 'AdminController\VideoController@destroy')->name('admin-video-destroy');
    Route::get('/videos/show/{judul_slug}', 'AdminController\VideoController@show')->name('admin-video-show');
});
