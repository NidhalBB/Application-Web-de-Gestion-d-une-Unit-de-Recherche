@extends('layouts.appEP')

<style>
  .block-47 .block-47-quote {
  margin-left: 40px;
  padding: 30px;
  background: #fff;
  border-radius: 7px;
  position: relative;
  -webkit-box-shadow: 0 2px 30px -2px rgba(0, 0, 0, 0.1);
  box-shadow: 0 2px 30px -2px rgba(0, 0, 0, 0.1); }
  .block-47 .block-47-quote:before {
    content: "";
    border: 1px solid red;
    z-index: 2;
    position: absolute;
    left: -15px;
    border-width: 0 20px 20px 0;
    border-style: solid;
    border-color: transparent #fff transparent transparent; }
  .block-47 .block-47-quote .block-47-quote-author {
    font-size: 14px;
    color: #666666; }
  </style>
@section('content')
<div class="row align-items-center justify-content-center text-center">
  <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
    <div class="row justify-content-center">
      <div class="col-md-8 text-center">
        <h1>@lang('home.Actualités')</h1>
      </div>
    </div>
  </div>
</div>
@endsection
@section('content1')
<div class="row justify-content-center mb-5">
  
</div>
<form action="/searchactualite" method="GET">
  {{ csrf_field() }}
<div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4">
  <div class="input-group">
    <input type="search" placeholder="Quelle est votre recherche ?" aria-describedby="button-addon1" class="form-control border-0 bg-light" name="search">
    <div class="input-group-append">
      <button id="button-addon1" type="submit" class="btn btn-link text-primary"><i class="fa fa-search"></i></button>
    </div>
  </div>
</div>
<div class="site-section ">
  <div class="container">
    <div class="row">
      @if(count($actualit) > 0)
      @foreach ($actualit as $actualite)
      <div class="col-md-6">

        <div class="block-47 d-flex mb-5">
          <div class="block-47-image">
            <img src="storage/images/{{$actualite->image}}" alt="Image placeholder" style="width:100px; height:100px; float:left; border-radius:50%; margin-right:5px;">
          </div>
          <blockquote class="block-47-quote">
            <p>&ldquo;{{ Str::limit($actualite->texte, 100) }}&rdquo;</p>
          </blockquote>
        </div>

    </div>
    @endforeach
    </div>
    
      
      {{$actualit->links()}}
      @else
        <div class="col-lg-6 mb-4">
          <div class='block__87154'>
            <blockquote><p>&ldquo; @lang('home.AUCUNE Actualité trouvée')  &rdquo;</p></blockquote>
            </div>
          </div>

    @endif
    </div>
  </div>
</div>
@endsection


