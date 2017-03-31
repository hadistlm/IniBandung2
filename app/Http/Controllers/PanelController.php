<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Timeline;
use App\Panel;

class PanelController extends Controller
{
    //
     public function show($id)
    {
        //
        
         $data['result']  =   \App\Timeline::where('id_login',$id)->get();
        return view ('panel.index')->with($data);
    }

   
}
