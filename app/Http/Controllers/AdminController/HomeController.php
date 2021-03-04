<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Berita;

class HomeController extends Controller
{
    public function home(){


        $data = Berita::orderBy('id_berita', 'DESC')->get();
        // dd(isset($data));
        return view('admin.homeadmin', compact('data'));
    }
}
