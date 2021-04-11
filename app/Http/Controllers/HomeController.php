<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projet;
use App\Publication;
use App\User;
use App\Lien;
use App\Galerie;
use App\actualite;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $equipe = User::all();
        $Projet = Projet::all()->take(4);
        $Publication = Publication::all()->take(4);
        $membre = DB::table('users')
        ->select('users.*')
        ->where('name', '!=','Admin')
        ->take(4);
        $actualite = actualite::all()->take(4);
        $lien = Lien::all()->take(4);
        $galerie = Galerie::all()->take(4);
         $ProjetN = Projet::all();
        $PublicationN = Publication::all();
        $membreN = DB::table('users')
        ->select('users.*')
        ->where('name', '!=','Admin')
        ->get();
        $actualiteN = actualite::all();
        $lienN = Lien::all();
        $galerieN = Galerie::all();
        $data = array('equipe'=>$equipe , 'galerie' => $galerie ,'lien' => $lien ,'actualite' => $actualite ,'Projet' => $Projet ,'membre' => $membre , 'Publication' => $Publication ,'galerieN' => $galerieN ,'lienN' => $lienN ,'actualiteN' => $actualiteN ,'ProjetN' => $ProjetN ,'membreN' => $membreN , 'PublicationN' => $PublicationN );

        return view('Dashbored.Home.dash')->with('data', $data);
    }
}
