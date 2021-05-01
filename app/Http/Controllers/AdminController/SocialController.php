<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Social;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class SocialController extends Controller
{
    public function index(){
        $data = Social::get();
        return view('adminpages.sosialmedia.social', compact('data'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'sosmed' => 'required|min:3',
            'link_sosmed' => 'required|min:5'
        ]);

        if($validator->fails()){
            return back()->withInput()->withErrors($validator);
        }

        $sosmed = new Social();
        $sosmed->nama_sosmed = $request->sosmed;
        $sosmed->link = $request->link_sosmed;
    

        $image_parts = explode(';base64', $request->logo);
        $image_type_aux = explode('image/', $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $filename = uniqid().'.png';
        $fileLocation = '/image/socials/'.$request->sosmed.'/logo';
        $path = $fileLocation."/".$filename;
        $sosmed->logo = '/storage'.$path;
        $sosmed->logo_name = $filename;
        Storage::disk('public')->put($path, $image_base64);

        $sosmed->save();

        return back()->with('statusInput', 'Social Media successfully added to record');
    }

    public function edit($id)
    {
        $social = Social::find($id);
        return response()->json(['success' => 'Berhasil', 'social' => $social]);
    }

    public function update($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'edit_sosmed' => 'required|min:3',
            'edit_link_sosmed' => 'required|min:5'
        ]);

        if($validator->fails()){
            return back()->withInput()->withErrors($validator);
        }

        $sosmed = Social::find($id);
        $sosmed->nama_sosmed = $request->edit_sosmed;
        $sosmed->link = $request->edit_link_sosmed;
        
        if($request->edit_logo!=""){
            $image_parts = explode(';base64', $request->edit_logo);
            $image_type_aux = explode('image/', $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $filename = uniqid().'.png';
            $fileLocation = '/image/socials/'.$request->sosmed.'/logo';
            $path = $fileLocation."/".$filename;
            $sosmed->logo = '/storage'.$path;
            $sosmed->logo_name = $filename;
            Storage::disk('public')->put($path, $image_base64);
        }

        $sosmed->update();

        return back()->with('statusInput', 'Social Media successfully updated');
    }


    public function destroy($id)
    {
    	$social = Social::find($id);
        $social->delete();
        return redirect('/admin/setting/social')->with('statusInput', 'Social media successfully deleted from the record');
    }
}