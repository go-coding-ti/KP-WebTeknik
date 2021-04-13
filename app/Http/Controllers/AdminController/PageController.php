<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Page;
use App\PageImage;
use Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File; 

class PageController extends Controller
{
    public function index(){
        $data = Page::where('deleted_at', NULL)->get();
        // dd(isset($data));
        return view('adminpages.page.page', compact('data'));
    }


    public function create(){
        return view('adminpages.page.create');
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
            $galeriLocation = '/image/pages/'.$request->title_ina.'/galeri';
            $galeriname = $galeri->getClientOriginalName();
            $path = $galeriLocation."/".$galeriname;
            $page->galeri = '/storage'.$path;
            $page->galeri_name = $galeriname;
            Storage::disk('public')->put($path, file_get_contents($galeri));
            //$galeri->move($galeriLocation, $page->galeri);
        }
        if($request->file('lampiran')!=""){
            $file = $request->file('lampiran');
            $fileLocation = '/file/pages/'.$request->title_ina.'/lampiran';
            $filename = $file->getClientOriginalName();
            $path = $fileLocation."/".$filename;
            $page->file = '/storage'.$path;
            $page->file_name = $filename;
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

        foreach ($images as $count => $image) {
            $src = $image->getAttribute('src');
            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimeType = $groups['mime'];
                $path = '/image/pages/'.$page->title_ina.'/content/'. uniqid('', true) . '.' . $mimeType;
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

        return redirect('/admin/pages')->with('statusInput', 'Page successfully added to record');
    }

    public function destroy($id)
    {
    	$page = Page::find($id);
        $page->delete();
        return redirect('/admin/pages');
    }

    public function edit($id){
    	$page = Page::where('id', $id)->get()->first();
        return view('adminpages.page.edit', compact('page'));
    }

    public function update($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title_ina' => 'required|min:3',
            'content_ina' => 'required|min:8',
            'title_eng' => 'required|min:3',
            'content_eng' => 'required|min:8'
        ]);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $page = Page::find($id);
        $arrImage = [];
        $idImage = [];

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
            $galeriLocation = '/image/pages/'.$request->title_ina.'/galeri';
            $galeriname = $galeri->getClientOriginalName();
            $path = $galeriLocation."/".$galeriname;
            $page->galeri = '/storage'.$path;
            $page->galeri_name = $galeriname;
            Storage::disk('public')->put($path, file_get_contents($galeri));
        }
        if($request->file('lampiran')!=""){
            $file = $request->file('lampiran');
            $fileLocation = '/file/pages/'.$request->title_ina.'/lampiran';
            $filename = $file->getClientOriginalName();
            $path = $fileLocation."/".$filename;
            $page->file = '/storage'.$path;
            $page->file_name = $filename;
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



        $pageImage = PageImage::where('id_page','=', $id)->get();

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
                $path = '/image/pages/'.$page->title_ina.'/content/'. uniqid('', true) . '.' . $mimeType;
                Storage::disk('public')->put($path, file_get_contents($src));
                $image->removeAttribute('src');
                $link = asset('storage'.$path);
                $image->setAttribute('src', $link);
                array_push($arrImage, $path);
            }
            if($pageImage != null){
                foreach($pageImage as $item){
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

        $pageImages = PageImage::whereNotIn('id', $idImage)->where('id_page',$id)->get();
        PageImage::whereNotIn('id', $idImage)->where('id_page',$id)->delete();
        foreach($pageImages as $item){
            Storage::disk('public')->delete($item->image);
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

        $page->update();

        return redirect('admin/pages')->with('statusInput', 'Post successfully updated from the record');
    }


    public function show($pagetitle)
    {
        $page = Page::where('title_slug', $pagetitle)->first();
        return view('adminpages.page.show', compact('page'));
    }

    public function status($id, $status)
    {
        $page = Page::find($id);
        $page->status = $status;
        $page->save();
        return response()->json(['success' => 'berhasil terganti']);
    }
}
