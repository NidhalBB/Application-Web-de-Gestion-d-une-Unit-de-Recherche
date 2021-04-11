@extends('SinglePages.Smembre')
@section('link')
@include('inc.message')
  <div class ="row">
    <div class="col-lg-8">
      <div class="mb-5">
              <h1 >@lang('home.Ajouter Une Publication')</h1>
              <hr>
              <br/>
              {!! Form::open(['action' => ['MembreController@show',$data['equipe']], 'class' => 'contact100-form validate-form', 'method' => 'GET' ]) !!}
              <div class="row form-group">
                     <div class="col-md-6 mb-3 mb-md-0">
                      <label name ="titre"> @lang('home.Titre')</label>
                       {{Form::text('titre', '', ['class' => 'form-control', 'placeholder' => 'Entrer Le Titre'])}}
                     </div>
                       <div class="col-md-6 mb-3 mb-md-0">
                        <label name ="auteur"> @lang('home.Nom du Membre')</label>
                         {{Form::text('auteur', $data['equipe']->name, ['class' => 'form-control', 'placeholder' => 'Entrer Le Nom'])}}
                       </div>
              </div>
              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label name ="auteur"> @lang('home.Nom du Membre')2</label>
                  <input list="auteur" name="auteur2" type="text" id="choix_bieres" class="form-control" style="background: rgb(255, 255, 255)">
                <datalist id="auteur" >
                    @foreach ($data['membre'] as $item)
                    <option >{{$item->name}}</option>
                    @endforeach
                </datalist>
                </div>
                <div class="col-md-6">
                  <label name ="auteur"> @lang('home.Nom du Membre')3</label>
                  <input list="auteur" name="auteur3" type="text" id="choix_bieres" class="form-control" style="background: rgb(255, 255, 255)">
                <datalist id="auteur" >
                    @foreach ($data['membre'] as $item)
                    <option >{{$item->name}}</option>
                    @endforeach
                </datalist>
                </div>
         </div>
         <div class="row form-group">
                <div class="col-md-6">
                  <label name ="auteur"> @lang('home.Nom du Membre')4</label>
                  <input list="auteur" name="auteur4" type="text" id="choix_bieres" class="form-control" style="background: rgb(255, 255, 255)">
                <datalist id="auteur" >
                    @foreach ($data['membre'] as $item)
                    <option >{{$item->name}}</option>
                    @endforeach
                </datalist>
                </div><div class="col-md-6">
                  <label name ="auteur"> @lang('home.Nom du Membre')5</label>
                  <input list="auteur" name="auteur5" type="text" id="choix_bieres" class="form-control" style="background: rgb(255, 255, 255)">
                <datalist id="auteur" >
                    @foreach ($data['membre'] as $item)
                    <option >{{$item->name}}</option>
                    @endforeach
                </datalist>
                </div>
         </div>
         <div class="row form-group">
          <div class="col-md-6 mb-3 mb-md-0">
            <label name ="auteur"> @lang('home.Nom du Membre')6</label>
            <input list="auteur" name="auteur6" type="text" id="choix_bieres" class="form-control" style="background: rgb(255, 255, 255)">
          <datalist id="auteur" >
              @foreach ($data['membre'] as $item)
              <option >{{$item->name}}</option>
              @endforeach
          </datalist>
          </div>
          <div class="col-md-6">
            <label name ="auteur"> @lang('home.Nom du Membre')7</label>
            <input list="auteur" name="auteur7" type="text" id="choix_bieres" class="form-control" style="background: rgb(255, 255, 255)">
          <datalist id="auteur" >
              @foreach ($data['membre'] as $item)
              <option >{{$item->name}}</option>
              @endforeach
          </datalist>
          </div>
   </div>
   <div class="row form-group">
          <div class="col-md-6">
            <label name ="auteur"> @lang('home.Nom du Membre')8</label>
            <input list="auteur" name="auteur8" type="text" id="choix_bieres" class="form-control" style="background: rgb(255, 255, 255)">
          <datalist id="auteur" >
              @foreach ($data['membre'] as $item)
              <option >{{$item->name}}</option>
              @endforeach
          </datalist>
          </div><div class="col-md-6">
            <label name ="auteur"> @lang('home.Nom du Membre')9</label>
            <input list="auteur" name="auteur9" type="text" id="choix_bieres" class="form-control" style="background: rgb(255, 255, 255)">
          <datalist id="auteur" >
              @foreach ($data['membre'] as $item)
              <option >{{$item->name}}</option>
              @endforeach
          </datalist>
          </div>
   </div>
   <div class="row form-group">
    <div class="col-md-6 mb-3 mb-md-0">
      <label name ="auteur"> @lang('home.Nom du Membre')10</label>
      <input list="auteur" name="auteur10" type="text" id="choix_bieres" class="form-control" style="background: rgb(255, 255, 255)">
    <datalist id="auteur" >
        @foreach ($data['membre'] as $item)
        <option >{{$item->name}}</option>
        @endforeach
    </datalist>
    </div>
    <div class="col-md-6">
      <label name ="auteur"> @lang('home.Nom du Membre')11</label>
      <input list="auteur" name="auteur11" type="text" id="choix_bieres" class="form-control" style="background: rgb(255, 255, 255)">
    <datalist id="auteur" >
        @foreach ($data['membre'] as $item)
        <option >{{$item->name}}</option>
        @endforeach
    </datalist>
    </div>
