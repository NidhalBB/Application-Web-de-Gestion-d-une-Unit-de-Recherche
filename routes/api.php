<?php

use Illuminate\Http\Request;
use App\actualite;
use App\Publication;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('logout','Auth\LoginController@logout' ,function (){
    return abort(404);
}); 

Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});

//Route::get('/actualite', 'PagesController@actualite')
Route::get('/', 'PagesController@index');

//Contact
Route::resource('contact', 'ContactController');
Route::get('show', 'ContactController@update');

//Actualite
Route::resource('actualite', 'ActualiteController');
Route::get('createA', 'ActualiteController@create');
Route::get('updateA', 'ActualiteController@update');
Route::get('editA/{id}', 'ActualiteController@show');
Route::post('edit/{id}', 'ActualiteController@edit');


//Publication
Route::resource('publication', 'PublicationController');
Route::get('createP', 'PublicationController@create');
Route::get('updateP', 'PublicationController@update');
Route::get('editP/{id}','PublicationController@show');

//Projet
Route::resource('projet', 'ProjetController');
Route::get('createPR', 'ProjetController@create');
Route::get('updatePR', 'ProjetController@update');
Route::get('editPR/{id}','ProjetController@show');

//Galerie
Route::resource('galerie', 'GalerieController');
Route::get('createG', 'GalerieController@create');
Route::get('updateG', 'GalerieController@update');
Route::get('editG/{id}','GalerieController@show');
Route::post('editimage/{id}', 'GalerieController@editimage');

//Lien
Route::resource('lien', 'LienController');
Route::get('createL', 'LienController@create');
Route::get('updateL', 'LienController@update');
Route::get('editL/{id}','LienController@show');

//Membre
Route::resource('equipe', 'MembreController');
Route::get('updateM', 'MembreController@update');
Route::get('membre', 'MembreController@createb');
Route::post('profile', 'MembreController@store');

//singleMembre
Route::get('description/{id}', 'MembreController@description');
Route::get('profil/{id}', 'MembreController@membre');
Route::get('ajouteP/{id}', 'MembreController@ajouteP');
Route::get('ajoutePR/{id}', 'MembreController@ajoutePR');

//dashborad
Route::get('projetDash', 'MembreController@projetDash');

//singleProjet
Route::get('Sprojet/{id}', 'ProjetController@Sprojet');
//singlePublication
Route::get('Spublication/{id}', 'PublicationController@Spublication');

//search
Route::any ( '/searchpublication', function (Request $request) {
    $search = $request->input('search');
    $publications =  DB::table('publications')
        ->select('publications.*')->where('titre','LIKE','%'.$search.'%')
        ->orWhere('name','LIKE','%'.$search.'%')
         ->paginate(10);
         return view ('Pages.publication')->with('publications', $publications);
});

Route::any ( '/searchactualite', function (Request $request) {
    $search = $request->input('search');
    $actualit =  DB::table('actualites')
        ->select('actualites.*')->where('titre','LIKE','%'.$search.'%')
        ->orWhere('NomMembre','LIKE','%'.$search.'%')
         ->paginate(10);
         return view ('Pages.actualite')->with('actualit', $actualit);
});

Route::any ( '/searchlien', function (Request $request) {
    $search = $request->input('search');
    $lien =  DB::table('liens')
        ->select('liens.*')->where('type','LIKE','%'.$search.'%')
        ->orWhere('nameLien','LIKE','%'.$search.'%')
         ->paginate(10);
         return view ('Pages.lien')->with('lien', $lien);
});
Route::any ( '/searchgalerie', function (Request $request) {
    $search = $request->input('search');
    $galerie =  DB::table('galeries')
        ->select('galeries.*')->where('titre','LIKE','%'.$search.'%')
        ->orWhere('image','LIKE','%'.$search.'%')
         ->paginate(10);
         return view ('Pages.galerie')->with('galerie', $galerie);
});
Route::any ( '/searchprojet', function (Request $request) {
    $search = $request->input('search');
    $projet =  DB::table('projets')
        ->select('projets.*')->where('TitreProjet','LIKE','%'.$search.'%')
        ->orWhere('name','LIKE','%'.$search.'%')
        ->orWhere('referance','LIKE','%'.$search.'%')
         ->paginate(10);
         return view ('Pages.projet')->with('projet', $projet);
});


Auth::routes(['verify' => true]);

Route::get('/dash', 'HomeController@index')->name('dash');