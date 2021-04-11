@extends('layouts.appEP')

@section('content')
<div class="row align-items-center justify-content-center text-center">
  <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
    <div class="row justify-content-center">
      <div class="col-md-8 text-center">
        <h1>@lang('home.Galerie')</h1>
      </div>
    </div>
  </div>
</div>
@endsection
@section('content1')
<div class="row justify-content-center mb-5">
 
</div>
<form action="/searchgalerie" method="GET">
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
<section class="site-section" id="work-section">
  <div class="container-fluid">
    @if(count($galerie) > 0)
    <div class="row">
      @foreach ($galerie as $image)
      <div class="col-md-6 col-lg-4">
        <a href="/storage/images/{{$image->image}}" class="media-1" data-fancybox="gallery" >
          <img src="/storage/images/{{$image->image}}" alt="Image" class="img-fluid" style="width:500px; height:400px;">
          <div class="media-1-content">
            <h2 class="text-black"><center>{{$image->titre}} </center></h2>
          </div>
        </a>
      </div>
      @endforeach
    </div>
    @else 
    <div class="row">
    <div class='col-md-6 col-lg-4 item'>
      <h3> @lang('home.Aucune image trouvée')</h3>
      </a>
  </div>
    </div>
  @endif
  {{ $galerie->links() }}
  </div>
</section>
@endsection


