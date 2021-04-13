<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Video;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator; 

class VideoController extends Controller
{
    public function index(){
        $data = Video::where('deleted_at', NULL)->get();
        // dd(isset($data));
        return view('adminpages.video.video', compact('data'));
    }


    public function create(){
        return view('adminpages.video.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required|min:3|unique:videos',
            'judul_eng' => 'required|min:3',
            'deskripsi' => 'required|min:10',
            'deskripsi_eng' => 'required|min:10',
            'urlvideo' => 'required|min:5'
        ]);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $video = new Video();
        $video->judul = $request->judul;
        $video->judul_eng = $request->judul_eng;
        $video->judul_slug = Str::slug($request->judul);
        $video->deskripsi = $request->deskripsi;
        $video->deskripsi_eng = $request->deskripsi_eng;
        $video->link = $request->urlvideo;
        $video->save();

        return redirect('/admin/videos')->with('statusInput', 'Video successfully added to record');
    }

    public function edit($id){
    	$video = Video::where('id', $id)->get()->first();
        return view('adminpages.video.edit', compact('video'));
    }

    public function update($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required|min:3',
            'deskripsi' => 'required|min:10',
            'deskripsi_eng' => 'required|min:10',
            'urlvideo' => 'required|min:5'
        ]);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $video = Video::find($id);
        $video->judul = $request->judul;
        $video->judul_eng = $request->judul_eng;
        $video->judul_slug = Str::slug($request->judul);
        $video->deskripsi = $request->deskripsi;
        $video->deskripsi_eng = $request->deskripsi_eng;
        $video->link = $request->urlvideo;
        $video->save();

        return redirect('/admin/videos')->with('statusInput', 'Video successfully updated');

    }


    public function show($judul_slug)
    {
        $video = Video::where('judul_slug', $judul_slug)->first();
        return view('adminpages.video.show', compact('video'));
    }

    public function destroy($id)
    {
    	$video = Video::find($id);
        $video->delete();
        return redirect('/admin/videos')->with('statusInput', 'Video successfully deleted');
    }
}
