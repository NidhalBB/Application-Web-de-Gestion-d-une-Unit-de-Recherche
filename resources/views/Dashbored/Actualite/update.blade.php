@extends('Dashbored.Home.home')

 @section('formulaire')
 @include('inc.message')
                <div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">@lang('home.Actualités')</strong>
                    </div>
                    <div class="card-body">
                        @if(count($actualit) > 0)
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>@lang('home.Titre')</th>
                                    <th>@lang('home.Nom du Membre')</th>
                                    <th>@lang('home.Texte')</th>
                                    <th>@lang('home.Image')</th>
                                    <th>@lang('home.Créé à')</th>
                                </tr>
                            </thead>
                    
                            @foreach ($actualit as $actualite)
                            <tbody>
                               
                                <tr>
                               <td>{{$actualite->titre}}</td>
                               <td> {{$actualite->NomMembre}}</td> 
                               <td> {{ Str::limit($actualite->texte, 100) }}</td>
                               <td><img src="storage/images/{{$actualite->image}}" width="50" height="50"></td>
                               <td> {{$actualite->created_at}}</td>
                               <td> 
                                {!!Form::open(['action' => ['ActualiteController@destroy', $actualite->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Supprimer', ['class' => 'btn btn-danger'])}}
                            {!!Form::close()!!}</td>
                            <td> 
                                <a href="/editA/{{$actualite->id}}" class="btn btn-warning">@lang('home.Modifier')</a></td>
                            <td> 
                                
                                </tr> 
                            </tbody>
                            @endforeach
                    {{$actualit->links()}}
                        @else
                        <tbody>
                        <td>@lang('home.AUCUNE Actualité trouvée')</td>
                    </tbody>
                        </table>
                        @endif
            </div>
            </div><!-- .animated -->
            </div><!-- .content -->
 @endsection