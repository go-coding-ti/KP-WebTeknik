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

        $staf = new Staff();
        $staf->nama = $request->nama;
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

        if($request->file('foto')!=""){
            $file = $request->file('foto');
            $fileLocation = '/image/staff/'.$request->nip;
            $filename = $file->getClientOriginalName();
            $path = $fileLocation."/".$filename;
            $staf->foto = '/storage'.$path;
            $staf->foto_name = $filename;
            Storage::disk('public')->put($path, file_get_contents($file));
        }

        $staf->save();

        return redirect('/admin/staf')->with('statusInput', 'Staf successfully added to record');
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


        if($request->file('lampiran')!=""){
            Storage::disk('public')->delete($berita->lampiran);
            $file = $request->file('lampiran');
            $fileLocation = '/file/news/'.$kategori->kategori_lower.'/'.$request->title_ina.'/lampiran';
            $filename = $file->getClientOriginalName();
            $path = $fileLocation."/".$filename;
            $berita->lampiran = '/storage'.$path;
            $berita->lampiran_name = $filename;
            Storage::disk('public')->put($path, file_get_contents($file));
        }

        if($request->file('thumbnail')!=""){
            Storage::disk('public')->delete($berita->thumbnail);
            $file = $request->file('thumbnail');
            $fileLocation = '/image/news/'.$kategori->kategori_lower.'/'.$request->title_ina.'/thumbnail';
            $filename = $file->getClientOriginalName();
            $path = $fileLocation."/".$filename;
            $berita->thumbnail = '/storage'.$path;
            $berita->thumbnail_name = $filename;
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



        $beritaImage = beritaImage::where('id_berita','=', $id)->get();

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
                $path = '/image/news/'.$kategori->kategori_lower.'/'.$berita->title_ina.'/content/'. uniqid('', true) . '.' . $mimeType;
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
