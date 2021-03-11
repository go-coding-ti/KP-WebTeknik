<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Page;
use App\PageImage;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File; 

class PageController extends Controller
{
    public function index(){
        $data = Page::orderBy('id', 'DESC')->get();
        // dd(isset($data));
        return view('adminpages.adminpage.adminPageHome', compact('data'));
    }


    public function create(){
        return view('adminpages.adminpage.adminPageCreate');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title_ina' => 'required|min:3|unique:pages',
            'content_ina' => 'required|min:8',
            'title_eng' => 'required|min:3',
            'content_eng' => 'required|min:8'
        ]);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $arrImage = [];

        $page = new Page();
        $page->title_ina = $request->title_ina;
        $page->title_eng = $request->title_eng;
        $page->title_slug = Str::slug($request->title_ina);
        $page->status = 'aktif';
        $page->tanggal_publish = $request->tanggal;
        

        if($request->urlvideo != ""){
            $page->url_video = $request->urlvideo;
        }


        if($request->file('galeri')!=""){
            $galeri = $request->file('galeri');
            $galeriLocation = $galeri->store('galeri');
            // $galeriLocation = "galeri";
            $galeriname = $galeri->getClientOriginalName();
            $page->galeri = $galeriLocation;
            // $path = '/image/galeri/';
            // Storage::disk('public')->put($path);
            $galeri->move($galeriLocation, $page->galeri);
        }
        if($request->file('lampiran')!=""){
            $file = $request->file('lampiran');
            $fileLocation = $file->store('lampiran');
            $filename = $file->getClientOriginalName();
            $page->file = $fileLocation;
            $file->move($fileLocation, $page->file);
        }

        
        $detailina = $request->content_ina;
        $detaileng = $request->content_eng;
        libxml_use_internal_errors(true);
        $dom = new \domdocument();
        $dom->loadHtml($detailina, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $domeng = new \domdocument();
        $domeng->loadHtml($detaileng, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');

        foreach ($images as $count => $image) {
            $src = $image->getAttribute('src');
            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimeType = $groups['mime'];
                $path = '/image/pages/'.$page->title_ina.'/'. uniqid('', true) . '.' . $mimeType;
                Storage::disk('public')->put($path, file_get_contents($src));
                $image->removeAttribute('src');
                $link = asset('storage'.$path);
                $image->setAttribute('src', $link);
                array_push($arrImage, $path);
            }
        }

        $detailina = $dom->savehtml();
        $page->content_ina = $detailina;
        $detaileng = $dom->savehtml();
        $page->content_eng = $detaileng;
        $page->save();

        foreach($arrImage as $item){
            $pageImage = new PageImage();
            $pageImage->id_page = $page->id;
            $pageImage->image = $item;
            $pageImage->save();
        }

        return redirect('/admin/pages');
    }

    public function destroy($id)
    {
    	$berita = Berita::find($id);
        $berita->delete();
        
        return redirect()->route('admin-berita-home');
    }

    public function edit($id){
    	$berita = Berita::where('id', $id)->get()->first();
        return view('adminpages.adminBeritaEdit', compact('berita'));
    }

    public function update(Request $request){
    	$berita = Berita::find($request->id);
    	$berita->judul = $request->judul;
    	$berita->isi_berita =  $request->konten;
    	$berita->update();
    	return redirect('/admin/berita')->with('success', 'Data berhasil diedit!');

    }

    public function show($pagetitle)
    {
        $page = Page::where('title_slug', $pagetitle)->first();
        return view('adminpages.adminpage.adminPageShow', compact('page'));
    }

    public function status(Request $request)
    {
        $page = Page::find($request->id);
        $page->status = $request->status;
        $page->update();
        $view = view('adminpages.adminpage.adminPageHome');

        return response()->json(['success' => 'berhasil', 'view' => $view]);
    }
}
