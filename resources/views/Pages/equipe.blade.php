@extends('layouts.appEP')

@section('content')
<div class="row align-items-center justify-content-center text-center">
    <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
      <div class="row justify-content-center">
        <div class="col-md-8 text-center">
          <h1>@lang('home.Les Chercheurs')</h1>
        </div>
      </div>
    </div>
</div>
@endsection


@section('content1')
<div class="site-section border-bottom" id="team-section">
    <div class="container">
      <div class="row justify-content-center mb-5">
        
      </div>
      <div class="row">
            @if(count($equipe) > 0)
            @foreach ($equipe as $membre)
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
            <div class="person text-center">
                <img src="{{ Storage::url("images/{$membre->image}") }}" alt="Image" class="img-fluid rounded-circle w-50 mb-5">
            <h3><a href="/description/{{$membre->id}}">{{$membre->name}}</a></h3>
                <p class="position text-muted">{{$membre->Poste}}</p>
                <p class="mb-4">{{ Str::limit($membre->Description, 100) }}</p>
                
            </div>
            </div>
            @endforeach
            @else                         
                  <h3>@lang('home.AUCUNE Membre trouvée')</h3>
                       
      @endif
      </div>
    </div>
</div>
  {{$equipe->links()}}
@endsection


