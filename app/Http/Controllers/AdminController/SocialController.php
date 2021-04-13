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
        
        if($request->file('logo')!=""){
            $file = $request->file('logo');
            $fileLocation = '/image/socials/'.$request->sosmed.'/logo';
            $filename = $file->getClientOriginalName();
            $path = $fileLocation."/".$filename;
            $sosmed->logo = '/storage'.$path;
            $sosmed->logo_name = $filename;
            Storage::disk('public')->put($path, file_get_contents($file));
        }

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
        
        if($request->file('edit_logo')!=""){
            $file = $request->file('edit_logo');
            $fileLocation = '/image/socials/'.$request->sosmed.'/logo';
            $filename = $file->getClientOriginalName();
            $path = $fileLocation."/".$filename;
            $sosmed->logo = '/storage'.$path;
            $sosmed->logo_name = $filename;
            Storage::disk('public')->put($path, file_get_contents($file));
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