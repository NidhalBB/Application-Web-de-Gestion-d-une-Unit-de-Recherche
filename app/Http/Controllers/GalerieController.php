<?php

namespace App\Http\Controllers;
use App\Galerie;
use DB;
use Illuminate\Http\Request;

class GalerieController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galerie = Galerie::OrderBy('id', 'desc')->paginate(10);
        return view ('Pages.Galerie')->with('galerie', $galerie);
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Dashbored.Galerie.create');
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
            'Images' => 'image|mimes:jpeg,png,jpg|max:2048'
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
            $fileNameToStore = 'noimage.jpg';
        }

        $galerie = new Galerie;
        $galerie->titre = $request->input('titre');
        $galerie->image = $fileNameToStore;
        $galerie->save();

        return redirect('updateG')->with('success', 'Image inseree');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $galerie = Galerie::find($id);
        return view('Dashbored.Galerie.UpdateForm')->with('galerie', $galerie);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editimage(Request $request,$id)
    {
        $galerie = Galerie::find($id);
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
            
            $galerie->image = $fileNameToStore;
        
        }
        $galerie->titre = $request->input('titre');
        $galerie->save();
        return redirect('updateG')->with('success', 'Image Updated');
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
        $galerie = Galerie::OrderBy('id', 'desc')->paginate(8);
        return view('Dashbored.Galerie.update')->with('galerie', $galerie);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galerie = Galerie::find($id);
        $galerie ->delete();
        return redirect('updateG')->with('success', 'Image deleted');
    }
}
