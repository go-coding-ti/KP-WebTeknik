<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Social;
use App\Video;
use App\Galeri;
use App\Agenda;
use App\Berita;
use App\AgendaKategori;
use App\Header;
use App\Menu;
use App\Pengumuman;
use App\PengumumanKategori;
use App\Preference;
use App\Submenu;
use App\Page;
use App\Download;
use App\Staff;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File; 

class HomeController extends Controller
{
    public function index(){
        $kategoris = Kategori::get();
        $beritas = Berita::with('kategori')->where('status', 'aktif')->whereDate('tanggal_publish', '<=', date('Y-m-d'))->orderBy('id', 'DESC')->limit(6)->get();
        $popularBeritas = Berita::with('kategori')->orderBy('read_count', 'DESC')->get();
        $agendas = Agenda::with('kategori')->where('status', 'aktif')->orderBy('id', 'DESC')->limit(6)->get();
        $galeris = Galeri::orderBy('id', 'DESC')->limit(3)->get();
        $videos = Video::limit(3)->get();
       

        //ALL FUNCTION MUST APPLY CODES BELOW
        $sosmeds = Social::get();
        $preference = Preference::first();
        $headers = Header::with('menu')->get();
        $menus = Menu::with('submenu')->get();
        $submenus = Submenu::get();

        $pengumumans = Pengumuman::with('kategori')->where('status', 'aktif')->whereDate('tanggal_publish', '<=', date('Y-m-d'))->orderBy('id', 'DESC')->limit(4)->get();

        return view('pages/index', compact('preference', 'videos', 'kategoris', 'beritas', 'popularBeritas', 'agendas', 'galeris', 'pengumumans', 'headers', 'menus', 'submenus', 'sosmeds'));
    }

    //AGENDA PAGE
    public function agenda(){
        $agendas = Agenda::with('kategori')->where('status', 'aktif')->orderBy('id', 'DESC')->paginate(6);
        
        //ALL FUNCTION MUST APPLY CODES BELOW
        $sosmeds = Social::get();
        $preference = Preference::first();
        $headers = Header::with('menu')->get();
        $menus = Menu::with('submenu')->get();
        $submenus = Submenu::get();

        $pengumumans = Pengumuman::with('kategori')->where('status', 'aktif')->whereDate('tanggal_publish', '<=', date('Y-m-d'))->orderBy('id', 'DESC')->limit(4)->get();

        return view('pages/agenda', compact('preference', 'agendas', 'pengumumans', 'headers', 'menus', 'submenus', 'sosmeds'));
    }

    public function agendaKategori($language, $kategori){
        $idkategori = AgendaKategori::where('kategori_lower', $kategori)->first();
        $agendas = Agenda::with('kategori')->where('id_kategori', $idkategori->id)->where('status', 'aktif')->orderBy('id', 'DESC')->paginate(6);

        //ALL FUNCTION MUST APPLY CODES BELOW
        $sosmeds = Social::get();
        $preference = Preference::first();
        $headers = Header::with('menu')->get();
        $menus = Menu::with('submenu')->get();
        $submenus = Submenu::get();

        $pengumumans = Pengumuman::with('kategori')->where('status', 'aktif')->whereDate('tanggal_publish', '<=', date('Y-m-d'))->orderBy('id', 'DESC')->limit(4)->get();

        return view('pages/agenda', compact('preference', 'agendas', 'pengumumans', 'headers', 'menus', 'submenus', 'sosmeds'));
    }

    public function showAgenda($language, $title_slug){
        $agenda = Agenda::where('title_slug', $title_slug)->get()->first();

        //ALL FUNCTION MUST APPLY CODES BELOW
        $sosmeds = Social::get();
        $preference = Preference::first();
        $headers = Header::with('menu')->get();
        $menus = Menu::with('submenu')->get();
        $submenus = Submenu::get();

        $pengumumans = Pengumuman::with('kategori')->where('status', 'aktif')->whereDate('tanggal_publish', '<=', date('Y-m-d'))->orderBy('id', 'DESC')->limit(4)->get();


        return view('pages/detail-agenda', compact('preference', 'agenda', 'pengumumans', 'headers', 'menus', 'submenus', 'sosmeds'));
    }

