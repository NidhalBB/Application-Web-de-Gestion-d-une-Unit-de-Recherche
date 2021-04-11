@extends('Dashbored.Home.home')

 @section('formulaire')
 @include('inc.message')
                <div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">@lang('home.Utilisateurs')</strong>
                    </div>
                    <div class="card-body">
                        @if(count($membre) > 0)
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>@lang('home.Nom du Membre')</th>
                                    <th>@lang('home.Email')</th>
                                    <th>@lang('home.Naissance')</th>
                                    <th>@lang('home.Poste')</th>
                                    <th>@lang('home.Description')</th>
                                    <th>@lang('home.Image')</th>
                                </tr>
                            </thead>
                    
                            @foreach ($membre as $membree)
                            <tbody>
                               
                                <tr>
                               <td>{{$membree->name}}</td>
                               <td> {{$membree->email}}</td> 
                               <td> {{$membree->Naissance}}</td>
                               <td> {{$membree->Poste}}</td>
                               <td> {{ Str::limit($membree->Description, 100) }}</td>
                               <td><img src="storage/images/{{$membree->image}}" width="50" height="50"></td>
                               <td> 
                                {!!Form::open(['action' => ['MembreController@destroy', $membree->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                            {!!Form::close()!!}</td>
                                </tr> 
                            </tbody>
                            @endforeach
                    {{$membre->links()}}
                        @else
                        <tbody>
                        <td>@lang('home.AUCUNE Membre trouvée')</td>
                    </tbody>
                        </table>
                        @endif
            </div>
            </div><!-- .animated -->
            </div><!-- .content -->
 @endsection