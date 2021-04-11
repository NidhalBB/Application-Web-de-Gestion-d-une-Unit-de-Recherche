<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publication;
use App\Projet;
use DB;
use App\User;
use Auth;
use Carbon\Carbon;

class PublicationController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publications = Publication::OrderBy('date', 'desc')->paginate(12);
        return view ('Pages.publication')->with('publications', $publications);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipe = User::all()->Where('name', '!=','Admin');
        $projet = Projet ::all();
        $data = array('equipe' =>$equipe,'projet'=>$projet );
        return view('Dashbored.Publication.create')->with('data',$data);
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
            'auteur' => 'required',
            'journal' => 'required',
            'volume' => 'required',
            'page' => 'required',
            'date' => 'required',
            'doi' => 'required'
        ]);
        if($request->hasFile('file')){
            // Get filename with the extension
            $filenameWithExt = $request->file('file')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('file')->getClientOriginalExtension();
            // Filename to store
            $file= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('file')->storeAs('public/file', $file);
            
        } 
        $publication = new Publication;
        $publication->titre = $request->input('titre');
        $publication->name = $request->input('auteur');
        $publication->name1 = $request->input('auteur1');
        $publication->name2 = $request->input('auteur2');
        $publication->name3 = $request->input('auteur3');
        $publication->name4 = $request->input('auteur4');
        $publication->name5 = $request->input('auteur5');
        $publication->name6 = $request->input('auteur6');
        $publication->name7 = $request->input('auteur7');
        $publication->name8 = $request->input('auteur8');
        $publication->name9 = $request->input('auteur9');
        $publication->name10 = $request->input('auteur10');
        $publication->name11 = $request->input('auteur11');
        $publication->name12 = $request->input('auteur12');
        $publication->name13 = $request->input('auteur13');
        $publication->name14 = $request->input('auteur14');
        $publication->name15 = $request->input('auteur15');
        $publication->journal = $request->input('journal');
        $publication->volume = $request->input('volume');
        $publication->page = $request->input('page');
        $publication->date = $request->input('date');
        $publication->doi = $request->input('doi');
        $publication->projet1 = $request->input('projet1');
        $publication->projet2 = $request->input('projet2');
        $publication->projet3 = $request->input('projet3');
        $publication->projet4 = $request->input('projet4');
        $publication->file = $file;
        $publication->save();

        return redirect('updateP')->with('success', 'Publication inseree');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Publications = Publication::find($id);
        $equipe = User::Where('name', '!=','Admin')->get();
        $projet = Projet::all();
        $data = array('equipe' =>$equipe ,'Publications'=>$Publications,'projet'=>$projet );
        return view('Dashbored.Publication.UpdateForm')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        
        $publication = Publication::find($id);

        if($request->hasFile('file')){
            // Get filename with the extension
            $filenameWithExt = $request->file('file')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('file')->getClientOriginalExtension();
            // Filename to store
            $file= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('file')->storeAs('public/file', $file);
            $projet->file =$file;
        } 
        $publication->titre = $request->input('titre');
        $publication->name = $request->input('auteur');
        $publication->name1 = $request->input('auteur1');
        $publication->name2 = $request->input('auteur2');
        $publication->name3 = $request->input('auteur3');
        $publication->name4 = $request->input('auteur4');
        $publication->name5 = $request->input('auteur5');
        $publication->name6 = $request->input('auteur6');
        $publication->name7 = $request->input('auteur7');
        $publication->name8 = $request->input('auteur8');
        $publication->name9 = $request->input('auteur9');
        $publication->name10 = $request->input('auteur10');
        $publication->name11 = $request->input('auteur11');
        $publication->name12 = $request->input('auteur12');
        $publication->name13 = $request->input('auteur13');
        $publication->name14 = $request->input('auteur14');
        $publication->name15 = $request->input('auteur15');
        $publication->journal = $request->input('journal');
        $publication->volume = $request->input('volume');
        $publication->page = $request->input('page');
        $publication->date = $request->input('date');
        $publication->doi = $request->input('doi');
        $publication->projet1 = $request->input('projet1');
        $publication->projet2 = $request->input('projet2');
        $publication->projet3 = $request->input('projet3');
        $publication->projet4 = $request->input('projet4');
        $publication->file = $file;
        $publication->save();

        return redirect('updateP')->with('success', 'Publication inseree');
    }

    public function editpub(Request $request, $id)
    {
        
        $publication = Publication::find($id);

        if($request->hasFile('file')){
            // Get filename with the extension
            $filenameWithExt = $request->file('file')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('file')->getClientOriginalExtension();
            // Filename to store
            $file= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('file')->storeAs('public/file', $file);
            $projet->file =$file;
        } 
        $publication->titre = $request->input('titre');
        $publication->name = $request->input('auteur');
        $publication->name1 = $request->input('auteur1');
        $publication->name2 = $request->input('auteur2');
        $publication->name3 = $request->input('auteur3');
        $publication->name4 = $request->input('auteur4');
        $publication->name5 = $request->input('auteur5');
        $publication->name6 = $request->input('auteur6');
        $publication->name7 = $request->input('auteur7');
        $publication->name8 = $request->input('auteur8');
        $publication->name9 = $request->input('auteur9');
        $publication->name10 = $request->input('auteur10');
        $publication->name11 = $request->input('auteur11');
        $publication->name12 = $request->input('auteur12');
        $publication->name13 = $request->input('auteur13');
        $publication->name14 = $request->input('auteur14');
        $publication->name15 = $request->input('auteur15');
        $publication->journal = $request->input('journal');
        $publication->volume = $request->input('volume');
        $publication->page = $request->input('page');
        $publication->date = $request->input('date');
        $publication->doi = $request->input('doi');
        $publication->projet1 = $request->input('projet1');
        $publication->projet2 = $request->input('projet2');
        $publication->projet3 = $request->input('projet3');
        $publication->projet4 = $request->input('projet4');
        $publication->file = $file;
        $publication->save();

        return redirect('publication')->with('success', 'Publication inseree');
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
        $Publications = Publication::OrderBy('titre', 'desc')->paginate(4);
        return view('Dashbored.Publication.update')->with('publication', $Publications);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Publications = Publication::find($id);
        $Publications ->delete();
        return redirect()->back()->with('success', 'Publication deleted');
    }
}
