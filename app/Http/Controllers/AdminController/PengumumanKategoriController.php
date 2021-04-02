<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\PengumumanKategori;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PengumumanKategoriController extends Controller
{
    public function index(){
        $data = PengumumanKategori::where('deleted_at', NULL)->get();
        // dd(isset($data));
        return view('adminpages.kategoripengumuman.kategoripengumuman', compact('data'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kategori_ina' => 'required|min:3',
            'kategori_eng' => 'required|min:3'
        ]);

        if($validator->fails()){
            return back()->withInput()->withErrors($validator);
        }

        $kategori = new PengumumanKategori();
        $kategori->kategori_ina = $request->kategori_ina;
        $kategori->kategori_eng = $request->kategori_eng;
        $kategori->kategori_lower = Str::lower($request->kategori_eng);
        if($request->file('logo')!=""){
            $file = $request->file('logo');
            $fileLocation = '/image/kategori/'.$request->kategori_ina.'/icon';
            $filename = $file->getClientOriginalName();
            $path = $fileLocation."/".$filename;
            $kategori->icon = '/storage'.$path;
            $kategori->icon_name = $filename;
            Storage::disk('public')->put($path, file_get_contents($file));
        }
        $kategori->save();

        return back()->with('statusInput', 'Category successfully added to record');
    }

    public function edit($id)
    {
        $kategori = PengumumanKategori::find($id);
        return response()->json(['success' => 'Berhasil', 'kategori' => $kategori]);
    }

    public function update($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'edit_kategori_ina' => 'required|min:3',
            'edit_kategori_eng' => 'required|min:3'
        ]);

        if($validator->fails()){
            return back()->withInput()->withErrors($validator);
        }
        
        $kategori = PengumumanKategori::find($id);

        $kategori->kategori_ina = $request->edit_kategori_ina;
        $kategori->kategori_eng = $request->edit_kategori_eng;
        $kategori->kategori_lower = Str::lower($request->edit_kategori_eng);
        if($request->file('edit_logo')!=""){
            $file = $request->file('edit_logo');
            $fileLocation = '/image/kategori/'.$request->kategori_ina.'/icon';
            $filename = $file->getClientOriginalName();
            $path = $fileLocation."/".$filename;
            $kategori->icon = '/storage'.$path;
            $kategori->icon_name = $filename;
            Storage::disk('public')->put($path, file_get_contents($file));
        }
        $kategori->save();

        return back()->with('statusInput', 'Category successfully edited');
    }


    public function destroy($id)
    {
        $kategori = PengumumanKategori::find($id);
        $kategori->delete();
        return back()->with('statusInput', 'Category successfully deleted');
    }
}
