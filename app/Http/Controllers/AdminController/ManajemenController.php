<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Manajemen;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Staff;
use App\Jabatan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File; 

class ManajemenController extends Controller
{
    public function index(){
        //GET ALL MANAJEMEN
        $data = Staff::where('deleted_at', NULL)->where('id_jabatan', '!=', NULL)->with('jabatan')->get();

        //GET ID JABATAN N STAF IN MANAJEMEN
        $idJabatan = [];
        $idStaf = [];
        foreach($data as $i){
            array_push($idJabatan, $i->id_jabatan);
            array_push($idStaf, $i->id_staf);
        }

        //GET JABATAN WHERE NOT IN MANAJEMEN
        $jabatans = Jabatan::whereNotIn('id', $idJabatan)->get();
        $all_jabatans = Jabatan::get();

        //GET STAFF
        $stafs = Staff::where('deleted_at', NULL)->get();
        
        return view('adminpages.manajemen.manajemen', compact('data', 'jabatans', 'stafs', 'all_jabatans'));
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'jabatan' => 'required',
            'staf' => 'required'
        ]);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $stafs = Staff::where('id_jabatan', $request->jabatan)->get();
        foreach($stafs as $staf){
            $staf->id_jabatan = NULL;
            $staf->update();
        }

        $staf = Staff::find($request->staf);
        $staf->id_jabatan = $request->jabatan;
        $staf->update();

        return redirect('/admin/management')->with('statusInput', 'Manajemen successfully added to record');
    }

    public function destroy($id)
    {
        $staf = Staff::find($id);
        $staf->id_jabatan = NULL;
        $staf->update();

        return redirect('/admin/management')->with('statusInput', 'Manajemen successfully deleted');
    }

    public function edit($id)
    {
        $staf = Staff::find($id);
        $jabatan = Jabatan::find($staf->id_jabatan);
        return response()->json(['success' => 'Berhasil', 'staf' => $staf, 'jabatan' => $jabatan]);
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'edit_jabatan' => 'required',
            'edit_staf' => 'required'
        ]);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $stafs = Staff::where('id_jabatan', $request->edit_jabatan)->get();
        foreach($stafs as $staf){
            $staf->id_jabatan = NULL;
            $staf->update();
        }

        $staf = Staff::find($request->edit_staf);
        $staf->id_jabatan = $request->edit_jabatan;
        $staf->update();

        return redirect('/admin/management')->with('statusInput', 'Manajemen successfully updated from the record');
    }


}
