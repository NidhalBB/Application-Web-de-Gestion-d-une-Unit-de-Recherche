@extends('layouts.appEP')

@section('content')
<div class="row align-items-center justify-content-center text-center">
  <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
    <div class="row justify-content-center">
      <div class="col-md-8 text-center">
        <h1>{{$data['equipe']->name}}</h1>
        <div class="custom-breadcrumbs">
          <a href="/">@lang('home.Accueil')</a> <span class="mx-2 slash">/</span>
          <a href="/equipe">@lang('home.Équipe')</a><span class="text-white"><strong></strong></span>
      </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('content1')
    @yield('link')
@endsection


