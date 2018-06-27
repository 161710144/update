<?php

namespace App\Http\Controllers;

use App\Lowongan;
use App\Perusahaan;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
    	$lowongan = Lowongan::where('status',1)->get();
        $perusahaan = Perusahaan::all();
        return view('frontend.index',compact('lowongan','perusahaan'));
    }
    public function detail_lowongan($id)
    {
    	$lowongan = Lowongan::find($id);
        return view('frontend.detail_lowongan',compact('lowongan'));
    }

}
