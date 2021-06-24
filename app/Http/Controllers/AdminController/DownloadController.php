<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Download;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator; 

class DownloadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $data = Download::where('deleted_at', NULL)->get();
        // dd(isset($data));
        return view('adminpages.download.download', compact('data'));
    }


    public function create(){
        return view('adminpages.download.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title_ina' => 'required|min:3|unique:downloads',
            'title_eng' => 'required|min:3',
            'urlfile' => 'required|min:5'
        ]);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $download = new Download();
        $download->title_ina = $request->title_ina;
        $download->title_eng = $request->title_eng;
        $download->title_slug = Str::slug($request->title_ina);
        $download->url_download = $request->urlfile;
        $download->save();

        return redirect('/admin/downloads')->with('statusInput', 'Dokumen berhasil ditambahkan');
    }

    public function edit($id){
    	$download = Download::where('id', $id)->get()->first();
        return view('adminpages.download.edit', compact('download'));
    }

    public function update($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title_ina' => 'required|min:3',
            'title_eng' => 'required|min:3',
            'urlfile' => 'required|min:5'
        ]);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $download = Download::find($id);
        $download->title_ina = $request->title_ina;
        $download->title_eng = $request->title_eng;
        $download->title_slug = Str::slug($request->title_ina);
        $download->url_download = $request->urlfile;
        $download->save();

        return redirect('/admin/downloads')->with('statusInput', 'Dokumen berhasil diperbaharui');
    }


    public function destroy($id)
    {
    	$download = Download::find($id);
        $download->delete();
        return redirect('/admin/downloads')->with('statusInput', 'Dokumen berhasil dihapus');
    }
}
