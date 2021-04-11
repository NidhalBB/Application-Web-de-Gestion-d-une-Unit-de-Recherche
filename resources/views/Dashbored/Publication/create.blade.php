@extends('Dashbored.Home.home')

 @section('formulaire')
 @include('inc.message')
	<div class="container-contact100">
		<div class="wrap-contact100">
            {!! Form::open(['action' => 'PublicationController@store', 'class' => 'contact100-form validate-form', 'method' => 'POST' , 'enctype' => 'multipart/form-data']) !!}
 
            <span class="contact100-form-title">
                Ajouter Une Publication
                </span>

                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="titre" class="label-input100"> @lang('home.Titre')</label>
                    {{Form::text('titre', '', ['class' => 'input100', 'placeholder' => 'Entrer Le Titre'])}}
                </div>
                
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="auteur" class="label-input100"> @lang('home.Nom du Membre')</label>
                    <input list="auteur" name="auteur" type="text" id="choix_bieres" class="input100" style="background: rgb(255, 255, 255)">
                    <datalist id="auteur" >
                        @foreach ($data['equipe'] as $item)
                        <option >{{$item->name}}</option>
                        @endforeach
                    </datalist>
                </div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="auteur1" class="label-input100"> @lang('home.Nom du Membre')</label>
                    <input list="auteur" name="auteur1" type="text" id="choix_bieres" class="input100" style="background: rgb(255, 255, 255)">
                    <datalist id="auteur" >
                        @foreach ($data['equipe'] as $item)
                        <option >{{$item->name1}}</option>
                        @endforeach
                    </datalist>
                </div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="auteur2" class="label-input100"> @lang('home.Nom du Membre')</label>
                    <input list="auteur" name="auteur2" type="text" id="choix_bieres" class="input100" style="background: rgb(255, 255, 255)">
                    <datalist id="auteur" >
                        @foreach ($data['equipe'] as $item)
                        <option >{{$item->name2}}</option>
                        @endforeach
                    </datalist>
                </div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="auteur3" class="label-input100"> @lang('home.Nom du Membre')</label>
                    <input list="auteur" name="auteur3" type="text" id="choix_bieres" class="input100" style="background: rgb(255, 255, 255)">
                    <datalist id="auteur" >
                        @foreach ($data['equipe'] as $item)
                        <option >{{$item->name3}}</option>
                        @endforeach
                    </datalist>
                </div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="auteur4" class="label-input100"> @lang('home.Nom du Membre')</label>
                    <input list="auteur" name="auteur4" type="text" id="choix_bieres" class="input100" style="background: rgb(255, 255, 255)">
                    <datalist id="auteur" >
                        @foreach ($data['equipe'] as $item)
                        <option >{{$item->name4}}</option>
                        @endforeach
                    </datalist>
                </div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="auteur5" class="label-input100"> @lang('home.Nom du Membre')</label>
                    <input list="auteur" name="auteur5" type="text" id="choix_bieres" class="input100" style="background: rgb(255, 255, 255)">
                    <datalist id="auteur" >
                        @foreach ($data['equipe'] as $item)
                        <option >{{$item->name5}}</option>
                        @endforeach
                    </datalist>
                </div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="auteur6" class="label-input100"> @lang('home.Nom du Membre')</label>
                    <input list="auteur" name="auteur6" type="text" id="choix_bieres" class="input100" style="background: rgb(255, 255, 255)">
                    <datalist id="auteur" >
                        @foreach ($data['equipe'] as $item)
                        <option >{{$item->name6}}</option>
                        @endforeach
                    </datalist>
                </div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="auteur7" class="label-input100"> @lang('home.Nom du Membre')</label>
                    <input list="auteur" name="auteur7" type="text" id="choix_bieres" class="input100" style="background: rgb(255, 255, 255)">
                    <datalist id="auteur" >
                        @foreach ($data['equipe'] as $item)
                        <option >{{$item->name7}}</option>
                        @endforeach
                    </datalist>
                </div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="auteur8" class="label-input100"> @lang('home.Nom du Membre')</label>
                    <input list="auteur" name="auteur8" type="text" id="choix_bieres" class="input100" style="background: rgb(255, 255, 255)">
                    <datalist id="auteur" >
                        @foreach ($data['equipe'] as $item)
                        <option >{{$item->name8}}</option>
                        @endforeach
                    </datalist>
                </div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="auteur9" class="label-input100"> @lang('home.Nom du Membre')</label>
                    <input list="auteur" name="auteur9" type="text" id="choix_bieres" class="input100" style="background: rgb(255, 255, 255)">
                    <datalist id="auteur" >
                        @foreach ($data['equipe'] as $item)
                        <option >{{$item->name9}}</option>
                        @endforeach
                    </datalist>
                </div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="auteur10" class="label-input100"> @lang('home.Nom du Membre')</label>
                    <input list="auteur" name="auteur10" type="text" id="choix_bieres" class="input100" style="background: rgb(255, 255, 255)">
                    <datalist id="auteur" >
                        @foreach ($data['equipe'] as $item)
                        <option >{{$item->name10}}</option>
                        @endforeach
                    </datalist>
                </div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="auteur11" class="label-input100"> @lang('home.Nom du Membre')</label>
                    <input list="auteur" name="auteur11" type="text" id="choix_bieres" class="input100" style="background: rgb(255, 255, 255)">
                    <datalist id="auteur" >
                        @foreach ($data['equipe'] as $item)
                        <option >{{$item->name11}}</option>
                        @endforeach
                    </datalist>
                </div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="auteur12" class="label-input100"> @lang('home.Nom du Membre')</label>
                    <input list="auteur" name="auteur12" type="text" id="choix_bieres" class="input100" style="background: rgb(255, 255, 255)">
                    <datalist id="auteur" >
                        @foreach ($data['equipe'] as $item)
                        <option >{{$item->name12}}</option>
                        @endforeach
                </div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="auteur13" class="label-input100"> @lang('home.Nom du Membre')</label>
                    <input list="auteur" name="auteur13" type="text" id="choix_bieres" class="input100" style="background: rgb(255, 255, 255)">
                    <datalist id="auteur" >
                        @foreach ($data['equipe'] as $item)
                        <option >{{$item->name13}}</option>
                        @endforeach
                    </datalist>
                </div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="auteur14" class="label-input100"> @lang('home.Nom du Membre')</label>
                    <input list="auteur" name="auteur14" type="text" id="choix_bieres" class="input100" style="background: rgb(255, 255, 255)">
                    <datalist id="auteur" >
                        @foreach ($data['equipe'] as $item)
                        <option >{{$item->name14}}</option>
                        @endforeach
                    </datalist>
                </div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="auteur15" class="label-input100"> @lang('home.Nom du Membre')</label>
                    <input list="auteur" name="auteur15" type="text" id="choix_bieres" class="input100" style="background: rgb(255, 255, 255)">
                    <datalist id="auteur" >
                        @foreach ($data['equipe'] as $item)
                        <option >{{$item->name15}}</option>
                        @endforeach
                    </datalist>
                </div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="journal" class="label-input100"> @lang('home.Journal')</label>
                    {{Form::text('journal', '', ['class' => 'input100', 'placeholder' => 'Entrer Le Journal'])}}
                </div>

                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="volume" class="label-input100"> @lang('home.Volume')</label>
                    {{Form::text('volume', '', ['class' => 'input100', 'placeholder' => 'Entrer Le Volume'])}}
                </div>

                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="page" class="label-input100"> @lang('home.Pages')</label>
                    {{Form::number('page', '', ['class' => 'input100', 'placeholder' => 'Entrer Le Nombre de Page'])}}
                </div>

                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="date" class="label-input100"> @lang('home.Date de Publication')</label>
                    {{Form::date('date', '', ['class' => 'input100', 'placeholder' => 'Entrer Le Date', 'required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}"'])}}
                </div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
                    <label name ="file" class="label-input100"> @lang('home.FICHIER')</label>
                    {{Form::file('file')}}
                </div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="projet" class="label-input100"> Projet Relié 1 </label>
                    <input list="projet" name="projet1" type="text" id="choix_bieres" class="input100" style="background: rgb(255, 255, 255)">
                    <datalist id="projet" >
                        @foreach ($data['projet'] as $item)
                        <option >{{$item->TitreProjet}}</option>
                        @endforeach 
                    </datalist>
                </div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="projet" class="label-input100"> Projet Relié 2 </label>
                    <input list="projet" name="projet2" type="text" id="choix_bieres" class="input100" style="background: rgb(255, 255, 255)">
                    <datalist id="projet" >
                        @foreach ($data['projet'] as $item)
                        <option >{{$item->TitreProjet}}</option>
                        @endforeach 
                    </datalist>
                </div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="projet" class="label-input100"> Projet Relié 3 </label>
                    <input list="projet" name="projet3" type="text" id="choix_bieres" class="input100" style="background: rgb(255, 255, 255)">
                    <datalist id="projet" >
                        @foreach ($data['projet'] as $item)
                        <option >{{$item->TitreProjet}}</option>
                        @endforeach 
                    </datalist>
                </div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="projet" class="label-input100"> Projet Relié 4 </label>
                    <input list="projet" name="projet4" type="text" id="choix_bieres" class="input100" style="background: rgb(255, 255, 255)">
                    <datalist id="projet" >
                        @foreach ($data['projet'] as $item)
                        <option >{{$item->TitreProjet}}</option>
                        @endforeach 
                    </datalist>
                </div>
                <div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Entrer le DOI">
                    <label name ="doi" class="label-input100"> @lang('home.Doi')</label>
                    {{Form::textarea('doi', '', ['class' => 'input100', 'placeholder' => 'Ecrire Votre Description Ici...'])}}
                </div>
                <div class="container-contact100-form-btn">
                    <input type="submit" class="contact100-form-btn" value="@lang('home.Ajouter')">
            {!! Form::close() !!}
    </div>
		</div>
    @endsection