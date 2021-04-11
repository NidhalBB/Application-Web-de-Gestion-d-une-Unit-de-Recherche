@extends('Dashbored.Home.home')

 @section('formulaire')
 @include('inc.message')
                <div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title"> @lang('home.Contact')</strong>
                    </div>
                    <div class="card-body">
                        @if(count($contact) > 0)
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>@lang('home.Nom')</th>
                                    <th>@lang('home.Email')</th>
                                    <th>@lang('home.Sujet')</th>
                                    <th>@lang('home.Description')</th>
                                    <th>@lang('home.Créé à')</th>
                                </tr>
                            </thead>
                    
                            @foreach ($contact as $item)
                            <tbody>
                               
                                <tr>
                               <td>{{$item->Nom}}</td>
                               <td> {{$item->Email}}</td> 
                               <td> {{$item->sujet}}</td> 
                               <td> {{ Str::limit($item->description, 100) }}</td>
                               <td> {{$item->created_at}}</td>
                               
                                </tr> 
                            </tbody>
                            @endforeach
                    {{$contact->links()}}
                        @else
                        <tbody>
                        <td>@lang('home.Aucune Message Trouver')</td>
                    </tbody>
                        </table>
                        @endif
            </div>
            </div><!-- .animated -->
            </div><!-- .content -->
 @endsection