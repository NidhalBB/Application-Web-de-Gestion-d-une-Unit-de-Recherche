@extends('Dashbored.Home.home')

 @section('formulaire')
 @include('inc.message')
                <div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">@lang('home.Galerie')</strong>
                    </div>
                    <div class="card-body">
                        @if(count($galerie) > 0)
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>@lang('home.Titre')</th>
                                    <th>@lang('home.Image')</th>
                                    <th>@lang('home.Créé à')</th>
                                </tr>
                            </thead>
                    
                            @foreach ($galerie as $img)
                            <tbody>
                               
                                <tr>
                               <td>{{$img->titre}}</td>
                               <td><img src="storage/images/{{$img->image}}" width="50" height="50">
                            </td>
                               <td> {{$img->created_at}}</td>
                               <td> 
                                {!!Form::open(['action' => ['GalerieController@destroy', $img->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                            {!!Form::close()!!}</td>
                            <td> 
                                <a href="/editG/{{$img->id}}" class="btn btn-warning">@lang('home.Modifier')</a></td>
                            <td> 
                                
                                </tr> 
                            </tbody>
                            @endforeach
                    {{$galerie->links()}}
                        @else
                        <tbody>
                        <td>@lang('home.Aucune Image Trouvé')</td>
                    </tbody>
                        </table>
                        @endif
            </div>
            </div><!-- .animated -->
            </div><!-- .content -->
 @endsection