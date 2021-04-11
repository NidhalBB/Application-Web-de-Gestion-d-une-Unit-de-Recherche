@extends('layouts.appEP')
@foreach ($data['projet'] as $item)
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
</div>
@endsection

@section('content1')
<div class="row">
  <div class="col-lg-8 blog-content">
    <h2 class="mb-4">{{$item->TitreProjet}}</h2>
    <hr>
    <img src="/storage/images/projet/{{$item->img1}}" alt="Image placeholder" class="img-fluid ">
    <hr>
    {{ $item->description }}</p>
    
 </div>
 <div class="col-lg-4 sidebar pl-lg-5">
  <div class="sidebar-box">
    <img src="/storage/images/{{$item->image}}"  class="img-fluid mb-4 w-50 rounded-circle">
    <h3>{{$item->name}}</h3>
    <p>{{Str::limit($item->Description,100)}}</p>
    <p><a href="/description/{{$item->id}}" class="btn btn-primary btn-sm">@lang('home.Lire la suite')</a></p>
  </div>
</div> 
</div>
<div class="row mb-3 align-items-stretch">
  @if (!empty($item->img2))
  <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
    <div class="h-entry">
      <img src="/storage/images/projet/{{$item->img2}}"  style="height: 200px;width:100%">
    </div> 
  </div>
  @endif
  @if (!empty($item->img3))
  <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
    <div class="h-entry">
      <img src="/storage/images/projet/{{$item->img3}}"  style="height: 200px;width:100%">
    </div> 
  </div>
  @endif
  
</div>
<hr>
    <div class="custom-breadcrumbs mb-0">
      <span class="mb-4">@lang('home.Référence')</span> </a> 
      <span>&bullet;</span>
      <span ><strong>{{$item->referance}}</strong></span>
      <br/>
      <br/>
      <br/>
      <h3> Les Publications Relieé</h3>
      <hr>
      @foreach ($data['Publication'] as $item1)
          @if (($item1->projet1)==($item->TitreProjet) || ($item1->projet2)==($item->TitreProjet) || ($item1->projet3)==($item->TitreProjet) || ($item1->projet4)==($item->TitreProjet))
          <p> {{$item1->name}}&nbsp; ,&nbsp;{{$item1->name1}}&nbsp; @if($item1->name2 != null),&nbsp;{{$item1->name2}}&nbsp;@endif @if($item1->name3 != null),&nbsp;{{$item1->name3}}&nbsp;@endif @if($item1->name4 != null),&nbsp;{{$item1->name4}}@endif
            @if($item1->name5 != null){{$item1->name5}}&nbsp;@endif @if($item1->name6 != null) ,&nbsp;{{$item1->name6}}&nbsp;@endif @if($item1->name7 != null) ,&nbsp;{{$item1->name7}}&nbsp;@endif @if($item1->name8 != null),&nbsp;{{$item1->name8}}&nbsp; @endif @if($item1->name9 != null) ,&nbsp;{{$item1->name9}}&nbsp;@endif 
            @if($item1->name10 != null),&nbsp;{{$item1->name10}}&nbsp;@endif @if($item1->name11 != null),&nbsp;{{$item1->name11}}&nbsp;@endif @if($item1->name12 != null),&nbsp;{{$item1->name12}}&nbsp;@endif @if($item1->name13 != null) ,&nbsp;{{$item1->name13}}&nbsp;@endif @if($item1->name14 != null) ,&nbsp;{{$item1->name14}}&nbsp; @ENDIF @if($item1->name15 != null),&nbsp;{{$item1->name15}}&nbsp;@endif ,&nbsp;{{$item1->titre}}&nbsp; ,&nbsp;{{$item1->volume}}&nbsp; ,&nbsp;{{$item1->journal}} &nbsp; ,&nbsp;{{$item1->page}}&nbsp; ,&nbsp;{{$item1->date}}</p><a href="{{$item1->doi}}"></a>
         
          @endif
      @endforeach
      
    </div>
@endsection
@endforeach

