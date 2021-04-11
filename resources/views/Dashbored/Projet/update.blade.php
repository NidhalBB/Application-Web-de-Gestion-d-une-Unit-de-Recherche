@extends('Dashbored.Home.home')

 @section('formulaire')
 @include('inc.message')
                <div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">@lang('home.Projets')</strong>
                    </div>
                    <div class="card-body">
                        @if(count($projet) > 0)
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>@lang('home.Titre') du Projet</th>
                                    <th>Coordinateur du Projet</th>
                                    <th>@lang('home.Référence')</th>
                                    <th>@lang('home.Date de Projet')</th>
                                    <th>@lang('home.Description')</th>
                                </tr>
                            </thead>
                    
                            @foreach ($projet as $projets)
                            <tbody>
                               
                                <tr>
                               <td>{{ Str::limit($projets->TitreProjet, 30) }}</td>
                               <td> {{$projets->name}}</td> 
                               <td> {{$projets->referance}}</td> 
                               <td> {{$projets->date}}</td> 
                               <td> {{ Str::limit($projets->description, 50) }}</td>
                               
                               <td> 
                                {!!Form::open(['action' => ['ProjetController@destroy', $projets->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Supprimer', ['class' => 'btn btn-danger'])}}
                            {!!Form::close()!!}</td>
                            <td> 
                                <a href="/editPR/{{$projets->id}}" class="btn btn-warning">@lang('home.Modifier')</a></td>
                            <td> 
                                
                                </tr> 
                            </tbody>
                            @endforeach
                    {{$projet->links()}}
                        @else
                        <tbody>
                        <td>@lang('home.AUCUNE Projet trouvée')</td>
                    </tbody>
                        </table>
                        @endif
            </div>
            </div><!-- .animated -->
            </div><!-- .content -->
 @endsection