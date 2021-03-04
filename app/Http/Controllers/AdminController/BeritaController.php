<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Berita;

class BeritaController extends Controller
{
    public function index(){


        $data = Berita::orderBy('id_berita', 'DESC')->get();
        // dd(isset($data));
        return view('adminpages.adminBeritaHome', compact('data'));
    }
}
