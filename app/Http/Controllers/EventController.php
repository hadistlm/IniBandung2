<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Timeline;

class EventController extends Controller
{
    //

    public function create()
    {
        //
        return view ('event.form');
    }


    public function store(Request $request)
    {
        $validate =[
          'nama_event' => 'required',
          'lokasi' => 'required'
        ];
        $this->validate($request,$validate);

        $input = $request->all();

        if($request->hasFile('foto'))
        {
        	$filename = $request->file('foto')->getClientOriginalName();
        	echo $filename;
        	$request->file('foto')->storeAs('',$filename);
        	$input['foto'] = $filename;
        }

        
        $status = Timeline::create($input);
        if($status) return redirect('timeline')->with('success','Item Created Successfully');
        else return redirect('timeline')->with('error','Error');
    }

    public function edit($id)
    {
       $data['timeline'] = Timeline::find($id);

        return view('event.form')->with($data);
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
        $validate =[
          'nama_event' => 'required',
          'lokasi' => 'required'
        ];

        $this->validate($request,$validate);

        $input = $request->all();
        $timeline = Timeline::find($id);
        $timeline->update($input);
        return redirect('timeline')->with('success','Item Edited Successfully');
    }

    public function destroy($id)
    {
       $timeline = Timeline::find($id);

      $timeline->delete();
      return redirect('timeline')->with('success','Item Deleted Successfully');
    }
}
