@extends('Dashbored.Home.home')

 @section('formulaire')
 @include('inc.message')
	<div class="container-contact100">
		<div class="wrap-contact100">
            {!! Form::open(['action' => 'GalerieController@store', 'class' => 'contact100-form validate-form', 'method' => 'POST' , 'enctype' => 'multipart/form-data']) !!}

            <span class="contact100-form-title">
                @lang('home.Ajouter Une Image')
                </span>

                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="titre" class="label-input100"> @lang('home.Titre')</label>
                    {{Form::text('titre', '', ['class' => 'input100', 'placeholder' => 'Entrer Le Titre'])}}
                </div>

                <div class="wrap-input100 bg1 rs1-wrap-input100">
                    <label name ="image" class="label-input100"> @lang('home.Image')</label>
                    {{Form::file('Images')}}
                </div>
                <div class="container-contact100-form-btn">
                    <input type="submit" class="contact100-form-btn" value="@lang('home.Ajouter')">
            {!! Form::close() !!}
    </div>
		</div>
    @endsection