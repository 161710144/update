<?php

namespace App\Http\Controllers;

use Session;
use App\Pelamar;
use App\Lowongan;
use App\Lamaran;
use File;
use DB;
use Auth;
use Illuminate\Http\Request;

class LamaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lamaran_pers = DB::table('lamarans')
        ->join('pelamars','pelamars.id','=','lamarans.low_id')
        ->join('lowongans','lowongans.id','=','lamarans.low_id')
        ->select('lamarans.*','pelamars.file_cv','lowongans.nama_low')
        ->where('lowongans.user_id','=', Auth::user()->id)
        ->get();

        $lowongan = Lowongan::with('Perusahaan')->where('pers_id',Auth::user()->id)->get();

        $lamaran_pel = DB::table('lamarans')
        ->join('pelamars','pelamars.id','=','lamarans.low_id')
        ->join('lowongans','lowongans.id','=','lamarans.low_id')
        ->select('lamarans.*','pelamars.file_cv','lowongans.nama_low')
        ->where('pelamars.user_id','=', Auth::user()->id)
        ->get();

        $lamaran_admin = DB::table('lamarans')
        ->join('pelamars','pelamars.id','=','lamarans.low_id')
        ->join('lowongans','lowongans.id','=','lamarans.low_id')
        ->select('lamarans.*','pelamars.file_cv','lowongans.nama_low')
        ->get();

        return view('lamaran.index', compact('lamaran_pers','lamaran_pel','lamaran_admin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $low = Lowongan::all();
        return view('lamaran.create',compact('low'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'telepon' => 'required|',
            'pesan' => 'required|min:25',
            'file_cv' => 'required'
        ]);
        $lar = new Lamaran;
        $lar->telepon = $request->telepon;
        $lar->pesan = $request->pesan;
        $lar->pel_id = $request->file_cv;
        $lar->low_id = $request->low_id;
        $lar->save();

        $id = $request->low_id;

        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$lar->telepon</b>"
        ]);
        return redirect('kirimlamaran/'.$id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lamaran  $lamaran
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lowongan = Lowongan::find($id);
        return view('frontend.detail_lowongan',compact('lowongan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lamaran  $lamaran
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lar = Lamaran::findOrFail($id);
        $low = Lowongan::all();
        $selectedlar = Lamaran::findOrFail($id)->low_id;
         return view('lamaran.edit',compact('lar','low','selectedlar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lamaran  $lamaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->validate($request,[
            'telepon' => 'required|',
            'pesan' => 'required|min:25',
            'pel_id' => 'required|',
            'low_id' => 'required|'
        ]);
        $lar = Lamaran::findOrFail($id);
        $lar->telepon = $request->telepon;
        $lar->pesan = $request->pesan;
        $lar->pel_id = $request->file_cv;
        $lar->low_id = $request->low_id;
        $lar->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$lar->file_cv</b>"
        ]);
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lamaran  $lamaran
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lar = Lamaran::findOrFail($id);
        $lar->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('lamaran.index');
    }
}
