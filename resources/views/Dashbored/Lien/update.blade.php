@extends('Dashbored.Home.home')

 @section('formulaire')
 @include('inc.message')
                <div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">@lang('home.Liens utiles')</strong>
                    </div>
                    <div class="card-body">
                        @if(count($lien) > 0)
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>@lang('home.Type')</th>
                                    <th>@lang('home.Nom')</th>
                                    <th>@lang('home.Lien')</th>
                                    <th>@lang('home.Fichier')</th>
                                    <th>@lang('home.Description')</th>
                                </tr>
                            </thead>
                    
                            @foreach ($lien as $item)
                            <tbody>
                               
                                <tr>
                               <td>{{$item->type}}</td>
                               <td>{{$item->nameLien}}</td>
                               <td> {{$item->lien}}</td>
                               @if(!empty($item->file)) 
                               <td><a href="{{ asset('/storage/file')}}/{{$item->file}}">@lang('home.Ouvrez le PDF')</a></td>
                               @else
                               <td>@lang("home.Il n'y a pas de fichier")</td>
                               @endif
                               <td> {{ Str::limit($item->description, 50) }}</td>
                               <td> 
                                {!!Form::open(['action' => ['LienController@destroy', $item->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                            {!!Form::close()!!}</td>
                            <td> 
                                <a href="/editL/{{$item->id}}" class="btn btn-warning">Update</a></td>
                            <td> 
                                </tr> 
                            </tbody>
                            @endforeach
                    {{$lien->links()}}
                        @else
                        <tbody>
                        <td>@lang("home.Il n'y a pas de fichier")</td>
                    </tbody>
                        </table>
                        @endif
            </div>
            </div><!-- .animated -->
            </div><!-- .content -->
 @endsection