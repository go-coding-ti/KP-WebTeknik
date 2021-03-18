<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Post;
use App\PostImage;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File; 

class PostController extends Controller
{
    public function index(){

        $data = Post::where('deleted_at', NULL)->with('kategori')->get();
        return view('adminpages.post.post', compact('data'));
    }


    public function create(){
        $kategori = Kategori::where('deleted_at', NULL)->get();
        return view('adminpages.post.create', compact('kategori'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title_ina' => 'required|min:3|unique:posts',
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

        $arrImage = [];

        $post = new Post();
        $post->title_ina = $request->title_ina;
        $post->title_eng = $request->title_eng;
        $post->title_slug = Str::slug($request->title_ina);
        $post->status = 'aktif';
        $post->tanggal_publish = $request->tanggal;
        $post->id_kategori = $request->kategori;

        if($request->file('lampiran')!=""){
            $file = $request->file('lampiran');
            $fileLocation = '/file/posts/'.$kategori->kategori_lower.'/'.$request->title_ina.'/lampiran';
            $filename = $file->getClientOriginalName();
            $path = $fileLocation."/".$filename;
            $post->lampiran = '/storage'.$path;
            $post->lampiran_name = $filename;
            Storage::disk('public')->put($path, file_get_contents($file));
        }

        if($request->file('thumbnail')!=""){
            $file = $request->file('thumbnail');
            $fileLocation = '/image/posts/'.$kategori->kategori_lower.'/'.$request->title_ina.'/thumbnail';
            $filename = $file->getClientOriginalName();
            $path = $fileLocation."/".$filename;
            $post->thumbnail = '/storage'.$path;
            $post->thumbnail_name = $filename;
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
                $path = '/image/posts/'.$kategori->kategori_lower.'/'.$post->title_ina.'/content/'. uniqid('', true) . '.' . $mimeType;
                Storage::disk('public')->put($path, file_get_contents($src));
                $image->removeAttribute('src');
                $link = asset('storage'.$path);
                $image->setAttribute('src', $link);
                array_push($arrImage, $path);
            }
        }

        $detailina = $dom->savehtml();
        $post->content_ina = $detailina;
        $detaileng = $dom->savehtml();
        $post->content_eng = $detaileng;
        $post->save();

        foreach($arrImage as $item){
            $postImage = new PostImage();
            $postImage->id_post = $post->id;
            $postImage->image = $item;
            $postImage->save();
        }

        return redirect('/admin/posts')->with('statusInput', 'Post successfully added to record');
    }

    public function destroy($id)
    {
    	$post = Post::find($id);
        $post->delete();
        return redirect('/admin/posts')->with('statusInput', 'Post successfully deleted from the record');
    }

    public function edit($id){
        $kategori = Kategori::where('deleted_at', NULL)->get();
        $post = Post::find($id);
        return view('adminpages.post.edit', compact('kategori','post'));
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

        $post = Post::find($id);
        $arrImage = [];
        $idImage = [];

        $post->title_ina = $request->title_ina;
        $post->title_eng = $request->title_eng;
        $post->title_slug = Str::slug($request->title_ina);
        $post->status = 'aktif';
        $post->tanggal_publish = $request->tanggal;
        $post->id_kategori = $request->kategori;


        if($request->file('lampiran')!=""){
            Storage::disk('public')->delete($post->lampiran);
            $file = $request->file('lampiran');
            $fileLocation = '/file/posts/'.$kategori->kategori_lower.'/'.$request->title_ina.'/lampiran';
            $filename = $file->getClientOriginalName();
            $path = $fileLocation."/".$filename;
            $post->lampiran = '/storage'.$path;
            $post->lampiran_name = $filename;
            Storage::disk('public')->put($path, file_get_contents($file));
        }

        if($request->file('thumbnail')!=""){
            Storage::disk('public')->delete($post->thumbnail);
            $file = $request->file('thumbnail');
            $fileLocation = '/image/posts/'.$kategori->kategori_lower.'/'.$request->title_ina.'/thumbnail';
            $filename = $file->getClientOriginalName();
            $path = $fileLocation."/".$filename;
            $post->thumbnail = '/storage'.$path;
            $post->thumbnail_name = $filename;
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



        $postImage = PostImage::where('id_post','=', $id)->get();

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
                $path = '/image/posts/'.$kategori->kategori_lower.'/'.$post->title_ina.'/content/'. uniqid('', true) . '.' . $mimeType;
                Storage::disk('public')->put($path, file_get_contents($src));
                $image->removeAttribute('src');
                $link = asset('storage'.$path);
                $image->setAttribute('src', $link);
                array_push($arrImage, $path);
            }
            if($postImage != null){
                foreach($postImage as $item){
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

        $postImages = PostImage::whereNotIn('id', $idImage)->where('id_post',$id)->get();
        PostImage::whereNotIn('id', $idImage)->where('id_post',$id)->delete();
        foreach($postImages as $item){
            Storage::disk('public')->delete($item->image);
        }

        $detailina = $dom->savehtml();
        $post->content_ina = $detailina;
        $detaileng = $dom->savehtml();
        $post->content_eng = $detaileng;
        $post->update();

        foreach($arrImage as $item){
            $pageImage = new PostImage();
            $pageImage->id_post = $post->id;
            $pageImage->image = $item;
            $pageImage->save();
        }

        return redirect('admin/posts')->with('statusInput', 'Post successfully updated from the record');
    }


    public function show($kategori, $judul_slug)
    {
        $post = Post::where('title_slug', $judul_slug)->first();
        return view('adminpages.post.show', compact('post'));
    }

    public function status(Request $request)
    {
        $post = Post::find($request->id);
        $post->status = $request->status;
        $post->update();
        $view = view('adminpages.post.post');

        return response()->json(['success' => 'berhasil', 'view' => $view]);
    }
}
