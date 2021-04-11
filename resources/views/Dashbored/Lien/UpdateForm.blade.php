@extends('Dashbored.Home.home')

 @section('formulaire')
 @include('inc.message')
	<div class="container-contact100">
		<div class="wrap-contact100">
            {!! Form::open(['action' => ['LienController@edit', $lien->id], 'class' => 'contact100-form validate-form', 'method' => 'GET' , 'enctype' => 'multipart/form-data']) !!}

            <span class="contact100-form-title">
                @lang('home.Modifier Un Lien')
            </span>

            <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                <label name ="type" class="label-input100"> @lang('home.Type')</label>
                {{Form::text('type', $lien->type, ['class' => 'input100', 'placeholder' => 'Entrer Le Type'])}}
            </div>
            <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                <label name ="name" class="label-input100"> @lang('home.Nom')</label>
                {{Form::text('name', $lien->nameLien, ['class' => 'input100', 'placeholder' => 'Entrer Le Type'])}}
            </div>

            <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                <label name ="lien" class="label-input100"> @lang('home.Lien')</label>
                {{Form::text('lien', $lien->lien, ['class' => 'input100', 'placeholder' => 'Entrer Le Lien'])}}
            </div>
            
            <div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
                <label name ="description" class="label-input100"> @lang('home.Description')</label>
                {{Form::textarea('description', $lien->description, ['class' => 'input100', 'placeholder' => 'Ecrire Votre Description Ici...'])}}
            </div>
            <div class="container-contact100-form-btn">
                <input type="submit" class="contact100-form-btn" value="@lang('home.Modifier')">
        {!! Form::close() !!}
    </div>
		</div>
    @endsection