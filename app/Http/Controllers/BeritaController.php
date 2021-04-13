<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Agenda;
use App\Berita;
use App\AgendaKategori;
use App\AgendaImage;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File; 

class BeritaController extends Controller
{
    public function index(){
        $beritas = Berita::with('kategori')->get();
        return view('pages/berita', compact('beritas'));
    }

    public function show($language, $title_slug){
        $berita = Berita::where('title_slug', $title_slug)->get()->first();
        return view('pages/detail-berita', compact('berita'));
    }
}