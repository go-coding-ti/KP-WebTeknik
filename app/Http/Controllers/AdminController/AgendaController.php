<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Agenda;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Agenda::orderBy('id_agenda', 'DESC')->get();
        return view('adminpages.adminAgendaHome', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $berita = new Berita();
        $berita->judul = $request->judul;
        $berita->isi_berita = $request->konten;
        $berita->save();
        return redirect('/admin')->with('success','Data berhasil disimpan!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $idpendidik = MasterIdPendidik::where('nip', '=', $id);
        $tmtjabatan = TmtJabatanFungsional::where('nip', '=', $id);
        $tmtpangkat = TmtKepangkatanFungsional::where('nip', '=', $id);
        $dosen = Dosen::where('nip', '=', $id);
        $idpendidik->delete();
        $tmtjabatan->delete();
        $tmtpangkat->delete();
        $dosen->delete();
        
        return redirect()->route('admin-home');
    }
}
