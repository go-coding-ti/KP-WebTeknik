<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\AgendaKategori;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AgendaKategoriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $data = AgendaKategori::where('deleted_at', NULL)->get();
        // dd(isset($data));
        return view('adminpages.kategoriagenda.kategoriagenda', compact('data'));
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

        $kategori = new AgendaKategori();
        $kategori->kategori_ina = $request->kategori_ina;
        $kategori->kategori_eng = $request->kategori_eng;
        $kategori->kategori_lower = Str::lower($request->kategori_eng);
        $kategori->save();

        return back()->with('statusInput', 'Kategori agenda berhasil ditambahkan');
    }

    public function edit($id)
    {
        $kategori = AgendaKategori::find($id);
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
        
        $kategori = AgendaKategori::find($id);

        $kategori->kategori_ina = $request->edit_kategori_ina;
        $kategori->kategori_eng = $request->edit_kategori_eng;
        $kategori->kategori_lower = Str::lower($request->edit_kategori_eng);
        $kategori->save();

        return back()->with('statusInput', 'Kategori agenda berhasil diperbaharui');
    }


    public function destroy($id)
    {
        $kategori = AgendaKategori::find($id);
        $kategori->delete();
        return back()->with('statusInput', 'Kategori agenda berhasil dihapus');
    }
}
