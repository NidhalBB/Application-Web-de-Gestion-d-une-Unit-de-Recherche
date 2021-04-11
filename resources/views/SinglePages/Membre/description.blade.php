@extends('SinglePages.Smembre')
@section('link')
@if(!Auth::guest())
  @if(Auth::user()->id == $data['equipe']->id )
  <div class="row">
    <div class="col-lg-8">
        <div class="mb-5">
          <h1>{{ $data['equipe']->name }}</h1>
          <hr>
          <br/>
            <div class='block__91147 d-flex align-items-center'>
              <figure class='mr-4'><img src="/storage/images/{{$data['equipe']->image}}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;"></figure>
        
              <form enctype="multipart/form-data" action="/profile" method="POST">
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary">
              </form>
            </div> 
            <h2 class="mb-4"> {{$data['equipe']->Poste}}</h2>
            <p>{{$data['equipe']->Description}}</p>    
        </div>
        <hr>
      <br/>
      
      <div class="mb-5">
        <h3 >@lang('home.Projets')</h3>
        <ul class="list-unstyled pl-3 mb-0">
          <table class="table">
            <tbody>
              @foreach ($data['membre'] as $item)
              @if($item->TitreProjet != null)
                <tr>
                    <td><a href="/Sprojet/{{$item->id}}"><strong>{{ Str::limit($item->TitreProjet,35)}}</strong></a></td>
                    <td>{{ Str::limit($item->description, 150) }}</td>
                </tr>
                @else
                <tr> There is No project</tr>
                @endif
                
                @endforeach
            </tbody>
          </table>
        </ul>
      </div>

   <div class="mb-5">
     <h3 >@lang('home.Publications')</h3>
           <ul class="list-unstyled m-0 p-0">
             <table class="table">
               <tbody>
                 @foreach ($data['publication'] as $item)
                  @if($item->titre != null)
                   <tr>
                       <td><strong>{{$item->titre}}</strong></td>
                       <td>{{$item->volume}}</td>
                       <td> 
                        {!!Form::open(['action' => ['PublicationController@destroy', $item->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}</td>
                    <td> 
                        <a href="/editPub/{{$item->id}}" class="btn btn-warning">@lang('home.Modifier')</a></td>
                    <td>  
                   </tr>
                   @else
                   <tr>
                     There is No Publications
                   </tr>
                   @endif
                   @endforeach
               </tbody>
             </table>
           </ul>
     </div>
    
    </div>
    <div class="col-lg-4">
      <div class="bg-light p-3 border rounded mb-4">
        <ul class="list-unstyled pl-3 mb-0">
          <li class="mb-2"><a href="/description/{{$data['equipe']->id}}"> @lang('home.Description')</a></li>
          <li class="mb-2"><a href="/profil/{{$data['equipe']->id}}"> @lang('home.Modifier Les Donneés')</a></li>
          <li class="mb-2"><a href="/ajouteP/{{$data['equipe']->id}}"> @lang('home.Ajouter Publication')</a></li>
        </ul>
      </div>
      <br>
      <h3>  @lang('home.Les  Coordonneés de') </h3>
      <h3>{{$data['equipe']->name}} </h3>
      
      <br>
          <ul class="list-unstyled pl-3 mb-0">
            <table class="table">
              <tbody>
                  <tr>
                      <td><strong>@lang('home.Email')</strong></td>
                      <td>{{$data['equipe']->email}}</td>
                  </tr>
                  <tr>
                      <td><strong>@lang('home.Naissance')</strong></td>
                      <td>{{$data['equipe']->Naissance}}</td>
                  </tr>
                  <tr>
                      <td><strong>@lang('home.Poste')</strong></td>
                      <td>{{$data['equipe']->Poste}}</td>
                  </tr>
                  <tr>
                    <td><strong>@lang('home.Address')</strong></td>
                    <td>{{$data['equipe']->adress}}</td>
                </tr>
                <tr>
                  <td><strong>@lang('home.Téléphone')</strong></td>
                  <td>+216 {{$data['equipe']->tele}}</td>
              </tr>
              </tbody>
          </table>
          </ul>
    </div>
  </div>

    
  
 @else
 <div class="row">
  <div class="col-lg-8">
      <div class="mb-5">
        <h1>{{ $data['equipe']->name }}</h1>
        <hr>
        <br/>
        <div class='block__91147 d-flex align-items-center'>
            <figure class='mr-4'><img src="/storage/images/{{$data['equipe']->image}}" style="width:200px; height:200px; float:left;"></figure>
          </div> 
            <h2 class="mb-4"> {{$data['equipe']->Poste}}</h2>
            <p>{{$data['equipe']->Description}}</p>    
        </div>
        <hr>
        <br/>
              <div class="mb-5">
                <h3 >@lang('home.Projets')</h3>
                <ul class="list-unstyled pl-3 mb-0">
                  <table class="table">
                    <tbody>
                      @foreach ($data['membre'] as $item)
                       @if($item->TitreProjet != null)
                        <tr>
                            <td><a href="/Sprojet/{{$item->id}}"><strong>{{ Str::limit($item->TitreProjet,35)}}</strong></a></td>
                            <td>{{ Str::limit($item->description, 200) }}</td>
                        </tr>
                        @else
                        <tr> There is No Projetc</tr>
                        @endif
                        @endforeach
                    </tbody>
                  </table>
                </ul>
              </div>
          
  <br/>
  <div class="mb-5">
    <h3 >@lang('home.Publications')</h3>
          <ul class="list-unstyled m-0 p-0">
            <table class="table">
              <tbody>
                @foreach ($data['publication'] as $item)
                @if($item->titre != null)
                  <tr>
                      <td><a href="/Spublication/{{$item->id}}"><strong>{{$item->titre}}</strong></a></td>
                      <td>{{$item->volume}}</td>
                  </tr>
                  @else
                  <tr>There is No Publication</tr>
                  @endif
                  @endforeach
              </tbody>
            </table>
          </ul>
    </div>
   
  </div>
      <div class="col-lg-4">
        <h3>@lang('home.Les  Coordonneés de') </h3>
        <h3>{{$data['equipe']->name}} </h3>
        <ul class="list-unstyled pl-3 mb-0">
          <table class="table">
            <tbody>
                <tr>
                    <td><strong>@lang('home.Email')</strong></td>
                    <td>{{$data['equipe']->email}}</td>
                </tr>
                <tr>
                    <td><strong>@lang('home.Naissance')</strong></td>
                    <td>{{$data['equipe']->Naissance}}</td>
                </tr>
                <tr>
                    <td><strong>@lang('home.Poste')</strong></td>
                    <td>{{$data['equipe']->Poste}}</td>
                </tr>
                <tr>
                  <td><strong>@lang('home.Address')</strong></td>
                  <td>{{$data['equipe']->Adress}}</td>
              </tr>
              <tr>
                <td><strong>@lang('home.Téléphone')</strong></td>
                <td>+216 {{$data['equipe']->tel}}</td>
            </tr>
            </tbody>
          </table>
        </ul>
      </div>
  </div>
  @endif
  @else
  <div class="row">
    <div class="col-lg-8">
        <div class="mb-5">
          <h1>{{ $data['equipe']->name }}</h1>
          <hr>
          <br/>
          <div class='block__91147 d-flex align-items-center'>
              <figure class='mr-4'><img src="/storage/images/{{$data['equipe']->image}}" style="width:200px; height:200px; float:left;"></figure>
            </div> 
              <h2 class="mb-4"> {{$data['equipe']->Poste}}</h2>
              <p>{{$data['equipe']->Description}}</p>    
          </div>
          <hr>
          <br/>
        
              <div class="mb-5">
                <h3 >@lang('home.Projets')</h3>
                <ul class="list-unstyled pl-3 mb-0">
                  <table class="table">
                    <tbody>
                      @foreach ($data['membre'] as $item)
                      @if($item->TitreProjet != null)
                        <tr>
                            <td><a href="/Sprojet/{{$item->id}}"><strong>{{ Str::limit($item->TitreProjet,35)}}</strong></a></td>
                            <td>{{ Str::limit($item->description, 200) }}</td>
                        </tr>
                        @else
                        <tr>There is No Project</tr>
                        @endif
                        @endforeach
                    </tbody>
                  </table>
                </ul>
              </div>
        
    <br/>

  <div class="mb-5">
    <h3 >@lang('home.Publications')</h3>
          <ul class="list-unstyled m-0 p-0">
            <table class="table">
              <tbody>
                @foreach ($data['publication'] as $item)
                @if($item->titre != null)
                  <tr>
                      <td><a href="/Spublication/{{$item->id}}"><strong>{{$item->titre}}</strong></a></td>
                      <td>{{$item->volume}}</td>
                  </tr>
                  @else
                  <tr> There is Publication</tr>
                  @endif
                  @endforeach
              </tbody>
            </table>
          </ul>
    </div>
    </div>
        <div class="col-lg-4">
          <h3>@lang('home.Les  Coordonneés de') </h3>
          <h3>{{$data['equipe']->name}} </h3>
          <ul class="list-unstyled pl-3 mb-0">
            <table class="table">
              <tbody>
                  <tr>
                      <td><strong>@lang('home.Email')</strong></td>
                      <td>{{$data['equipe']->email}}</td>
                  </tr>
                  <tr>
                      <td><strong>@lang('home.Naissance')</strong></td>
                      <td>{{$data['equipe']->Naissance}}</td>
                  </tr>
                  <tr>
                      <td><strong>@lang('home.Poste')</strong></td>
                      <td>{{$data['equipe']->Poste}}</td>
                  </tr>
                  <tr>
                    <td><strong>@lang('home.Address')</strong></td>
                    <td>{{$data['equipe']->Adress}}</td>
                </tr>
                <tr>
                  <td><strong>@lang('home.Téléphone')</strong></td>
                  <td>+216 {{$data['equipe']->tel}}</td>
              </tr>
              </tbody>
            </table>
          </ul>
        </div>
  </div>
  @endif
@endsection