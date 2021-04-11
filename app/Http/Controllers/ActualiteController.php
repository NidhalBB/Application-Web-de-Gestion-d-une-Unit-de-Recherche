<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\actualite;
use DB;
class ActualiteController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $actualite = actualite::OrderBy('titre', 'desc')->paginate(12);
        return view ('Pages.actualite')->with('actualit', $actualite);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Dashbored.Actualite.create');
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
            'titre' => 'required',
            'texte' => 'required',
            'Images' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);
        
        if($request->hasFile('Images')){
            // Get filename with the extension
            $filenameWithExt = $request->file('Images')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('Images')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('Images')->storeAs('public/images', $fileNameToStore);
            
        } else {
            $fileNameToStore = 'default.jpg';
        }

        $actualite = new actualite;
        $actualite->titre = $request->input('titre');
        $actualite->texte = $request->input('texte');
        $actualite->image = $fileNameToStore;
        $actualite->save();

        return redirect('updateA')->with('success', 'Actualite inseree');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $actualite = actualite::find($id);
        return view('Dashbored.Actualite.UpdateForm')->with('actualit', $actualite);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        
            $actualite = actualite::find($id);
            if($request->hasFile('avatar')){
                $filenameWithExt = $request->file('avatar')->getClientOriginalName();
                // Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                $extension = $request->file('avatar')->getClientOriginalExtension();
                // Filename to store
                $fileNameToStore= $filename.'_'.time().'.'.$extension;
                // Upload Image
                $path = $request->file('avatar')->storeAs('public/images', $fileNameToStore);
                
                $actualite->image = $fileNameToStore;
            
            }
        //Update actualite
        $actualite->titre = $request->input('titre');
        $actualite->texte = $request->input('texte');
        $actualite->save();

        return redirect('updateA')->with('success', 'Actualite Updated');
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
        $actualite = actualite::OrderBy('id', 'desc')->paginate(8);
        return view('Dashbored.Actualite.update')->with('actualit', $actualite);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $actualit = actualite::find($id);
        $actualit ->delete();
        return redirect('updateA')->with('success', 'Actualite deleted');
    }
}
