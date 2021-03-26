<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Preference;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PreferenceController extends Controller
{
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

        if($request->file('logo')!=""){
            $file = $request->file('logo');
            $fileLocation = '/image/preferences/logo';
            $filename = $file->getClientOriginalName();
            $path = $fileLocation."/".$filename;
            $preference->logo = '/storage'.$path;
            $preference->logo_name = $filename;
            Storage::disk('public')->put($path, file_get_contents($file));
        }

        $preference->save();
        return redirect('/admin/setting/preferences')->with('statusInput', 'Preferences successfully updated');
    }
}