    //BERITA PAGE
    public function berita(){
        $beritas = Berita::with('kategori')->where('status', 'aktif')->whereDate('tanggal_publish', '<=', date('Y-m-d'))->orderBy('id', 'DESC')->paginate(6);

        //ALL FUNCTION MUST APPLY CODES BELOW
        $sosmeds = Social::get();
        $preference = Preference::first();
        $headers = Header::with('menu')->get();
        $menus = Menu::with('submenu')->get();
        $submenus = Submenu::get();

        $pengumumans = Pengumuman::with('kategori')->where('status', 'aktif')->whereDate('tanggal_publish', '<=', date('Y-m-d'))->orderBy('id', 'DESC')->limit(4)->get();


        return view('pages/berita', compact('preference', 'beritas', 'pengumumans', 'headers', 'menus', 'submenus', 'sosmeds'));
    }

    public function beritaKategori($language, $kategori){
        $idkategori = Kategori::where('kategori_lower', $kategori)->first();
        $beritas = Berita::with('kategori')->where('id_kategori', $idkategori->id)->where('status', 'aktif')->whereDate('tanggal_publish', '<=', date('Y-m-d'))->orderBy('id', 'DESC')->paginate(6);

        //ALL FUNCTION MUST APPLY CODES BELOW
        $sosmeds = Social::get();
        $preference = Preference::first();
        $headers = Header::with('menu')->get();
        $menus = Menu::with('submenu')->get();
        $submenus = Submenu::get();

        $pengumumans = Pengumuman::with('kategori')->where('status', 'aktif')->whereDate('tanggal_publish', '<=', date('Y-m-d'))->orderBy('id', 'DESC')->limit(4)->get();


        return view('pages/berita', compact('beritas', 'pengumumans', 'headers', 'menus', 'submenus', 'preference', 'sosmeds'));
    }

    public function showBerita($language, $title_slug){
        $berita = Berita::where('title_slug', $title_slug)->get()->first();
        $berita->read_count = $berita->read_count + 1;
        $berita->update();

        $beritas = Berita::where('id', '!=', $berita->id)->where('status', 'aktif')->orderBy('id', 'DESC')->limit(10)->get();

        //ALL FUNCTION MUST APPLY CODES BELOW
        $sosmeds = Social::get();
        $preference = Preference::first();
        $headers = Header::with('menu')->get();
        $menus = Menu::with('submenu')->get();
        $submenus = Submenu::get();

        $pengumumans = Pengumuman::with('kategori')->where('status', 'aktif')->whereDate('tanggal_publish', '<=', date('Y-m-d'))->orderBy('id', 'DESC')->limit(4)->get();

        return view('pages/detail-berita', compact('berita', 'beritas', 'pengumumans', 'headers', 'menus', 'submenus', 'preference', 'sosmeds'));
    }


    //PENGUMUMAN PAGE
    public function pengumuman(){
        $all_pengumumans = Pengumuman::with('kategori')->where('status', 'aktif')->whereDate('tanggal_publish', '<=', date('Y-m-d'))->orderBy('id', 'DESC')->paginate(6);

        $sosmeds = Social::get();
        $preference = Preference::first();
        $headers = Header::with('menu')->get();
        $menus = Menu::with('submenu')->get();
        $submenus = Submenu::get();

        $pengumumans = Pengumuman::with('kategori')->where('status', 'aktif')->whereDate('tanggal_publish', '<=', date('Y-m-d'))->orderBy('id', 'DESC')->limit(4)->get();
        return view('pages/pengumuman', compact('all_pengumumans', 'pengumumans','headers', 'menus', 'submenus', 'preference', 'sosmeds'));
    }

    public function pengumumanKategori($language, $kategori){
        $idkategori = PengumumanKategori::where('kategori_lower', $kategori)->first();
        $all_pengumumans = Pengumuman::with('kategori')->where('id_kategori', $idkategori->id)->where('status', 'aktif')->whereDate('tanggal_publish', '<=', date('Y-m-d'))->orderBy('id', 'DESC')->paginate(6);

        //ALL FUNCTION MUST APPLY CODES BELOW
        $sosmeds = Social::get();
        $preference = Preference::first();
        $headers = Header::with('menu')->get();
        $menus = Menu::with('submenu')->get();
        $submenus = Submenu::get();

        $pengumumans = Pengumuman::with('kategori')->where('status', 'aktif')->whereDate('tanggal_publish', '<=', date('Y-m-d'))->orderBy('id', 'DESC')->limit(4)->get();


        return view('pages/pengumuman', compact('all_pengumumans', 'pengumumans', 'headers', 'menus', 'submenus', 'preference', 'sosmeds'));
    }

