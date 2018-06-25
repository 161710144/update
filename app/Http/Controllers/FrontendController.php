<?php

namespace App\Http\Controllers;

use App\Lowongan;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
    	$lowongan = Lowongan::all();
        return view('frontend.index',compact('lowongan'));
    }
    public function detail_lowongan($id)
    {
    	$lowongan = Lowongan::find($id);
        return view('frontend.detail_lowongan',compact('lowongan'));
    }

}
