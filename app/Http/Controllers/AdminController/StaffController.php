<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Staff;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator; 

class StaffController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

        $data = Staff::where('deleted_at', NULL)->with('prodi')->get();
        return view('adminpages.staff.staff', compact('data'));
    }


    public function create(){
        $prodi = Prodi::where('deleted_at', NULL)->get();
        return view('adminpages.staff.create', compact('prodi'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|min:6|unique:staffs',
            'nip' => 'required|min:8',
            'tanggal' => 'required',
            'prodi' => 'required',
            'email' => 'required|min:6',
            'telepon' => 'required|min:6',
            'alamat' => 'required|min:6',
            'biografi_ina' => 'required|min:8',
            'biografi_eng' => 'required|min:8',
            'foto' => 'required'
        ]);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $staf = new Staff();
        $staf->nama = $request->nama;
        $staf->nama_slug = Str::slug($request->nama);
        $staf->nip = $request->nip;
        $staf->tanggal_lahir = $request->tanggal;
        $staf->id_prodi = $request->prodi;
        $staf->email = $request->email;
        $staf->nomor_telepon = $request->telepon;
        $staf->pendidikan_s1 = $request->s1;
        $staf->pendidikan_s2 = $request->s2;
        if($request->s3 !=""){
            $staf->pendidikan_s3 = $request->s3;
        }
        if($request->sinta != ""){
            $staf->sinta = $request->sinta;
        }
        if($request->scopus != ""){
            $staf->scopus = $request->scopus;
        }
        $staf->alamat = $request->alamat;
        $staf->biografi_ina = $request->biografi_ina;
        $staf->biografi_eng = $request->biografi_eng;

        // if($request->file('foto')!=""){
        //     $file = $request->file('foto');
        //     $fileLocation = '/image/staff/'.$request->nip;
        //     $filename = $file->getClientOriginalName();
        //     $path = $fileLocation."/".$filename;
        //     $staf->foto = '/storage'.$path;
        //     $staf->foto_name = $filename;
        //     Storage::disk('public')->put($path, file_get_contents($file));
        // }

        $image_parts = explode(';base64', $request->foto);
        $image_type_aux = explode('image/', $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $filename = uniqid().'.png';
        $file = $request->file('foto');
        $fileLocation = '/image/staff/'.$request->nip;
        $path = $fileLocation."/".$filename;
        $staf->foto = '/storage'.$path;
        $staf->foto_name = $filename;
        Storage::disk('public')->put($path, $image_base64);

        $staf->save();

        return redirect('/admin/staf')->with('statusInput', 'Staf pengajar berhasil ditambahkan');
    }

    public function destroy($id)
    {
    	$staf = Staff::find($id);
        $staf->delete();
        return redirect('/admin/staf')->with('statusInput', 'Staf pengajar berhasil dihapus');
    }

    public function edit($id){
        $prodis = Prodi::where('deleted_at', NULL)->get();
        $staf = Staff::find($id);
        return view('adminpages.staff.edit', compact('prodis', 'staf'));
    }

    public function update($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|min:6',
            'nip' => 'required|min:8',
            'tanggal' => 'required',
            'prodi' => 'required',
            'email' => 'required|min:6',
            'telepon' => 'required|min:6',
            'alamat' => 'required|min:6',
            'biografi_ina' => 'required|min:8',
            'biografi_eng' => 'required|min:8'
        ]);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $staf = Staff::find($id);
        $staf->nama = $request->nama;
        $staf->nama_slug = Str::slug($request->nama);
        $staf->nip = $request->nip;
        $staf->tanggal_lahir = $request->tanggal;
        $staf->id_prodi = $request->prodi;
        $staf->email = $request->email;
        $staf->nomor_telepon = $request->telepon;
        $staf->pendidikan_s1 = $request->s1;
        $staf->pendidikan_s2 = $request->s2;
        if($request->s3 !=""){
            $staf->pendidikan_s3 = $request->s3;
        }
        if($request->sinta != ""){
            $staf->sinta = $request->sinta;
        }
        if($request->scopus != ""){
            $staf->scopus = $request->scopus;
        }
        $staf->alamat = $request->alamat;
        $staf->biografi_ina = $request->biografi_ina;
        $staf->biografi_eng = $request->biografi_eng;

        if($request->foto!=""){
            $image_parts = explode(';base64', $request->foto);
            $image_type_aux = explode('image/', $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $filename = uniqid().'.png';
            $file = $request->file('foto');
            $fileLocation = '/image/staff/'.$request->nip;
            $path = $fileLocation."/".$filename;
            $staf->foto = '/storage'.$path;
            $staf->foto_name = $filename;
            Storage::disk('public')->put($path, $image_base64);
        }

        $staf->update();

        return redirect('/admin/staf')->with('statusInput', 'Staf pengajar berhasil diperbaharui');
    }


    public function show($id)
    {
        $staf = Staff::with('prodi')->find($id);
        return view('adminpages.staff.show', compact('staf'));
    }
}
