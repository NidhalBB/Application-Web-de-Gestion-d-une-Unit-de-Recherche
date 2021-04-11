@extends('layouts.appEP')
@section('content')
<div class="row align-items-center justify-content-center text-center">
  <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
    <div class="row justify-content-center">
      <div class="col-md-8 text-center">
        <h1>@lang('home.Contact')</h1>
      </div>
    </div>
  </div>
</div>
@endsection

@section('content1')
@include('inc.message')
<div class="row">
  
    <div class="col-lg-6 mb-5 mb-lg-0">
        {!! Form::open(['action' => 'ContactController@store', 'method' => 'POST']) !!}
        
        <div class="row form-group">
          <div class="col-md-12">
            <label name ="fullname"> @lang('home.Nom')</label>
            {{Form::text('NomComplet', '', ['class' => 'form-control', 'placeholder' => 'Entrer Votre Nom Complet'])}}
          </div>
        </div>

        <div class="row form-group">
          
          <div class="col-md-12">
            <label name ="email"> @lang('home.Email')</label>
            {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'example@example.com'])}}
           </div>
        </div>

        <div class="row form-group">
          
          <div class="col-md-12">
            <label name ="sujet"> @lang('home.Sujet')</label>
            {{Form::text('sujet', '', ['class' => 'form-control', 'placeholder' => 'Entrer Votre Sujet'])}}
          </div>
        </div>

        <div class="row form-group">
          <div class="col-md-12">
            <label name ="message"> @lang('home.Message')</label>
            {{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Write your notes or questions here...'])}}
           </div>
        </div>
        
        <div class="row form-group">
          <div class="col-md-12">
            <input type="submit" class="btn btn-primary btn-md text-white" value="@lang('home.Envoyer')">
          </div>
        </div>
        {!! Form::close() !!}
    </div>
    <div class="col-lg-5 ml-auto">
      <div class="p-4 mb-3 bg-white">
        <p class="mb-0 font-weight-bold">@lang('home.Address')</p>
        <p class="mb-4">Route de Sokra km 4 - BP 1175 - 3000 Tunisie.</p>

        <p class="mb-0 font-weight-bold">@lang('home.Adresse électronique')</p>
        <p class="mb-0"> augfp2@gmail.com</p>

      </div>
    </div>
  </div>
@endsection