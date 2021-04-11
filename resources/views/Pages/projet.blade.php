@extends('layouts.appEP')

@section('content')
<div class="row align-items-center justify-content-center text-center">
    <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
      <div class="row justify-content-center">
        <div class="col-md-8 text-center">
          <h1>@lang('home.Projets')</h1>
        </div>
      </div>
    </div>
</div>
@endsection


@section('content1')
<div class="site-section">
  <div class="container">
    <div class="row justify-content-center mb-5">
      
    </div>
  <form action="/searchprojet" method="GET">
    {{ csrf_field() }}
  <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4">
    <div class="input-group">
      <input type="search" placeholder="Quelle est votre recherche ?" aria-describedby="button-addon1" class="form-control border-0 bg-light" name="search">
      <div class="input-group-append">
        <button id="button-addon1" type="submit" class="btn btn-link text-primary"><i class="fa fa-search"></i></button>
      </div>
    </div>
  </div>
  </form>
  
      <div class="row mb-3 align-items-stretch">
        @if(count($projet) > 0)
        @foreach ($projet as $item)
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
          <div class="h-entry">
            <img src="storage/images/projet/{{$item->img1}}"  style="height: 200px;width:100%">
            <div class="h-entry-inner">
              <h2 class="font-size-regular"><a href="/Sprojet/{{$item->id}}">{{ Str::limit($item->TitreProjet, 50) }}</a></h2>
              <div class="meta mb-4">by {{$item->name}}<span class="mx-2">&bullet;</span> May 5th, 2019</div>
              <p>{{ Str::limit($item->description, 100) }}</p>
            </div>
          </div> 
        </div>
        
        @endforeach
        @else
                <div class="col-6 col-md-6 col-lg-4 mb-4 mb-lg-5">
                    <h3> @lang('home.AUCUNE Projet trouvée') </h3>
                </div>
                @endif
      </div>
    </div>
    <div class="col-md-12 text-center ">
      {{$projet->links()}}
</div>
  </div>
@endsection


