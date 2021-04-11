@extends('Dashbored.Home.home')

 @section('formulaire')
 @include('inc.message')
	<div class="container-contact100">
		<div class="wrap-contact100">
      <form enctype="multipart/form-data" action="/editimage/{{$galerie->id}}" method="POST">
        <span class="contact100-form-title">
          @lang('home.Modifier Une Image')
            </span>
            <div class="wrap-input100 validate-input bg1 rs1-wrap-input100 " >
              <label name ="titre" class="label-input100"> @lang('home.Titre')</label>
              <input name="titre" class="input100" value= "{{$galerie->titre}}">
            </div>
            <div class="wrap-input100 validate-input bg1 rs1-wrap-input100 " >
              <input type="file" name="avatar">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
             </div>
        <div class="container-contact100-form-btn">
          <input type="submit" class="contact100-form-btn" value="@lang('home.Modifier')">
        </div>
        </form>
      </div>
		</div>
    @endsection