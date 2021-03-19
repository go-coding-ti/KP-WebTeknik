<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Berita;

class HomeController extends Controller
{
    public function index(){
        return view('adminpages.adminhome');
    }
}
