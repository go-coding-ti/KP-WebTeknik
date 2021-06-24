<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Prodi;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProdiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $data = Prodi::where('deleted_at', NULL)->get();
        // dd(isset($data));
        return view('adminpages.prodi.prodi', compact('data'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'prodi_ina' => 'required|min:3',
            'prodi_eng' => 'required|min:3'
        ]);

        if($validator->fails()){
            return back()->withInput()->withErrors($validator);
        }

        $prodi = new Prodi();
        $prodi->prodi_ina = $request->prodi_ina;
        $prodi->prodi_eng = $request->prodi_eng;
        $prodi->save();

        return back()->with('statusInput', 'Program studi berhasil ditambahkan');
    }

    public function edit($id)
    {
        $prodi = Prodi::find($id);
        return response()->json(['success' => 'Berhasil', 'prodi' => $prodi]);
    }

    public function update($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'edit_prodi_ina' => 'required|min:3',
            'edit_prodi_eng' => 'required|min:3'
        ]);

        if($validator->fails()){
            return back()->withInput()->withErrors($validator);
        }
        
        $prodi = Prodi::find($id);

        $prodi->prodi_ina = $request->edit_prodi_ina;
        $prodi->prodi_eng = $request->edit_prodi_eng;
        $prodi->save();

        return back()->with('statusInput', 'Program studi berhasil diperbaharui');
    }


    public function destroy($id)
    {
        $prodi = Prodi::find($id);
        $prodi->delete();
        return back()->with('statusInput', 'Program studi berhasil dihapus');
    }
}
