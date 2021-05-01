<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Berita;
use App\BeritaImage;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File; 

class BeritaController extends Controller
{
    public function index(){

        $data = Berita::where('deleted_at', NULL)->with('kategori')->get();
        return view('adminpages.berita.berita', compact('data'));
    }


    public function create(){
        $kategori = Kategori::where('deleted_at', NULL)->get();
        return view('adminpages.berita.create', compact('kategori'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title_ina' => 'required|min:3|unique:beritas',
            'content_ina' => 'required|min:8',
            'title_eng' => 'required|min:3',
            'content_eng' => 'required|min:8',
            'kategori' => 'required',
            'tanggal' => 'required',
            'thumbnail' => 'required'
        ]);

        $kategori = Kategori::find($request->kategori);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $arrImage = [];

        $berita = new Berita();
        $berita->title_ina = $request->title_ina;
        $berita->title_eng = $request->title_eng;
        $berita->title_slug = Str::slug($request->title_ina);
        $berita->status = 'aktif';
        $berita->tanggal_publish = $request->tanggal;
        $berita->id_kategori = $request->kategori;

        // if($request->file('thumbnail')!=""){
        //     $file = $request->file('thumbnail');
        //     $fileLocation = '/image/news/'.$kategori->kategori_lower.'/'.$request->title_ina.'/thumbnail';
        //     $filename = $file->getClientOriginalName();
        //     $path = $fileLocation."/".$filename;
        //     $berita->thumbnail = '/storage'.$path;
        //     $berita->thumbnail_name = $filename;
        //     Storage::disk('public')->put($path, file_get_contents($file));
        // }

        $image_parts = explode(';base64', $request->thumbnail);
        $image_type_aux = explode('image/', $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $filename = uniqid().'.png';
        $fileLocation = '/image/news/'.$kategori->kategori_lower.'/'.$request->title_ina.'/thumbnail';
        $path = $fileLocation."/".$filename;
        $berita->thumbnail = '/storage'.$path;
        $berita->thumbnail_name = $filename;
        Storage::disk('public')->put($path, $image_base64);

        
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
                $path = '/image/news/'.$kategori->kategori_lower.'/'.$berita->title_ina.'/content_ina/'. uniqid('', true) . '.' . $mimeType;
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
                $path = '/image/news/'.$kategori->kategori_lower.'/'.$berita->title_ina.'/content_eng/'. uniqid('', true) . '.' . $mimeType;
                Storage::disk('public')->put($path, file_get_contents($src));
                $image->removeAttribute('src');
                $link = asset('storage'.$path);
                $image->setAttribute('src', $link);
                array_push($arrImage, $path);
            }
        }

        $detailina = $dom->savehtml();
        $berita->content_ina = $detailina;
        $detaileng = $domeng->savehtml();
        $berita->content_eng = $detaileng;
        $berita->save();

        foreach($arrImage as $item){
            $beritaImage = new BeritaImage();
            $beritaImage->id_berita = $berita->id;
            $beritaImage->image = $item;
            $beritaImage->save();
        }

        return redirect('/admin/news')->with('statusInput', 'Berita successfully added to record');
    }

    public function destroy($id)
    {
    	$berita = Berita::find($id);
        $berita->delete();
        return redirect('/admin/news')->with('statusInput', 'Berita successfully deleted from the record');
    }

    public function edit($id){
        $kategori = Kategori::where('deleted_at', NULL)->get();
        $berita = Berita::find($id);
        return view('adminpages.berita.edit', compact('kategori','berita'));
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

        $kategori = Kategori::find($request->kategori);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $berita = Berita::find($id);
        $arrImage = [];
        $idImage = [];

        $berita->title_ina = $request->title_ina;
        $berita->title_eng = $request->title_eng;
        $berita->title_slug = Str::slug($request->title_ina);
        $berita->status = 'aktif';
        $berita->tanggal_publish = $request->tanggal;
        $berita->id_kategori = $request->kategori;

        // if($request->file('thumbnail')!=""){
        //     Storage::disk('public')->delete($berita->thumbnail);
        //     $file = $request->file('thumbnail');
        //     $fileLocation = '/image/news/'.$kategori->kategori_lower.'/'.$request->title_ina.'/thumbnail';
        //     $filename = $file->getClientOriginalName();
        //     $path = $fileLocation."/".$filename;
        //     $berita->thumbnail = '/storage'.$path;
        //     $berita->thumbnail_name = $filename;
        //     Storage::disk('public')->put($path, file_get_contents($file));
        // }

        if($request->thumbnail!=""){
            Storage::disk('public')->delete($berita->thumbnail);
            $image_parts = explode(';base64', $request->thumbnail);
            $image_type_aux = explode('image/', $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $filename = uniqid().'.png';
            $fileLocation = '/image/news/'.$kategori->kategori_lower.'/'.$request->title_ina.'/thumbnail';
            $path = $fileLocation."/".$filename;
            $berita->thumbnail = '/storage'.$path;
            $berita->thumbnail_name = $filename;
            Storage::disk('public')->put($path, $image_base64);
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



        $beritaImage = beritaImage::where('id_berita','=', $id)->get();

        //variabel dummy
                $arrsrc = [];
                $arrfoto = [];
                $status = '';
        //variabel dummy

        //content ina image
        foreach ($images as $count => $image) {
            $src = $image->getAttribute('src');
            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimeType = $groups['mime'];
                $path = '/image/news/'.$kategori->kategori_lower.'/'.$berita->title_ina.'/content_ina/'. uniqid('', true) . '.' . $mimeType;
                Storage::disk('public')->put($path, file_get_contents($src));
                $image->removeAttribute('src');
                $link = asset('storage'.$path);
                $image->setAttribute('src', $link);
                array_push($arrImage, $path);
            }
            if($beritaImage != null){
                foreach($beritaImage as $item){
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

        //content eng image
        foreach ($imageseng as $count => $imageeng) {
            $src = $imageeng->getAttribute('src');
            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimeType = $groups['mime'];
                $path = '/image/news/'.$kategori->kategori_lower.'/'.$berita->title_ina.'/content_eng/'. uniqid('', true) . '.' . $mimeType;
                Storage::disk('public')->put($path, file_get_contents($src));
                $imageeng->removeAttribute('src');
                $link = asset('storage'.$path);
                $imageeng->setAttribute('src', $link);
                array_push($arrImage, $path);
            }
            if($beritaImage != null){
                foreach($beritaImage as $item){
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

        $beritaImages = BeritaImage::whereNotIn('id', $idImage)->where('id_berita',$id)->get();
        BeritaImage::whereNotIn('id', $idImage)->where('id_berita',$id)->delete();
        foreach($beritaImages as $item){
            Storage::disk('public')->delete($item->image);
        }

        $detailina = $dom->savehtml();
        $berita->content_ina = $detailina;
        $detaileng = $domeng->savehtml();
        $berita->content_eng = $detaileng;
        $berita->update();

        foreach($arrImage as $item){
            $pageImage = new BeritaImage();
            $pageImage->id_berita = $berita->id;
            $pageImage->image = $item;
            $pageImage->save();
        }

        return redirect('admin/news')->with('statusInput', 'Berita successfully updated from the record');
    }


    public function show($kategori, $judul_slug)
    {
        $berita = Berita::where('title_slug', $judul_slug)->first();
        return view('adminpages.berita.show', compact('berita'));
    }

    public function status($id, $status)
    {
        $berita = Berita::find($id);
        $berita->status = $status;
        $berita->save();
        return response()->json(['success' => 'berhasil terganti']);
    }
}
