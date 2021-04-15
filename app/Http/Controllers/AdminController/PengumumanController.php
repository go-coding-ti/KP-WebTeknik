<?php

namespace App\Http\Controllers\AdminController;

use App\BeritaImage;
use App\Http\Controllers\Controller;
use App\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Pengumuman;
use App\PengumumanImage;
use App\PengumumanKategori;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File; 

class PengumumanController extends Controller
{
    public function index(){

        $data = Pengumuman::where('deleted_at', NULL)->with('kategori')->get();;
        return view('adminpages.pengumuman.pengumuman', compact('data'));
    }


    public function create(){
        $kategori = PengumumanKategori::where('deleted_at', NULL)->get();
        return view('adminpages.pengumuman.create', compact('kategori'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title_ina' => 'required|min:3|unique:pengumumans',
            'content_ina' => 'required|min:8',
            'title_eng' => 'required|min:3',
            'content_eng' => 'required|min:8',
            'kategori' => 'required',
            'tanggal' => 'required'
        ]);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $arrImage = [];

        $pengumuman = new Pengumuman();
        $pengumuman->title_ina = $request->title_ina;
        $pengumuman->title_eng = $request->title_eng;
        $pengumuman->title_slug = Str::slug($request->title_ina);
        $pengumuman->status = 'aktif';
        $pengumuman->tanggal_publish = $request->tanggal;
        $pengumuman->id_kategori = $request->kategori;

        if($request->file('lampiran')!=""){
            $file = $request->file('lampiran');
            $fileLocation = '/file/news/'.$request->kategori.'/'.$request->title_ina.'/lampiran';
            $filename = $file->getClientOriginalName();
            $path = $fileLocation."/".$filename;
            $pengumuman->lampiran = '/storage'.$path;
            $pengumuman->lampiran_name = $filename;
            Storage::disk('public')->put($path, file_get_contents($file));
        }
        
        $detailina = $request->content_ina;
        $detaileng = $request->content_eng;
        libxml_use_internal_errors(true);
        $dom = new \domdocument();
        $dom->loadHtml($detailina, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $domeng = new \domdocument();
        $domeng->loadHtml($detaileng, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');
        $imageseng = $domeng->getElementsByTagName('img');

        foreach ($images as $count => $image) {
            $src = $image->getAttribute('src');
            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimeType = $groups['mime'];
                $path = '/image/pengumuman/'.$request->kategori.'/'.$pengumuman->title_slug.'/content_ina/'. uniqid('', true) . '.' . $mimeType;
                Storage::disk('public')->put($path, file_get_contents($src));
                $image->removeAttribute('src');
                $link = asset('storage'.$path);
                $image->setAttribute('src', $link);
                array_push($arrImage, $path);
            }
        }

        foreach ($imageseng as $count => $image) {
            $src = $image->getAttribute('src');
            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimeType = $groups['mime'];
                $path = '/image/pengumuman/'.$request->kategori.'/'.$pengumuman->title_slug.'/content_eng/'. uniqid('', true) . '.' . $mimeType;
                Storage::disk('public')->put($path, file_get_contents($src));
                $image->removeAttribute('src');
                $link = asset('storage'.$path);
                $image->setAttribute('src', $link);
                array_push($arrImage, $path);
            }
        }

        $detailina = $dom->savehtml();
        $pengumuman->content_ina = $detailina;
        $detaileng = $domeng->savehtml();
        $pengumuman->content_eng = $detaileng;
        $pengumuman->save();

        foreach($arrImage as $item){
            $pengumumanImage = new PengumumanImage();
            $pengumumanImage->id_pengumuman = $pengumuman->id;
            $pengumumanImage->image = $item;
            $pengumumanImage->save();
        }

        return redirect('/admin/announcement')->with('statusInput', 'Pengumuman successfully added to record');
    }

    public function destroy($id)
    {
    	$berita = Pengumuman::find($id);
        $berita->delete();
        return redirect('/admin/announcement')->with('statusInput', 'Pengumuman successfully deleted from the record');
    }

    public function edit($id){
        $kategori = PengumumanKategori::where('deleted_at', NULL)->get();
        $pengumuman = Pengumuman::find($id);
        return view('adminpages.pengumuman.edit', compact('pengumuman', 'kategori'));
    }

