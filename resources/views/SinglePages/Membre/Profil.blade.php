@extends('SinglePages.Smembre')
@section('link')
  @include('inc.message')
    @if(!Auth::guest())
        @if(Auth::user()->id == $data['equipe']->id )
            <div class ="row">
              <div class="col-lg-8">
                <div class="mb-5">
                  <h1> @lang('home.Completez Vos données')</h1>
                  {!! Form::open(['action' => ['MembreController@edit', $data['equipe']->id], 'class' => 'contact100-form validate-form', 'method' => 'GET' ]) !!}
                    <div class="row form-group">
                        <div class="col-md-6 mb-3 mb-md-0">
                          <label name ="nom"> @lang('home.Nom')</label>
                          {{Form::text('nom', $data['equipe']->name, ['class' => 'form-control', 'placeholder' => 'Entrer Votre Nom'])}}
                        </div>
                        <div class="col-md-6 mb-3 mb-md-0">
                          <label name ="email"> @lang('home.Email')</label>
                          {{Form::text('email', $data['equipe']->email, ['class' => 'form-control', 'placeholder' => 'example@example.com'])}}
                        </div>
                    </div>

                    <div class="row form-group">
                          <div class="col-md-6 mb-3 mb-md-0">
                            <label name ="naissance"> @lang('home.Naissance')</label>
                            {{Form::date('naissance', $data['equipe']->Naissance, ['class' => 'form-control'])}}
                          </div>
                          <div class="col-md-6 mb-3 mb-md-0">
                            <label name ="poste"> @lang('home.Poste')</label>
                            {{Form::tel('poste', $data['equipe']->Poste, ['class' => 'form-control' , 'placeholder' => 'Entrer Votre Poste'])}}
                          </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-md-6 mb-3 mb-md-0">
                        <label name ="adress"> @lang('home.Address')</label>
                        {{Form::text('adress', $data['equipe']->adress, ['class' => 'form-control', 'placeholder' => 'Entrer Votre Adress'])}}
                      </div>
                      <div class="col-md-6 mb-3 mb-md-0">
                        <label name ="phone"> @lang('home.Téléphone')</label>
                        {{Form::number('phone', $data['equipe']->tele, ['class' => 'form-control',])}}
                      </div>
                  </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                          <label name ="description"> @lang('home.Description')</label>
                          {{Form::textarea('description', $data['equipe']->Description, ['class' => 'form-control' , 'placeholder' => 'Entrer Votre Message'])}}
                        </div>
                    </div>
                          <div class="col-md-12">
                            <input type="submit" class="btn btn-primary btn-md text-white" value="@lang('home.Envoyer')">
                          </div>
                        </div>
                        {!! Form::close() !!}
                </div>
            
                        <div class="col-lg-4">
                          <div class="bg-light p-3 border rounded mb-4">
                            <ul class="list-unstyled pl-3 mb-0">
                              <li class="mb-2"><a href="/description/{{$data['equipe']->id}}"> @lang('home.Description')</a></li>
                              <li class="mb-2"><a href="/profil/{{$data['equipe']->id}}"> @lang('home.Modifier Les Donneés')</a></li>
                              <li class="mb-2"><a href="/ajouteP/{{$data['equipe']->id}}"> @lang('home.Ajouter Publication')</a></li>
                            </ul>
                          </div>
                        </div>
                </div>
            </div>
          @endif
      @endif
@endsection