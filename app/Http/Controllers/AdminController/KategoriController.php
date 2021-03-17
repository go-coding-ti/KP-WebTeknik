<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Kategori;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class KategoriController extends Controller
{
    public function index(){
        $data = Kategori::where('deleted_at', NULL)->get();
        // dd(isset($data));
        return view('adminpages.kategori.kategori', compact('data'));
    }


    public function create(){
        return view('adminpages.kategori.create');
    }

    public function store(Request $request)
    {
        $kategori = new Kategori();
        $kategori->kategori_ina = $request->kategori_ina;
        $kategori->kategori_eng = $request->kategori_eng;
        $kategori->save();

        return back()->with('statusInput', 'Category successfully added to record');
    }

    public function edit($id)
    {
        $kategori = Kategori::find($id);
        return response()->json(['success' => 'Berhasil', 'kategori' => $kategori]);
    }

    public function update($id, Request $request)
    {
        $kategori = Kategori::find($id);

        $kategori->kategori_ina = $request->edit_kategori_ina;
        $kategori->kategori_eng = $request->edit_kategori_eng;
        $kategori->save();

        return back()->with('statusInput', 'Category successfully edited');
    }


    public function destroy($id)
    {
        $kategori = Kategori::find($id);
        $kategori->delete();
        return back()->with('statusInput', 'Category successfully deleted');
    }
}
