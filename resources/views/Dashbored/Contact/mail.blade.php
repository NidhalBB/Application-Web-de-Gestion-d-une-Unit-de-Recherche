@extends('Dashbored.Home.home')

 @section('formulaire')
 @include('inc.message')
	<div class="container-contact100">
		<div class="wrap-contact100">
            <form enctype="multipart/form-data" class ="contact100-form validate-form" action="/send/{{$contact->id}}" method="GET">
                <span class="contact100-form-title">
                   Contact
                    </span>

                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="titre" class="label-input100'"> @lang('home.Email')</label>
                <input name="titre" class="input100" value= "{{$contact->Email}}">
                </div>

                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
                    <label name ="auteur" class="label-input100'"> @lang('home.Sujet')</label>
                <input name="auteur" class="input100" value= "{{$contact->sujet}}">
                </div>

                <div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
                    <label name ="texte" class="label-input100'"> @lang('home.Description')</label>
                    <textarea name="texte" class="input100" ></textarea>
                </div>
                
                <div class="container-contact100-form-btn">
                    <input type="submit" class="contact100-form-btn" value="Send">
                </div>
                </form>
    </div>
		</div>
    @endsection