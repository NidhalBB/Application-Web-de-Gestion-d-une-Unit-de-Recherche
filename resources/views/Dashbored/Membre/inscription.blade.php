@extends('Dashbored.Home.home')

 @section('formulaire')
 @include('inc.message')
	<div class="container-contact100">
		<div class="wrap-contact100">
            {!! Form::open(['action' => 'UsersyController@create',  'method' => 'POST','enctype' => 'multipart/form-data']) !!}

            <span class="contact100-form-title">
                @lang('home.Ajouter Un Projet')
                </span>

                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="titre" class="label-input100"> @lang('home.Titre')</label>
                    {{Form::text('titre', '', ['class' => 'input100', 'placeholder' => 'Entrer Le Titre'])}}
                </div>
                
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="auteur" class="label-input100"> Coordinateur du Projet</label>
                    {{Form::text('auteur', '', ['class' => 'input100', 'placeholder' => 'Entrer Le Coordinateur du Projet'])}}
                </div>
           
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="referance" class="label-input100"> @lang('home.Référence')</label>
                    {{Form::text('referance', '', ['class' => 'input100', 'placeholder' => 'Entrer Le Referance'])}}
                </div>

                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="date" class="label-input100">@lang('home.Date de Projet')</label>
                    {{Form::date('date', '', ['class' => 'input100', 'placeholder' => 'Entrer Le Date', 'required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}"'])}}
                </div>
                <div class="wrap-input100 bg1 rs1-wrap-input100">
                    <label name ="image" class="label-input100'"> @lang('home.Image')</label>
                    {{Form::file('Images')}}
                </div>

                <div class="wrap-input100 bg1 rs1-wrap-input100">
                    <label name ="image" class="label-input100'"> @lang('home.Image')</label>
                    {{Form::file('Images1')}}
                </div>
                <div class="wrap-input100 bg1 rs1-wrap-input100">
                    <label name ="image" class="label-input100'"> @lang('home.Image')</label>
                    {{Form::file('Images2')}}
                </div>

                

                <div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Entrer le DOI">
                    <label name ="description" class="label-input100"> @lang('home.Description')</label>
                    {{Form::textarea('description', '', ['class' => 'input100', 'placeholder' => 'Ecrire Votre Description Ici...'])}}
                </div>
                <div class="container-contact100-form-btn">
                    <input type="submit" class="contact100-form-btn" value="@lang('home.Ajouter')">
            {!! Form::close() !!}
    </div>
		</div>
    @endsection