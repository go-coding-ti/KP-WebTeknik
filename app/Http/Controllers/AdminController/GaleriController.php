<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Galeri;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator; 

class GaleriController extends Controller
{
    public function index(){
        $data = Galeri::where('deleted_at', NULL)->get();
        // dd(isset($data));
        return view('adminpages.galeri.galeri', compact('data'));
    }


    public function create(){
        return view('adminpages.galeri.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title_ina' => 'required|min:3|unique:galeris',
            'title_eng' => 'required|min:3',
            'deskripsi_ina' => 'required|min:8',
            'deskripsi_eng' => 'required|min:8',
            'galeri' => 'required'
        ]);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $galeri = new Galeri();
        $galeri->title_ina = $request->title_ina;
        $galeri->title_eng = $request->title_eng;
        $galeri->deskripsi_ina = $request->deskripsi_ina;
        $galeri->deskripsi_eng = $request->deskripsi_eng;
        $galeri->title_slug = Str::slug($request->title_ina);

        if($request->file('galeri')!=""){
            $file = $request->file('galeri');
            $fileLocation = '/image/galeri/'.$galeri->title_slug;
            $filename = $file->getClientOriginalName();
            $path = $fileLocation."/".$filename;
            $galeri->galeri = '/storage'.$path;
            $galeri->galeri_name = $filename;
            Storage::disk('public')->put($path, file_get_contents($file));
        }
        $galeri->save();

        return redirect('/admin/galery')->with('statusInput', 'Galery successfully added to record');
    }

    public function edit($id){
    	$galeri = Galeri::where('id', $id)->get()->first();
        return view('adminpages.galeri.edit', compact('galeri'));
    }

    public function update($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title_ina' => 'required|min:3',
            'title_eng' => 'required|min:3',
            'deskripsi_ina' => 'required|min:8',
            'deskripsi_eng' => 'required|min:8',
            'galeri' => 'required'
        ]);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $galeri = Galeri::find($id);
        $galeri->title_ina = $request->title_ina;
        $galeri->title_eng = $request->title_eng;
        $galeri->deskripsi_ina = $request->deskripsi_ina;
        $galeri->deskripsi_eng = $request->deskripsi_eng;
        $galeri->title_slug = Str::slug($request->title_ina);

        if($request->file('galeri')!=""){
            $file = $request->file('galeri');
            $fileLocation = '/image/galeri/'.$galeri->title_slug;
            $filename = $file->getClientOriginalName();
            $path = $fileLocation."/".$filename;
            $galeri->galeri = '/storage'.$path;
            $galeri->galeri_name = $filename;
            Storage::disk('public')->put($path, file_get_contents($file));
        }
        $galeri->update();

        return redirect('/admin/galery')->with('statusInput', 'Galery successfully updated');
    }


    public function show($title_slug)
    {
        $galeri = Galeri::where('title_slug', $title_slug)->first();
        return view('adminpages.galeri.show', compact('galeri'));
    }

    public function destroy($id)
    {
        $galeri = Galeri::find($id);
        $galeri->delete();
        return redirect('/admin/galery')->with('statusInput', 'Galery successfully deleted from the record');
    }
}