    public function showPengumuman($language, $title_slug){
        $pengumuman = Pengumuman::where('title_slug', $title_slug)->get()->first();
        $pengumumans = Pengumuman::where('id', '!=', $pengumuman->id)->where('id_kategori', $pengumuman->id_kategori)->orderBy('id', 'DESC')->limit(10)->get();

        //ALL FUNCTION MUST APPLY CODES BELOW
        $sosmeds = Social::get();
        $preference = Preference::first();
        $headers = Header::with('menu')->get();
        $menus = Menu::with('submenu')->get();
        $submenus = Submenu::get();

        $pengumumans = Pengumuman::with('kategori')->where('status', 'aktif')->whereDate('tanggal_publish', '<=', date('Y-m-d'))->orderBy('id', 'DESC')->limit(4)->get();

        return view('pages/detail-pengumuman', compact('pengumuman', 'pengumumans', 'headers', 'menus', 'submenus', 'preference', 'sosmeds'));
    }


    //GALERI PAGE
    public function galeri(){
        $galeris = Galeri::orderBy('id', 'DESC')->paginate(9);
        
        //ALL FUNCTION MUST APPLY CODES BELOW
        $sosmeds = Social::get();
        $preference = Preference::first();
        $headers = Header::with('menu')->get();
        $menus = Menu::with('submenu')->get();
        $submenus = Submenu::get();

        $pengumumans = Pengumuman::with('kategori')->where('status', 'aktif')->whereDate('tanggal_publish', '<=', date('Y-m-d'))->orderBy('id', 'DESC')->limit(4)->get();

        return view('pages/galeri', compact('galeris', 'pengumumans', 'headers', 'menus', 'submenus', 'preference', 'sosmeds'));
    }


    //VIDEO PAGE
    public function video(){
        $videos = Video::orderBy('id', 'DESC')->get();
        
        //ALL FUNCTION MUST APPLY CODES BELOW
        $sosmeds = Social::get();
        $preference = Preference::first();
        $headers = Header::with('menu')->get();
        $menus = Menu::with('submenu')->get();
        $submenus = Submenu::get();

        $pengumumans = Pengumuman::with('kategori')->where('status', 'aktif')->whereDate('tanggal_publish', '<=', date('Y-m-d'))->orderBy('id', 'DESC')->limit(4)->get();

        return view('pages/video', compact('videos', 'pengumumans', 'headers', 'menus', 'submenus', 'preference', 'sosmeds'));
    }
    public function videoShow($language, $title_slug){
        $video = Video::where('judul_slug', $title_slug)->first();
        $videos = Video::where('id', '!=', $video->id)->orderBy('id', 'DESC')->get();
        
        //ALL FUNCTION MUST APPLY CODES BELOW
        $sosmeds = Social::get();
        $preference = Preference::first();
        $headers = Header::with('menu')->get();
        $menus = Menu::with('submenu')->get();
        $submenus = Submenu::get();

        $pengumumans = Pengumuman::with('kategori')->where('status', 'aktif')->whereDate('tanggal_publish', '<=', date('Y-m-d'))->orderBy('id', 'DESC')->limit(4)->get();

        return view('pages/detail-video', compact('video','videos', 'pengumumans', 'headers', 'menus', 'submenus', 'preference', 'sosmeds'));
    }

    //PAGE CONTROLLER
    public function showPage($language, $title_slug){
        $page = Page::where('title_slug', $title_slug)->get()->first();
        $pengumumans = Pengumuman::with('kategori')->where('status', 'aktif')->whereDate('tanggal_publish', '<=', date('Y-m-d'))->orderBy('id', 'DESC')->limit(4)->get();

        //ALL FUNCTION MUST APPLY CODES BELOW
        $sosmeds = Social::get();
        $preference = Preference::first();
        $headers = Header::with('menu')->get();
        $menus = Menu::with('submenu')->get();
        $submenus = Submenu::get();
        $pengumumans = Pengumuman::with('kategori')->where('status', 'aktif')->whereDate('tanggal_publish', '<=', date('Y-m-d'))->orderBy('id', 'DESC')->limit(4)->get();

        if($page->status == 'tidak_aktif'){
            return view('pages/notfound', compact('preference', 'page', 'pengumumans', 'headers', 'menus', 'submenus', 'sosmeds'));
        }
        return view('pages/base-page', compact('preference', 'page', 'pengumumans', 'headers', 'menus', 'submenus', 'sosmeds'));
    }
  
