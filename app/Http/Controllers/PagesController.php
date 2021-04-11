<?php

namespace App\Http\Controllers;
use App\Projet;
use App\Publication;
use App\User;
use App\Lien;
use App\Galerie;
use App\actualite;
use DB;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    
    public function index(){
        return view ('pages.home');
    }

    public function actualite(){
        return view ('pages.actualite');
    }

    public function publication(){
        return view ('pages.publication');
    }

    public function galerie(){
        return view ('pages.galerie');
    }

    public function lien(){
        return view ('pages.lien');
    }
    public function contact(){
        return view ('pages.contact');
    }
    public function projet(){
        return view ('pages.projet');
    }
    public function equipe(){
        return view ('pages.equipe');
    }

public function stat(){
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

        return view ('pages.stat')->with('data', $data);
    }
   
    
}
