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
    public function __construct()
    {
        $this->middleware('auth');
    }
    
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
        ],[
            'judul.unique' => "Judul video yang sama telah ada sebelumnya",
            'judul.required' => "Judul Bahasa Indonesia video wajib diisi",
            'deskripsi.required' => "Deskripsi Bahasa Indonesia video wajib diisi",
            'judul_eng.required' => "Judul Bahasa Inggris video wajib diisi",
            'deskripsi_eng.required' => "Deskripsi Bahasa Inggris video wajib diisi",
            'urlvideo.required' => "URL video wajib diisi",
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

        return redirect('/admin/videos')->with('statusInput', 'Video berhasil ditambahkan');
    }

    public function edit($id){
    	$video = Video::where('id', $id)->get()->first();
        return view('adminpages.video.edit', compact('video'));
    }

    public function update($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required|min:3',
            'judul_eng' => 'required|min:3',
            'deskripsi' => 'required|min:10',
            'deskripsi_eng' => 'required|min:10',
            'urlvideo' => 'required|min:5'
        ],[
            'judul.required' => "Judul Bahasa Indonesia video wajib diisi",
            'deskripsi.required' => "Deskripsi Bahasa Indonesia video wajib diisi",
            'judul_eng.required' => "Judul Bahasa Inggris video wajib diisi",
            'deskripsi_eng.required' => "Deskripsi Bahasa Inggris video wajib diisi",
            'urlvideo.required' => "URL video wajib diisi",
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

        return redirect('/admin/videos')->with('statusInput', 'Video berhasil diperbaharui');

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
        return redirect('/admin/videos')->with('statusInput', 'Video berhasil dihapus');
    }

    public function status($id, $status)
    {
        $videos = Video::get();
        foreach($videos as $video){
            $video->is_profile=0;
            $video->update();
        }
        if($status == 1){
            $myVideo = Video::find($id);
            $myVideo->is_profile = $status;
            $myVideo->save();
        }else if($status == 0){
            $myVideo = Video::find(Video::max('id'));
            $myVideo->is_profile = 1;
            $myVideo->save();
        }


        return response()->json(['success' => 'berhasil terganti']);
    }
}
