@extends('Dashbored.Home.home')

 @section('formulaire')
	<div class="container-contact100">
		<div class="wrap-contact100">
            {!! Form::open(['action' => ['PublicationController@edit' ,$data['Publications']->id], 'class' => 'contact100-form validate-form', 'method' => 'GET']) !!}
              

            <span class="contact100-form-title">
                @lang('home.Modifier Une Publication')
                </span>

                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="titre" class="label-input100"> @lang('home.Titre')</label>
                    {{Form::text('titre', $data['Publications']->titre, ['class' => 'input100', 'placeholder' => 'Entrer Le Titre'])}}
                </div>
                
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="auteur" class="label-input100"> @lang('home.Nom du Membre')</label>
                    <input list="auteur" type="text" id="choix_bieres" class="input100" style="background: rgb(255, 255, 255)">
                    <datalist id="auteur" name="auteur">
                        @foreach ($data['equipe'] as $item)
                        <option >{{$item->name}}</option>
                        @endforeach 
                        
                    </datalist>
                </div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="auteur" class="label-input100"> @lang('home.Nom du Membre')</label>
                    <input list="auteur" type="text" id="choix_bieres" class="input100" style="background: rgb(255, 255, 255)">
                    <datalist id="auteur" name="auteur1">
                        @foreach ($data['equipe'] as $item)
                        <option >{{$item->name1}}</option>
                        @endforeach 
                        
                    </datalist>
                </div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="auteur" class="label-input100"> @lang('home.Nom du Membre')</label>
                    <input list="auteur" type="text" id="choix_bieres" class="input100" style="background: rgb(255, 255, 255)">
                    <datalist id="auteur" name="auteur2">
                        @foreach ($data['equipe'] as $item)
                        <option >{{$item->name2}}</option>
                        @endforeach 
                        
                    </datalist>
                </div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="auteur" class="label-input100"> @lang('home.Nom du Membre')</label>
                    <input list="auteur" type="text" id="choix_bieres" class="input100" style="background: rgb(255, 255, 255)">
                    <datalist id="auteur" name="auteur3">
                        @foreach ($data['equipe'] as $item)
                        <option >{{$item->name3}}</option>
                        @endforeach 
                        
                    </datalist>
                </div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="auteur" class="label-input100"> @lang('home.Nom du Membre')</label>
                    <input list="auteur" type="text" id="choix_bieres" class="input100" style="background: rgb(255, 255, 255)">
                    <datalist id="auteur" name="auteur4">
                        @foreach ($data['equipe'] as $item)
                        <option >{{$item->name4}}</option>
                        @endforeach 
                        
                    </datalist>
                </div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="auteur" class="label-input100"> @lang('home.Nom du Membre')</label>
                    <input list="auteur" type="text" id="choix_bieres" class="input100" style="background: rgb(255, 255, 255)">
                    <datalist id="auteur" name="auteur5">
                        @foreach ($data['equipe'] as $item)
                        <option >{{$item->name5}}</option>
                        @endforeach 
                        
                    </datalist>
                </div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="auteur" class="label-input100"> @lang('home.Nom du Membre')</label>
                    <input list="auteur" type="text" id="choix_bieres" class="input100" style="background: rgb(255, 255, 255)">
                    <datalist id="auteur" name="auteur6">
                        @foreach ($data['equipe'] as $item)
                        <option >{{$item->name6}}</option>
                        @endforeach 
                        
                    </datalist>
                </div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="auteur" class="label-input100"> @lang('home.Nom du Membre')</label>
                    <input list="auteur" type="text" id="choix_bieres" class="input100" style="background: rgb(255, 255, 255)">
                    <datalist id="auteur" name="auteur7">
                        @foreach ($data['equipe'] as $item)
                        <option >{{$item->name7}}</option>
                        @endforeach 
                        
                    </datalist>
                </div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="auteur" class="label-input100"> @lang('home.Nom du Membre')</label>
                    <input list="auteur" type="text" id="choix_bieres" class="input100" style="background: rgb(255, 255, 255)">
                    <datalist id="auteur" name="auteur8">
                        @foreach ($data['equipe'] as $item)
                        <option >{{$item->name8}}</option>
                        @endforeach 
                        
                    </datalist>
                </div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="auteur" class="label-input100"> @lang('home.Nom du Membre')</label>
                    <input list="auteur" type="text" id="choix_bieres" class="input100" style="background: rgb(255, 255, 255)">
                    <datalist id="auteur" name="auteur9">
                        @foreach ($data['equipe'] as $item)
                        <option >{{$item->name9}}</option>
                        @endforeach 
                        
                    </datalist>
                </div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="auteur" class="label-input100"> @lang('home.Nom du Membre')</label>
                    <input list="auteur" type="text" id="choix_bieres" class="input100" style="background: rgb(255, 255, 255)">
                    <datalist id="auteur" name="auteur10">
                        @foreach ($data['equipe'] as $item)
                        <option >{{$item->name10}}</option>
                        @endforeach 
                        
                    </datalist>
                </div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="auteur" class="label-input100"> @lang('home.Nom du Membre')</label>
                    <input list="auteur" type="text" id="choix_bieres" class="input100" style="background: rgb(255, 255, 255)">
                    <datalist id="auteur" name="auteur11">
                        @foreach ($data['equipe'] as $item)
                        <option >{{$item->name11}}</option>
                        @endforeach 
                        
                    </datalist>
                </div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="auteur" class="label-input100"> @lang('home.Nom du Membre')</label>
                    <input list="auteur" type="text" id="choix_bieres" class="input100" style="background: rgb(255, 255, 255)">
                    <datalist id="auteur" name="auteur12">
                        @foreach ($data['equipe'] as $item)
                        <option >{{$item->name12}}</option>
                        @endforeach 
                        
                    </datalist>
                </div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="auteur" class="label-input100"> @lang('home.Nom du Membre')</label>
                    <input list="auteur" type="text" id="choix_bieres" class="input100" style="background: rgb(255, 255, 255)">
                    <datalist id="auteur" name="auteur13">
                        @foreach ($data['equipe'] as $item)
                        <option >{{$item->name13}}</option>
                        @endforeach 
                        
                    </datalist>
                </div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="auteur" class="label-input100"> @lang('home.Nom du Membre')</label>
                    <input list="auteur" type="text" id="choix_bieres" class="input100" style="background: rgb(255, 255, 255)">
                    <datalist id="auteur" name="auteur14">
                        @foreach ($data['equipe'] as $item)
                        <option >{{$item->name14}}</option>
                        @endforeach 
                    </datalist>
                </div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="auteur" class="label-input100"> @lang('home.Nom du Membre')</label>
                    <input list="auteur" type="text" id="choix_bieres" class="input100" style="background: rgb(255, 255, 255)">
                    <datalist id="auteur" name="auteur15">
                        @foreach ($data['equipe'] as $item)
                        <option >{{$item->name15}}</option>
                        @endforeach 
                        
                    </datalist>
                </div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="journal" class="label-input100"> @lang('home.Journal')</label>
                    {{Form::text('journal', $data['Publications']->journal, ['class' => 'input100', 'placeholder' => 'Entrer Le Journal'])}}
                </div>

                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="volume" class="label-input100"> @lang('home.Volume')</label>
                    {{Form::text('volume', $data['Publications']->volume, ['class' => 'input100', 'placeholder' => 'Entrer Le Volume'])}}
                </div>

                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="page" class="label-input100"> @lang('home.Pages')</label>
                    {{Form::number('page', $data['Publications']->Page, ['class' => 'input100', 'placeholder' => 'Entrer Le Nombre de Page'])}}
                </div>

                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="date" class="label-input100"> @lang('home.Date de Publication')</label>
                    {{Form::date('date', $data['Publications']->date, ['class' => 'input100', 'placeholder' => 'Entrer Le Date', 'required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}"'])}}
                </div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
                    <label name ="file" class="label-input100"> @lang('home.FICHIER')</label>
                    {{Form::file('file')}}
                </div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="projet" class="label-input100"> Projet Relié 1</label>
                    <input list="projet" type="text" id="choix_bieres" class="input100" style="background: rgb(255, 255, 255)">
                    <datalist id="projet" name="projet1">
                        @foreach ($data['projet'] as $item)
                        <option >{{$item->TitreProjet}}</option>
                        @endforeach 
                    </datalist>
                </div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="projet" class="label-input100"> Projet Relié 2</label>
                    <input list="projet" type="text" id="choix_bieres" class="input100" style="background: rgb(255, 255, 255)">
                    <datalist id="projet" name="projet2">
                        @foreach ($data['projet'] as $item)
                        <option >{{$item->TitreProjet}}</option>
                        @endforeach 
                    </datalist>
                </div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="projet" class="label-input100"> Projet Relié 3</label>
                    <input list="projet" type="text" id="choix_bieres" class="input100" style="background: rgb(255, 255, 255)">
                    <datalist id="projet" name="projet3">
                        @foreach ($data['projet'] as $item)
                        <option >{{$item->TitreProjet}}</option>
                        @endforeach 
                    </datalist>
                </div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="projet" class="label-input100"> Projet Relié 4</label>
                    <input list="projet" type="text" id="choix_bieres" class="input100" style="background: rgb(255, 255, 255)">
                    <datalist id="projet" name="projet4">
                        @foreach ($data['projet'] as $item)
                        <option >{{$item->TitreProjet}}</option>
                        @endforeach 
                    </datalist>
                </div>
                <div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Entrer le DOI">
                    <label name ="doi" class="label-input100"> @lang('home.Doi')</label>
                    {{Form::textarea('doi', $data['Publications']->doi, ['class' => 'input100', 'placeholder' => 'Ecrire Votre Description Ici...'])}}
                </div>
                <div class="container-contact100-form-btn">
                    <input type="submit" class="contact100-form-btn" value="@lang('home.Modifier')">
            {!! Form::close() !!}
    </div>
		</div>
    @endsection