<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projet;
use App\Publication;
use DB;
use App\User;
use Auth;

class ProjetController extends Controller
{


    public function Sprojet($id)
    {
        $projet =  DB::table('projets')
         ->leftJoin('users', function($join){
             $join->on('projets.name', '=', 'users.name')
             ;})
         ->select('projets.*','users.*')->where('projets.id',$id)
         ->get();
         $Publication = Publication::all();
         $data = array('projet' => $projet,'Publication'=>$Publication);
         
      return view ('SinglePages.Sprojet',array('name' => Auth::user()))->with('data', $data);
     
    
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projet = Projet::OrderBy('TitreProjet', 'desc')->paginate(12);
        return view ('Pages.projet')->with('projet', $projet);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipe = User::all()->Where('name', '!=','Admin');
        return view('Dashbored.Projet.create')->with('equipe',$equipe);
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
            $path = $request->file('Images')->move(public_path('public/images/projet'), $fileNameToStore);
        } else {
            $fileNameToStore = 'default.jpg';
        }
        if($request->hasFile('Images1')){
            // Get filename with the extension
            $filenameWithExt = $request->file('Images1')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('Images1')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore1= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('Images1')->storeAs('public/images/projet', $fileNameToStore1);
            
        } else {
            $fileNameToStore1 = 'default.jpg';
        }
        if($request->hasFile('Images2')){
            // Get filename with the extension
            $filenameWithExt = $request->file('Images2')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('Images2')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore2= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('Images2')->storeAs('public/images/projet', $fileNameToStore2);
            
        } else {
            $fileNameToStore2 = 'default.jpg';
        }
        
        $projet = new Projet;
        $projet->TitreProjet = $request->input('titre');
        $projet->name = $request->input('auteur');
        $projet->description = $request->input('description');
        $projet->referance = $request->input('referance');
        $projet->date = $request->input('date');
        $projet->img1 = $fileNameToStore;
        $projet->img2 = $fileNameToStore1;
        $projet->img3 = $fileNameToStore2;
        $projet->save();

        return redirect('projetDash')->with('success', 'Projet inseree');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $projet = Projet::find($id);
        $equipe = User::Where('name', '!=','Admin')->get();
        $data = array('equipe' =>$equipe ,'projet'=>$projet );
        return view('Dashbored.Projet.UpdateForm')->with('data', $data);
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $projet = Projet::find($id);
        if($request->hasFile('avatar')){
            $filenameWithExt = $request->file('avatar')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('avatar')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('avatar')->storeAs('public/images/projet', $fileNameToStore);
            
            $projet->img1 = $fileNameToStore;
        
        }
        if($request->hasFile('avatar1')){
            $filenameWithExt = $request->file('avatar1')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('avatar1')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore1= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('avatar')->storeAs('public/images/projet', $fileNameToStore1);
            
            $projet->img2 = $fileNameToStore1;
        
        }
        if($request->hasFile('avatar2')){
            $filenameWithExt = $request->file('avatar2')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('avatar2')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore2= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('avatar2')->storeAs('public/images/projet', $fileNameToStore2);
            
            $projet->img3 = $fileNameToStore2;
        
        }
        //Update 
        $projet->TitreProjet = $request->input('titre');
        $projet->name = $request->input('auteur');
        $projet->description = $request->input('description');
        $projet->referance = $request->input('referance');
        $projet->date = $request->input('date');
        $projet->save();

        return redirect()->back()->with('success', 'Projet Updated');
    }
    public function editprojet(Request $request, $id)
    {
        $projet = Projet::find($id);
        if($request->hasFile('avatar')){
            $filenameWithExt = $request->file('avatar')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('avatar')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('avatar')->storeAs('public/images/projet', $fileNameToStore);
            
            $projet->img1 = $fileNameToStore;
        
        }
        if($request->hasFile('avatar1')){
            $filenameWithExt = $request->file('avatar1')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('avatar1')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore1= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('avatar1')->storeAs('public/images/projet', $fileNameToStore1);
            
            $projet->img2 = $fileNameToStore1;
        
        }
        if($request->hasFile('avatar2')){
            $filenameWithExt = $request->file('avatar2')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('avatar2')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore2= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('avatar2')->storeAs('public/images/projet', $fileNameToStore2);
            
            $projet->img3 = $fileNameToStore2;
        
        }
        //Update 
        $projet->TitreProjet = $request->input('titre');
        $projet->name = $request->input('auteur');
        $projet->description = $request->input('description');
        $projet->referance = $request->input('referance');
        $projet->date = $request->input('date');
        $projet->save();

        return redirect('projet')->with('success', 'Projet Updated');
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
        $projet = Projet::OrderBy('id', 'desc')->paginate(8);
        return view('Dashbored.Projet.update')->with('projet', $projet);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $projet = Projet::find($id);
        $projet ->delete();
        return redirect()->back()->with('success', 'Projet deleted');
    }
}
