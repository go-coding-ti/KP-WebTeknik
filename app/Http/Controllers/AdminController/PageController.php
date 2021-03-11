<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Page;

class PageController extends Controller
{
    public function index(){
        $data = Page::orderBy('id', 'DESC')->get();
        // dd(isset($data));
        return view('adminpages.adminpage.adminPageHome', compact('data'));
    }


    public function create(){
        return view('adminpages.adminpage.adminPageCreate');
    }

    public function store(Request $request)
    {
        $berita = new Berita();
        $berita->judul = $request->judul;
        $berita->isi_berita = $request->konten;
        $berita->save();
        return redirect('/admin/berita')->with('success','Data berhasil disimpan!');

    }

    public function destroy($id)
    {
    	$berita = Berita::find($id);
        $berita->delete();
        
        return redirect()->route('admin-berita-home');
    }

    public function edit($id){
    	$berita = Berita::where('id', $id)->get()->first();
        return view('adminpages.adminBeritaEdit', compact('berita'));
    }

    public function update(Request $request){
    	$berita = Berita::find($request->id);
    	$berita->judul = $request->judul;
    	$berita->isi_berita =  $request->konten;
    	$berita->update();
    	return redirect('/admin/berita')->with('success', 'Data berhasil diedit!');

    }
}
