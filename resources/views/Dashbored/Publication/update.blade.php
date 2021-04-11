@extends('Dashbored.Home.home')

 @section('formulaire')
 @include('inc.message')
                <div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">@lang('home.Publications')</strong>
                    </div>
                    <div class="card-body">
                        @if(count($publication) > 0)
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>@lang('home.Titre')</th>
                                    <th>@lang('home.Nom du Membre')1</th>
                                    <th>@lang('home.Journal')</th>
                                    <th>@lang('home.Volume')</th>
                                    <th>@lang('home.Pages')</th>
                                    <th>@lang('home.Date de Publication')</th>
                                    <th>Projet Relieé</th>
                                    <th>@lang('home.Doi')</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                    
                            @foreach ($publication as $publications)
                            <tbody>
                               
                                <tr>
                               <td>{{$publications->titre}}</td>
                               <td> {{$publications->name}}</td>  
                               <td>{{$publications->journal}}</td>
                               <td>{{ Str::limit($publications->volume, 100) }}</td>
                               <td> {{$publications->page}}</td>
                               <td> {{$publications->date}}</td>
                               <td> {{$publications->projet1}}</td> 
                               <td> {{ Str::limit($publications->doi, 100) }}</td>
                               <td> 
                                {!!Form::open(['action' => ['PublicationController@destroy', $publications->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Supprimer', ['class' => 'btn btn-danger'])}}
                            {!!Form::close()!!}</td>
                            <td> 
                                <a href="/editP/{{$publications->id}}" class="btn btn-warning">@lang('home.Modifier')</a></td>
                            <td> 
                                
                                </tr> 
                            </tbody>
                            @endforeach
                            {{$publication->links()}}
                        @else
                        <tbody>
                        <td>@lang('home.AUCUNE Publications trouvée')</td>
                    </tbody>
                    @endif
                    
                        </table>
            </div>
            </div><!-- .animated -->
            </div><!-- .content -->
 @endsection