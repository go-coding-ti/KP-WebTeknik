<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Preference;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PreferenceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $preference = Preference::first();
        return view('adminpages.pengaturan.preferences', compact('preference'));
    }

    public function store(Request $request){
        $preference = Preference::first();
        $preference->nama_website_ina = $request->nama_website_ina;
        $preference->nama_website_eng = $request->nama_website_eng;
        $preference->footer_ina = $request->footer_ina;
        $preference->footer_eng = $request->footer_eng;

        if($request->logo!=""){
            $image_parts = explode(';base64', $request->logo);
            $image_type_aux = explode('image/', $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $filename = uniqid().'.png';
            $fileLocation = '/image/preferences/logo';
            $path = $fileLocation."/".$filename;
            $preference->logo = '/storage'.$path;
            $preference->logo_name = $filename;
            Storage::disk('public')->put($path, $image_base64);
        }



        $preference->save();
        return redirect('/admin/setting/preferences')->with('statusInput', 'Preferences berhasil disimpan');
    }
}