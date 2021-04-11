@extends('layouts.appEP')

@section('content')
<div class="row align-items-center justify-content-center text-center">
  <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
    <div class="row justify-content-center">
      <div class="col-md-8 text-center">
        <h1>@lang('home.Liens utiles')</h1>
      </div>
    </div>
  </div>
</div>
@endsection
@section('content1')
<div class="row justify-content-center mb-5">
  
</div>
  <form action="/searchlien" method="GET">
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
  <br/>
@if (count($lien) > 0)
<ul class="job-listings mb-5">
@foreach ($lien as $item )
<div class="shadow p-3 mb-5 bg-white rounded">
<li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
    <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
      <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
        <h3>{{$item->nameLien}}</h3>
        <strong>{{ Str::limit($item->description, 100) }}</strong>
      </div>
      @if(!empty($item->file) AND (!empty($item->lien)))
      <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
        <a href="{{ asset('/storage/file')}}/{{$item->file}}">@lang('home.Ouvrez le PDF')</a>
        <a href="{{$item->lien}}"> @lang('home.Lien') </a>
      </div>@else
      @if(!empty($item->lien))
      <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
        <a href="{{$item->lien}}"> @lang('home.Lien') </a>
      </div>
      @else
      <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
        <a href="{{ asset('/storage/file')}}/{{$item->file}}">@lang('home.Ouvrez le PDF')</a>
      </div>
      @endif
      @endif
      <div class="job-listing-meta">
        <span class="badge badge-success">{{$item->type}}</span>
      </div>
    </div>
    
  </li>
</div>
  <br/>

@endforeach
</ul>

@else
<ul class="job-listings mb-5">
  <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
    <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
      <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
        <h3>@lang('home.AUCUNE Liens trouvée')</h3>
      </div>
    </div>
  </li>
</ul>
@endif


<div class="row pagination-wrap">
  <div class="col-md-6 text-center text-md-left mb-4 mb-md-0">
    <span>@lang('home.Montrant') 1-{{ count($lien)}} @lang('home.Des Liens')</span>
  </div>
  <div class="col-md-6 text-center text-md-right">
      {{$lien->links()}}
  </div>
</div>
@endsection