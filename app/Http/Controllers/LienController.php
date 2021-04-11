<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lien;
use DB;
use Response;
class LienController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lien = Lien::OrderBy('type', 'desc')->paginate(12);
        return view ('Pages.lien')->with('lien', $lien);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Dashbored.Lien.create');
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
            'type' => 'required',
            'name' => 'required',
            'description' => 'required'
        ]);
        if($request->hasFile('file')){
            // Get filename with the extension
            $filenameWithExt = $request->file('file')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('file')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('file')->storeAs('public/file', $fileNameToStore);
            
        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        $lien = new Lien;
        $lien->type = $request->input('type');
        $lien->lien = $request->input('lien');
        $lien->nameLien = $request->input('name');
        $lien->file =$fileNameToStore;
        $lien->description  =  $request->input('name');
        $lien->save();

        return redirect('updateL')->with('success', 'Lien inseree');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lien = Lien::find($id);
        return view('Dashbored.Lien.UpdateForm')->with('lien', $lien);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        
        $lien = Lien::find($id);

       
    
        //Update actualite
        $lien->type = $request->input('type');
        $lien->nameLien = $request->input('name');
        $lien->lien = $request->input('lien');
        $lien->description  = $request->input('description');
        $lien->save();

        return redirect('updateL')->with('success', 'Line Updated');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $lien = Lien::OrderBy('id', 'desc')->paginate(8);
        return view('Dashbored.Lien.update')->with('lien', $lien);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lien = Lien::find($id);
        $lien ->delete();
        return redirect('updateL')->with('success', 'Lien deleted');
    }
}
