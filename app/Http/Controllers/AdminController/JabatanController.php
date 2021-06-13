<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Jabatan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class JabatanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $data = Jabatan::where('deleted_at', NULL)->get();
        // dd(isset($data));
        return view('adminpages.jabatan.jabatan', compact('data'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'jabatan_ina' => 'required|min:3',
            'jabatan_eng' => 'required|min:3'
        ]);

        if($validator->fails()){
            return back()->withInput()->withErrors($validator);
        }

        $jabatan = new Jabatan();
        $jabatan->jabatan_ina = $request->jabatan_ina;
        $jabatan->jabatan_eng = $request->jabatan_eng;
        $jabatan->save();

        return back()->with('statusInput', 'Jabatan berhasil ditambahkan');
    }

    public function edit($id)
    {
        $jabatan = Jabatan::find($id);
        return response()->json(['success' => 'Berhasil', 'jabatan' => $jabatan]);
    }

    public function update($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'edit_jabatan_ina' => 'required|min:3',
            'edit_jabatan_eng' => 'required|min:3'
        ]);

        if($validator->fails()){
            return back()->withInput()->withErrors($validator);
        }
        
        $jabatan = Jabatan::find($id);

        $jabatan->jabatan_ina = $request->edit_jabatan_ina;
        $jabatan->jabatan_eng = $request->edit_jabatan_eng;
        $jabatan->save();

        return back()->with('statusInput', 'Jabatan berhasil diperbaharui');
    }


    public function destroy($id)
    {
        $jabatan = Jabatan::find($id);
        $jabatan->delete();
        return back()->with('statusInput', 'Jabatan berhasil dihapus');
    }
}
