<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Timeline;

class BerandaController extends Controller
{
    public function index()
    {
    	$data['result']  =   \App\Timeline::take(5)->get();
    	return view('beranda',compact('data'));
    }

}
