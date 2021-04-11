<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use Image;
use DB;
use App\Projet;
use App\Publication;
use Illuminate\Http\Request;

class MembreController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function description($id)
     {
        $equipe = User::find($id);
         $membre = DB::table('users')
         ->leftJoin('projets', function($join){
             $join->on('projets.name', '=', 'users.name')
             ;})
         ->select('projets.TitreProjet','projets.id','projets.description')->where('users.id',$id)
         ->get();
         $publication =  DB::table('users')
         ->leftJoin('publications', function($join){
            $join->on('publications.name', '=', 'users.name')
            ->orOn('publications.name1', '=', 'users.name')
            ->orOn('publications.name2', '=', 'users.name')
            ->orOn('publications.name3', '=', 'users.name')
            ->orOn('publications.name3', '=', 'users.name')
            ->orOn('publications.name5', '=', 'users.name')
            ;})
         ->select('publications.titre','publications.id','publications.volume')->where('users.id',$id)
         ->get();
         $data = array('equipe' => $equipe ,'membre' => $membre , 'publication' => $publication );
        
         return view('SinglePages.Membre.description',array('name' => Auth::user()))->with('data', $data);
             

            }
            public function inscrit(){
                return view('Dashbored.Membre.create');
            }
    public function membre($id){
        $equipe = User::find($id);
        $data = array('equipe' => $equipe);
        return view('SinglePages.Membre.Profil',array('name' => Auth::user()))->with('data', $data);
    }
    public function ajouteP($id){
        $equipe = User::find($id);
        $membre = User::Where('name', '!=','Admin')->get();
        $projet = Projet::all();
        $data = array('equipe' => $equipe,'membre'=>$membre , 'projet'=> $projet);
        return view('SinglePages.Membre.AjouterPublication')->with('data', $data);
    }
    public function ajoutePR($id){
        $equipe = User::find($id);
        $membre = User::Where('name', '!=','Admin')->get();
        $data = array('equipe' => $equipe,'membre'=>$membre);
        return view('SinglePages.Membre.AjouterProjet')->with('data', $data);
    }
    
    public function showpub($id)
    {
        $equipe = Publication::find($id);
        $membre = User::Where('name', '!=','Admin')->get();
        $projet = Projet::all();
         $data = array('equipe' => $equipe,'membre'=>$membre,'projet'=>$projet);
         
      return view ('SinglePages.Membre.modifierPublication')->with('data', $data);
     
    }
    public function showprojet($id)
    {
        $equipe = Projet::find($id);
        $membre = User::Where('name', '!=','Admin')->get();
         $data = array('equipe' => $equipe,'membre'=>$membre);
         
      return view ('SinglePages.Membre.modifierProjet')->with('data', $data);
     
    }
    public function projetDash(){
        $projet = Projet::OrderBy('id', 'desc')->paginate(8);
        return view('Dashbored.projet.update')->with('projet',$projet);
    }
    public function index()
    {
        $equipe = User::Where('name', '!=','Admin')->paginate(12);
         return view ('Pages.equipe')->with('equipe', $equipe);
    }

    /**SHOW
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createa()
    {
        return view('Dashbored.Membre.create');
    }
     public function createb()
    {return view('SinglePages.Smembre'); }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->id;
        $equipe = User::find($id);
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
    		$user = Auth::user();
    		$user->image = $fileNameToStore;
    		$user->save();
    	}
        $data = array('equipe' => $equipe );
    	return redirect()->back();
    }

    public function NovMembre(Request $request){
        $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'naissance' => 'required',
            'description' => 'required',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $membre = new User;
        $membre->name = $request->input('name');
        $membre->email = $request->input('email');
        $membre->Naissance = $request->input('naissance');
        $membre->Description = $request->input('description');
        $membre->password = $request->input('password');
        $membre->save();
        return redirect('updateM')->with('success', 'Membre Ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $equipe = Auth::user();
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
         $membre = DB::table('users')
         ->leftJoin('projets', function($join){
         $join->on('projets.name', '=', 'users.name')
            ;})
         ->select('projets.TitreProjet','projets.id','projets.description')->where('users.id',$equipe->id)
         ->get();
         $publication =  DB::table('users')
         ->leftJoin('publications', 'users.name', '=', 'publications.name')
         ->select('publications.titre','publications.id','publications.volume')->where('users.id',$equipe->id)
         ->get();
         $data = array('equipe' => $equipe ,'membre' => $membre ,'publication' => $publication);
         return view('SinglePages.Membre.description',array('name' => Auth::user()))->with('data', $data);
         
        
         //view('SinglePages.Membre.description',array('name' => Auth::user()))->with('data', $data);
    
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request , $id)
    {
        
        $equipe = User::find($id);

        $equipe->name = $request->input('nom');
        $equipe->email = $request->input('email');
        $equipe->Naissance = $request->input('naissance');
        $equipe->Poste = $request->input('poste');
        $equipe->adress = $request->input('adress');
        $equipe->tele = $request->input('phone');
        $equipe->Description = $request->input('description');
        $equipe->update();
        $data = array('equipe' => $equipe);
        return view('SinglePages.Membre.Profil',array('name' => Auth::user()))->with('data', $data);
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
        $membre = User::Where('name', '!=','Admin')->paginate(8);
        return view('Dashbored.Membre.update')->with('membre', $membre);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $membre = User::find($id);
        $membre ->delete();
        return redirect()->back()->with('success', 'Membre deleted');
    }
}
