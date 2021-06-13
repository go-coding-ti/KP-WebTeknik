<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Berita;
use App\Pengumuman;
use App\Agenda;
use App\Video;
use App\Galeri;
use App\Download;
use App\Page;
use App\Staff;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $jumlah_berita = Berita::count();
        $jumlah_pengumuman = Pengumuman::count();
        $jumlah_agenda = Agenda::count();
        $jumlah_video = Video::count();

        $jumlah_galeri = Galeri::count();
        $jumlah_download = Download::count();
        $jumlah_page = Page::count();
        $jumlah_staf = Staff::count();
        return view('adminpages.adminhome', compact('jumlah_berita', 'jumlah_pengumuman', 'jumlah_agenda', 'jumlah_video', 'jumlah_galeri', 'jumlah_download', 'jumlah_page', 'jumlah_staf'));
    }
}
