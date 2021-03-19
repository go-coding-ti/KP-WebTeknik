<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Social;

class SocialController extends Controller
{
    public function index(){
        $data = Social::first();
        return view('adminpages.pengaturan.social', compact('data'));
    }

    public function update($id, Request $request)
    {
        $social = Social::find($id);
        $social->facebook = $request->facebook;
        $social->instagram = $request->instagram;
        $social->twitter = $request->twitter;
        $social->google = $request->google;
        $social->update();
        return redirect('admin/setting/social')->with('statusInput', 'Social Media succesfully updated');
    }
}