    //DOWNLOAD DOCUMENT
    public function downloadDocument()
    {
        $downloads = Download::where('deleted_at', NULL)->orderBy('id', 'DESC')->paginate(15);


        //ALL FUNCTION MUST APPLY CODES BELOW
        $sosmeds = Social::get();
        $preference = Preference::first();
        $headers = Header::with('menu')->get();
        $menus = Menu::with('submenu')->get();
        $submenus = Submenu::get();

        $pengumumans = Pengumuman::with('kategori')->where('status', 'aktif')->whereDate('tanggal_publish', '<=', date('Y-m-d'))->orderBy('id', 'DESC')->limit(4)->get();

        return view('pages/download-dokument', compact('pengumumans', 'headers', 'menus', 'submenus', 'preference', 'sosmeds', 'downloads'));
    }

    public function about(){
        //ALL FUNCTION MUST APPLY CODES BELOW
        $sosmeds = Social::get();
        $preference = Preference::first();
        $headers = Header::with('menu')->get();
        $menus = Menu::with('submenu')->get();
        $submenus = Submenu::get();

        $pengumumans = Pengumuman::with('kategori')->where('status', 'aktif')->whereDate('tanggal_publish', '<=', date('Y-m-d'))->orderBy('id', 'DESC')->limit(4)->get();
        return view('pages/tentang-teknik', compact('pengumumans', 'headers', 'menus', 'submenus', 'preference', 'sosmeds'));
    }

    public function staf(){
        $stafs = Staff::with('prodi')->where('deleted_at', NULL)->paginate(10);
        //ALL FUNCTION MUST APPLY CODES BELOW
        $sosmeds = Social::get();
        $preference = Preference::first();
        $headers = Header::with('menu')->get();
        $menus = Menu::with('submenu')->get();
        $submenus = Submenu::get();

        $pengumumans = Pengumuman::with('kategori')->where('status', 'aktif')->whereDate('tanggal_publish', '<=', date('Y-m-d'))->orderBy('id', 'DESC')->limit(4)->get();
        return view('pages/staff-pengajar', compact('pengumumans', 'headers', 'menus', 'submenus', 'preference', 'sosmeds', 'stafs'));
    }

    public function showStaf($language, $nama_slug){
        $staf = Staff::where('nama_slug', $nama_slug)->first();
        //ALL FUNCTION MUST APPLY CODES BELOW
        $sosmeds = Social::get();
        $preference = Preference::first();
        $headers = Header::with('menu')->get();
        $menus = Menu::with('submenu')->get();
        $submenus = Submenu::get();

        $pengumumans = Pengumuman::with('kategori')->where('status', 'aktif')->whereDate('tanggal_publish', '<=', date('Y-m-d'))->orderBy('id', 'DESC')->limit(4)->get();
        return view('pages/detail-staff-pengajar', compact('pengumumans', 'headers', 'menus', 'submenus', 'preference', 'sosmeds', 'staf'));
    }

    public function manajemen(){
        $stafs = Staff::with('prodi')->with('jabatan')->where('deleted_at', NULL)->where('id_jabatan', '!=', NULL)->paginate(10);
        //ALL FUNCTION MUST APPLY CODES BELOW
        $sosmeds = Social::get();
        $preference = Preference::first();
        $headers = Header::with('menu')->get();
        $menus = Menu::with('submenu')->get();
        $submenus = Submenu::get();

        $pengumumans = Pengumuman::with('kategori')->where('status', 'aktif')->whereDate('tanggal_publish', '<=', date('Y-m-d'))->orderBy('id', 'DESC')->limit(4)->get();
        return view('pages/management', compact('pengumumans', 'headers', 'menus', 'submenus', 'preference', 'sosmeds', 'stafs'));
    }

    public function showManajemen($language, $nama_slug){
        $staf = Staff::where('nama_slug', $nama_slug)->first();
        //ALL FUNCTION MUST APPLY CODES BELOW
        $sosmeds = Social::get();
        $preference = Preference::first();
        $headers = Header::with('menu')->get();
        $menus = Menu::with('submenu')->get();
        $submenus = Submenu::get();

        $pengumumans = Pengumuman::with('kategori')->where('status', 'aktif')->whereDate('tanggal_publish', '<=', date('Y-m-d'))->orderBy('id', 'DESC')->limit(4)->get();
        return view('pages/detail-management', compact('pengumumans', 'headers', 'menus', 'submenus', 'preference', 'sosmeds', 'staf'));
    }
    
}