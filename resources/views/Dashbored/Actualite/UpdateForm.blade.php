@extends('Dashbored.Home.home')

 @section('formulaire')
 @include('inc.message')
	<div class="container-contact100">
		<div class="wrap-contact100">
            <form enctype="multipart/form-data" class ="contact100-form validate-form" action="/editactualit/{{$actualit->id}}" method="POST">
            <span class="contact100-form-title">
                @lang('home.Modifier Une Actualité')
                </span>

                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="titre" class="label-input100'"> @lang('home.Titre')</label>
                    <input name="titre" class="input100" value= "{{$actualit->titre}}">
                </div>
                
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100 " >
                    <input type="file" name="avatar">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                   </div>

                <div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
                    <label name ="texte" class="label-input100'"> @lang('home.Description')</label>
                    <textarea name="texte" class="input100" >{{$actualit->texte}}</textarea>
                </div>
                
                <div class="container-contact100-form-btn">
                    <input type="submit" class="contact100-form-btn" value="@lang('home.Modifier')">
                </div>
                </form>
    </div>
		</div>
    @endsection