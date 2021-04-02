<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Agenda;
use App\AgendaKategori;
use App\AgendaImage;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File; 

class AgendaController extends Controller
{
    public function index(){

        $data = Agenda::where('deleted_at', NULL)->with('kategori')->get();
        return view('adminpages.agenda.agenda', compact('data'));
    }


    public function create(){
        $kategori = AgendaKategori::where('deleted_at', NULL)->get();
        return view('adminpages.agenda.create', compact('kategori'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title_ina' => 'required|min:3|unique:agendas',
            'content_ina' => 'required|min:8',
            'title_eng' => 'required|min:3',
            'content_eng' => 'required|min:8',
            'kategori' => 'required',
            'tanggal' => 'required',
            'waktu_mulai' => 'required',
            'waktu_akhir' => 'required',
            'lokasi' => 'required|min:2'
        ]);

        $kategori = AgendaKategori::find($request->kategori);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $arrImage = [];

        $agenda = new Agenda();
        $agenda->title_ina = $request->title_ina;
        $agenda->title_eng = $request->title_eng;
        $agenda->title_slug = Str::slug($request->title_ina);
        $agenda->status = 'aktif';
        $agenda->tanggal = $request->tanggal;
        $agenda->id_kategori = $request->kategori;
        $agenda->waktu_mulai = $request->waktu_mulai;
        $agenda->waktu_akhir = $request->waktu_akhir;
        $agenda->lokasi = $request->lokasi;
        if($request->website != ""){
            $agenda->website = $request->website;
        }
    
        if($request->file('lampiran')!=""){
            $file = $request->file('lampiran');
            $fileLocation = '/file/agenda/'.$kategori->kategori_lower.'/'.$request->title_ina.'/lampiran';
            $filename = $file->getClientOriginalName();
            $path = $fileLocation."/".$filename;
            $agenda->lampiran = '/storage'.$path;
            $agenda->lampiran_name = $filename;
            Storage::disk('public')->put($path, file_get_contents($file));
        }

        if($request->file('thumbnail')!=""){
            $file = $request->file('thumbnail');
            $fileLocation = '/image/agenda/'.$kategori->kategori_lower.'/'.$request->title_ina.'/thumbnail';
            $filename = $file->getClientOriginalName();
            $path = $fileLocation."/".$filename;
            $agenda->thumbnail = '/storage'.$path;
            $agenda->thumbnail_name = $filename;
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
                $path = '/image/agenda/'.$kategori->kategori_lower.'/'.$agenda->title_ina.'/content/'. uniqid('', true) . '.' . $mimeType;
                Storage::disk('public')->put($path, file_get_contents($src));
                $image->removeAttribute('src');
                $link = asset('storage'.$path);
                $image->setAttribute('src', $link);
                array_push($arrImage, $path);
            }
        }

        $detailina = $dom->savehtml();
        $agenda->content_ina = $detailina;
        $detaileng = $domeng->savehtml();
        $agenda->content_eng = $detaileng;
        $agenda->save();

        foreach($arrImage as $item){
            $agendaImage = new AgendaImage();
            $agendaImage->id_agenda = $agenda->id;
            $agendaImage->image = $item;
            $agendaImage->save();
        }

        return redirect('/admin/events')->with('statusInput', 'Berita successfully added to record');
    }

    public function destroy($id)
    {
        $agenda = Agenda::find($id);
        $agenda->delete();
        return redirect('/admin/events')->with('statusInput', 'Agenda successfully deleted from the record');
    }

    public function edit($id){
        $kategori = AgendaKategori::where('deleted_at', NULL)->get();
        $agenda = Agenda::find($id);
        return view('adminpages.agenda.edit', compact('kategori','agenda'));
    }

    public function update($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title_ina' => 'required|min:3',
            'content_ina' => 'required|min:8',
            'title_eng' => 'required|min:3',
            'content_eng' => 'required|min:8',
            'kategori' => 'required',
            'tanggal' => 'required',
            'waktu_mulai' => 'required',
            'waktu_akhir' => 'required',
            'lokasi' => 'required|min:2'
        ]);

        $kategori = Kategori::find($request->kategori);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $agenda = Agenda::find($id);
        $arrImage = [];
        $idImage = [];

        $agenda->title_ina = $request->title_ina;
        $agenda->title_eng = $request->title_eng;
        $agenda->title_slug = Str::slug($request->title_ina);
        $agenda->status = 'aktif';
        $agenda->tanggal = $request->tanggal;
        $agenda->id_kategori = $request->kategori;
        $agenda->waktu_mulai = $request->waktu_mulai;
        $agenda->waktu_akhir = $request->waktu_akhir;
        $agenda->lokasi = $request->lokasi;
        if($request->website != ""){
            $agenda->website = $request->website;
        }



        if($request->file('lampiran')!=""){
            $file = $request->file('lampiran');
            $fileLocation = '/file/agenda/'.$kategori->kategori_lower.'/'.$request->title_ina.'/lampiran';
            $filename = $file->getClientOriginalName();
            $path = $fileLocation."/".$filename;
            $agenda->lampiran = '/storage'.$path;
            $agenda->lampiran_name = $filename;
            Storage::disk('public')->put($path, file_get_contents($file));
        }

        if($request->file('thumbnail')!=""){
            $file = $request->file('thumbnail');
            $fileLocation = '/image/agenda/'.$kategori->kategori_lower.'/'.$request->title_ina.'/thumbnail';
            $filename = $file->getClientOriginalName();
            $path = $fileLocation."/".$filename;
            $agenda->thumbnail = '/storage'.$path;
            $agenda->thumbnail_name = $filename;
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

        $agendaImage = AgendaImage::where('id_agenda','=', $id)->get();

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
                $path = '/image/agenda/'.$kategori->kategori_lower.'/'.$agenda->title_ina.'/content/'. uniqid('', true) . '.' . $mimeType;
                Storage::disk('public')->put($path, file_get_contents($src));
                $image->removeAttribute('src');
                $link = asset('storage'.$path);
                $image->setAttribute('src', $link);
                array_push($arrImage, $path);
            }
            if($agendaImage != null){
                foreach($agendaImage as $item){
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

        $agendaImage = AgendaImage::whereNotIn('id', $idImage)->where('id_agenda',$id)->get();
        AgendaImage::whereNotIn('id', $idImage)->where('id_agenda',$id)->delete();
        foreach($agendaImage as $item){
            Storage::disk('public')->delete($item->image);
        }

        $detailina = $dom->savehtml();
        $agenda->content_ina = $detailina;
        $detaileng = $domeng->savehtml();
        $agenda->content_eng = $detaileng;
        $agenda->update();

        foreach($arrImage as $item){
            $agendaImage = new AgendaImage();
            $agendaImage->id_agenda = $agenda->id;
            $agendaImage->image = $item;
            $agendaImage->save();
        }

        return redirect('admin/events')->with('statusInput', 'Agenda successfully updated from the record');
    }


    public function show($kategori, $judul_slug)
    {
        $agenda = Agenda::where('title_slug', $judul_slug)->first();
        return view('adminpages.agenda.show', compact('agenda'));
    }

    public function status($id, $status)
    {
        $agenda = Agenda::find($id);
        $agenda->status = $status;
        $agenda->save();
        return response()->json(['success' => 'berhasil terganti']);
    }
}
