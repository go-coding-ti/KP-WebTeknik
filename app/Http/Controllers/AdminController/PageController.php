<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
            'titleina' => 'required|min:3',
            'contentina' => 'required|min:8',
            'titleeng' => 'required|min:3',
            'contenteng' => 'required|min:8'
        ]);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $arrImage = [];

        $page = new Page();
        $page->title_ina = $request->titleina;
        $page->title_eng = $request->titleeng;
        $page->status = 'aktif';
        $page->tanggal_publish = $request->tanggal;
        $page->url_video = $request->urlvideo;


        $file = $request->file('lampiran');
        $fileLocation = "storage/app/public/lampiran/pages";
        $filename = $file->getClientOriginalName();
        $page->file = $fileLocation."/".$filename;
        $file->move($fileLocation, $page->file);

        $galeri = $request->file('galeri');
        $galeriLocation = "storage/app/public/galeri/pages";
        $galeriname = $galeri->getClientOriginalName();
        $page->galeri = $galeriLocation."/".$galeriname;
        $galeri->move($galeriLocation, $page->galeri);

        
        $detailina = $request->contentina;
        $detaileng = $request->contenteng;
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
                $path = '/image/pages/'.$page->titleina.'/'. uniqid('', true) . '.' . $mimeType;
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

    public function status(Request $request)
    {
        $page = Page::find($request->id);
        $page->status = $request->status;
        $page->update();
    }
}