    public function update($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title_ina' => 'required|min:3',
            'content_ina' => 'required|min:8',
            'title_eng' => 'required|min:3',
            'content_eng' => 'required|min:8',
            'kategori' => 'required',
            'tanggal' => 'required'
        ]);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $pengumuman = Pengumuman::find($id);
        $arrImage = [];
        $idImage = [];

        $pengumuman->title_ina = $request->title_ina;
        $pengumuman->title_eng = $request->title_eng;
        $pengumuman->title_slug = Str::slug($request->title_ina);
        $pengumuman->status = 'aktif';
        $pengumuman->tanggal_publish = $request->tanggal;
        $pengumuman->id_kategori = $request->kategori;


        if($request->file('lampiran')!=""){
            Storage::disk('public')->delete($pengumuman->lampiran);
            $file = $request->file('lampiran');
            $fileLocation = '/file/news/'.$request->kategori.'/'.$request->title_ina.'/lampiran';
            $filename = $file->getClientOriginalName();
            $path = $fileLocation."/".$filename;
            $pengumuman->lampiran = '/storage'.$path;
            $pengumuman->lampiran_name = $filename;
            Storage::disk('public')->put($path, file_get_contents($file));
        }
        
        $detailina = $request->content_ina;
        $detaileng = $request->content_eng;
        libxml_use_internal_errors(true);
        $dom = new \domdocument();
        $dom->loadHtml($detailina, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $domeng = new \domdocument();
        $domeng->loadHtml($detaileng, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');
        $imageseng = $domeng->getElementsByTagName('img');


        $pengumumanImage = PengumumanImage::where('id_pengumuman','=', $id)->get();

        //variabel dummy
                $arrsrc = [];
                $arrfoto = [];
                $status = '';
        //variabel dummy

        foreach ($images as $count => $image) {
            $src = $image->getAttribute('src');
            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimeType = $groups['mime'];
                $path = '/image/news/'.$request->kategori.'/'.$pengumuman->title_slug.'/content_ina/'. uniqid('', true) . '.' . $mimeType;
                Storage::disk('public')->put($path, file_get_contents($src));
                $image->removeAttribute('src');
                $link = asset('storage'.$path);
                $image->setAttribute('src', $link);
                array_push($arrImage, $path);
            }
            if($pengumumanImage != null){
                foreach($pengumumanImage as $item){
                    $src = str_replace('/',' ',$src);
                    $item->image = str_replace(' ','%20',$item->image);
                    $item->image = str_replace('/', ' ',$item->image);
                    array_push($arrsrc, $src);
                    array_push($arrfoto, $item->image);
                    if(preg_match('/'.$item->image.'/',$src)){
                        array_push($arrsrc, 'true');
                        array_push($idImage, $item->id);
                    break;
                    }
                }   
            }
        }

        foreach ($imageseng as $count => $image) {
            $src = $image->getAttribute('src');
            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimeType = $groups['mime'];
                $path = '/image/news/'.$request->kategori.'/'.$pengumuman->title_slug.'/content_eng/'. uniqid('', true) . '.' . $mimeType;
                Storage::disk('public')->put($path, file_get_contents($src));
                $image->removeAttribute('src');
                $link = asset('storage'.$path);
                $image->setAttribute('src', $link);
                array_push($arrImage, $path);
            }
            if($pengumumanImage != null){
                foreach($pengumumanImage as $item){
                    $src = str_replace('/',' ',$src);
                    $item->image = str_replace(' ','%20',$item->image);
                    $item->image = str_replace('/', ' ',$item->image);
                    array_push($arrsrc, $src);
                    array_push($arrfoto, $item->image);
                    if(preg_match('/'.$item->image.'/',$src)){
                        array_push($arrsrc, 'true');
                        array_push($idImage, $item->id);
                    break;
                    }
                }   
            }
        }

        $pengumumanImage = PengumumanImage::whereNotIn('id', $idImage)->where('id_pengumuman',$id)->get();
        PengumumanImage::whereNotIn('id', $idImage)->where('id_pengumuman',$id)->delete();
        foreach($pengumumanImage as $item){
            Storage::disk('public')->delete($item->image);
        }

        $detailina = $dom->savehtml();
        $pengumuman->content_ina = $detailina;
        $detaileng = $domeng->savehtml();
        $pengumuman->content_eng = $detaileng;
        $pengumuman->update();

        foreach($arrImage as $item){
            $pengumumanImage = new PengumumanImage();
            $pengumumanImage->id_pengumuman = $pengumuman->id;
            $pengumumanImage->image = $item;
            $pengumumanImage->save();
        }

        return redirect('admin/announcement')->with('statusInput', 'Pengumuman successfully updated from the record');
    }


    public function show($judul_slug)
    {
        $pengumuman = Pengumuman::where('title_slug', $judul_slug)->first();
        return view('adminpages.pengumuman.show', compact('pengumuman'));
    }

    public function status($id, $status)
    {
        $pengumuman = Pengumuman::find($id);
        $pengumuman->status = $status;
        $pengumuman->save();
        return response()->json(['success' => 'berhasil terganti']);
    }
}