</div>
<div class="row form-group">
    <div class="col-md-6">
      <label name ="auteur"> @lang('home.Nom du Membre')12</label>
      <input list="auteur" name="auteur12" type="text" id="choix_bieres" class="form-control" style="background: rgb(255, 255, 255)">
    <datalist id="auteur" >
        @foreach ($data['membre'] as $item)
        <option >{{$item->name}}</option>
        @endforeach
    </datalist>
    </div><div class="col-md-6">
      <label name ="auteur"> @lang('home.Nom du Membre')13</label>
      <input list="auteur" name="auteur13" type="text" id="choix_bieres" class="form-control" style="background: rgb(255, 255, 255)">
    <datalist id="auteur" >
        @foreach ($data['membre'] as $item)
        <option >{{$item->name}}</option>
        @endforeach
    </datalist>
    </div>
</div>
<div class="row form-group">
  <div class="col-md-6">
    <label name ="auteur"> @lang('home.Nom du Membre')14</label>
    <input list="auteur" name="auteur14" type="text" id="choix_bieres" class="form-control" style="background: rgb(255, 255, 255)">
  <datalist id="auteur" >
      @foreach ($data['membre'] as $item)
      <option >{{$item->name}}</option>
      @endforeach
  </datalist>
  </div><div class="col-md-6">
    <label name ="auteur"> @lang('home.Nom du Membre')15</label>
    <input list="auteur" name="auteur15" type="text" id="choix_bieres" class="form-control" style="background: rgb(255, 255, 255)">
  <datalist id="auteur" >
      @foreach ($data['membre'] as $item)
      <option >{{$item->name}}</option>
      @endforeach
  </datalist>
  </div>
</div>

                 <div class="row form-group">
                     <div class="col-md-6 mb-3 mb-md-0">
                      <label name ="journal"> @lang('home.Journal')</label>
                       {{Form::text('journal', '', ['class' => 'form-control'])}}
                     
                     </div>
                   <div class="col-md-6 mb-3 mb-md-0">
                    <label name ="volume"> @lang('home.Volume')</label>
                     {{Form::text('volume', '', ['class' => 'form-control'])}}
                   
                     </div>
                 </div>

                 <div class="row form-group">
                       <div class="col-md-6 mb-3 mb-md-0">
                        <label name ="date"> @lang('home.Date de Publication')</label>
                         {{Form::date('date', '', ['class' => 'form-control', 'required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}"'])}}
                     </div>

                       <div class="col-md-6 mb-3 mb-md-0">
                        <label name ="page"> @lang('home.Pages')</label>
                         {{Form::number('page', '', ['class' => 'form-control'])}}
                       </div>
                 </div>
                 <div class="col-md-12">
                  <label name ="file" class="form-control"> @lang('home.FICHIER')</label>
                  {{Form::file('file', ['class' => 'form-control'])}}
              </div>
              <div class="row form-group">
                <div class="col-md-6">
                  <label name ="projet"> Projet Relieé 1</label>
                  <input list="projet" name="projet1" type="text" id="choix_bieres" class="form-control" style="background: rgb(255, 255, 255)">
                <datalist id="projet" >
                    @foreach ($data['projet'] as $item)
                    <option >{{$item->TitreProjet}}</option>
                    @endforeach
                </datalist>
                </div><div class="col-md-6">
                  <label name ="projet"> Projet Relieé 2</label>
                  <input list="projet" name="projet2" type="text" id="choix_bieres" class="form-control" style="background: rgb(255, 255, 255)">
                <datalist id="projet" >
                    @foreach ($data['projet'] as $item1)
                    <option >{{$item1->TitreProjet}}</option>
                    @endforeach
                </datalist>
                </div>
            </div>
            <div class="row form-group">
              <div class="col-md-6">
                <label name ="projet"> Projet Relieé 3</label>
                <input list="projet" name="projet3" type="text" id="choix_bieres" class="form-control" style="background: rgb(255, 255, 255)">
              <datalist id="projet" >
                  @foreach ($data['projet'] as $item)
                  <option >{{$item->TitreProjet}}</option>
                  @endforeach
              </datalist>
              </div><div class="col-md-6">
                <label name ="projet"> Projet Relieé 4</label>
                <input list="projet" name="projet4" type="text" id="choix_bieres" class="form-control" style="background: rgb(255, 255, 255)">
              <datalist id="projet" >
                  @foreach ($data['projet'] as $item)
                  <option >{{$item->TitreProjet}}</option>
                  @endforeach
              </datalist>
              </div>
            </div>
                 <div class="row form-group">
                     <div class="col-md-12">
                      <label name ="doi"> @lang('home.Description')</label>
                       {{Form::textarea('doi', '', ['class' => 'form-control', 'placeholder' => 'Entrer La Description...'])}}
                     </div>
                 </div>
                 <div class="row form-group">
                     <div class="col-md-12">
                      <input type="submit" class="btn btn-primary btn-md text-white" value="@lang('home.Ajouter')">
                    </div>
                 </div>
             {!! Form::close() !!}
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
                          </div>
            </div>
          </div>
@endsection