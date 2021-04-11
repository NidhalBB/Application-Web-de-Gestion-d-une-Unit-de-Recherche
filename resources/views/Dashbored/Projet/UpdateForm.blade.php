@extends('Dashbored.Home.home')

 @section('formulaire')
 @include('inc.message')
	<div class="container-contact100">
		<div class="wrap-contact100">
            
            <form enctype="multipart/form-data" class ="contact100-form validate-form" action="/edit/{{$data['projet']->id}}" method="POST">


            <span class="contact100-form-title">
                @lang('home.Modifier Un Projet')
                </span>

                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="titre" class="label-input100"> @lang('home.Titre')</label>
                    {{Form::text('titre', $data['projet']->TitreProjet, ['class' => 'input100', 'placeholder' => 'Entrer Le Titre'])}}
                </div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="auteur" class="label-input100"> Coordinateur du Projet</label>
                    {{Form::text('auteur', $data['projet']->name, ['class' => 'input100', 'placeholder' => 'Entrer Le Coordinateur du Projet'])}}
                </div>

                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="refrance" class="label-input100"> @lang('home.Référence')</label>
                    {{Form::text('referance', $data['projet']->referance, ['class' => 'input100', 'placeholder' => 'Entrer Le Referance'])}}
                </div>

                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="date" class="label-input100">@lang('home.Date de Projet')</label>
                    {{Form::date('date', $data['projet']->date, ['class' => 'input100', 'placeholder' => 'Entrer Le Date', 'required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}"'])}}
                </div>

                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100 " >
                    <input type="file" name="avatar">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                   </div>
                   <div class="wrap-input100 validate-input bg1 rs1-wrap-input100 " >
                    <input type="file" name="avatar1">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                   </div>
                   <div class="wrap-input100 validate-input bg1 rs1-wrap-input100 " >
                    <input type="file" name="avatar2">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                   </div>
                   
                <div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Entrer le DOI">
                    <label name ="description" class="label-input100"> @lang('home.Description')</label>
                    {{Form::textarea('description', $data['projet']->description, ['class' => 'input100', 'placeholder' => 'Ecrire Votre Description Ici...'])}}
                </div>
                <div class="container-contact100-form-btn">
                    <input type="submit" class="contact100-form-btn" value="@lang('home.Modifier')">
            
            <form>
    </div>
		</div>
    @endsection