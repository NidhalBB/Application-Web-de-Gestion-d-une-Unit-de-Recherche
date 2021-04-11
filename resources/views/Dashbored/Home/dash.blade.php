@extends('Dashbored.Home.home')

 @section('formulaire')
 <div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>@lang('home.Tableau de bord')</h1>
            </div>
            
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">@lang('home.Tableau de bord')</a></li>
                    <li><a href="#">@lang('home.Les Donneés')</a></li>
                    <li><a href="{{ url('locale/en') }}" ><img class='logout' src="{{ asset('/images/en.png') }}"></a>
                     <li><a href="{{ url('locale/fr') }}" ><img class='logout' src="{{ asset('/images/fr.png') }}"></a></li>
                    
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-four">
                            <div class="stat-icon dib">
                                <i class="fa fa-users"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-heading"><a href="updateM"><strong>@lang('home.Utilisateurs')</strong></a></div>
                                <div class="stat-text">@lang('home.Total'): {{count($data['membreN'])}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text"><a href="updatePR"><strong>@lang('home.Projets')</strong></a></div>
                                <div class="stat-text">@lang('home.Total'):{{count($data['ProjetN'])}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-file text-primary border-primary"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text"><a href="updateP"><strong>@lang('home.Publications')</strong></a></div>
                                <div class="stat-text">@lang('home.Total'):{{count($data['PublicationN'])}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-bar-chart-alt "></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text"><a href="updateA"><strong>@lang('home.Actualités')</strong></a></div>
                                <div class="stat-text">@lang('home.Total'):{{count($data['actualiteN'])}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-link text-danger border-danger"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text"><a href="updateL"><strong>@lang('home.Liens utiles')</strong></a></div>
                                <div class="stat-text">@lang('home.Total'):{{count($data['lienN'])}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-pie-chart text-success border-success"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text"><a href="updateG"><strong>@lang('home.Galerie')</strong></a></div>
                                <div class="stat-text">@lang('home.Total'):{{count($data['galerieN'])}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">@lang('home.Actualités')</strong>
                    </div>
                    <div class="card-body">
                        @if(count($data['actualite']) > 0)
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">@lang('home.Titre')</th>
                                    <th scope="col">@lang('home.Nom du Membre')</th>
                                    <th scope="col">@lang('home.Texte')</th>
                                    <th scope="col">@lang('home.Image')</th>
                                </tr>
                            </thead>
                            @foreach ($data['actualite'] as $item)
                            <tbody>
                                <tr>
                                    <td>{{$item->titre}}</td>
                                    <td>{{$item->NomMembre}}</td>
                                    <td>{{ Str::limit($item->texte, 20) }}</td>
                                    <td><img src="storage/images/{{$item->image}}" width="50" height="50"></td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">@lang('home.Publications')</strong>
                    </div>
                    <div class="card-body">
                        @if(count($data['Publication']) > 0)
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">@lang('home.Titre')</th>
                                    <th scope="col">@lang('home.Nom du Membre')</th>
                                    <th scope="col">@lang('home.Journal')</th>
                                    <th scope="col">@lang('home.Pages')</th>
                                </tr>
                            </thead>
                            @foreach ($data['Publication'] as $item)
                            <tbody>
                                <tr>
                                    <td>{{$item->titre}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->journal}}</td>
                                    <td>{{$item->page}}</td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                        @endif
                    </div>
                </div>
            </div>

            
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">@lang('home.Projets')</strong>
                    </div>
                    <div class="card-body">
                        @if(count($data['Projet']) > 0)
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">@lang('home.Titre')</th>
                                    <th scope="col">@lang('home.Nom du Membre')</th>
                                    <th scope="col">@lang('home.Référence')</th>
                                    <th scope="col">@lang('home.Date de Projet')</th>
                                </tr>
                            </thead>
                            @foreach ($data['Projet'] as $item)
                            <tbody>
                                <tr>
                                    <td>{{$item->TitreProjet}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->referance}}</td>
                                    <td>{{$item->date}}</td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">@lang('home.Galerie')</strong>
                    </div>
                    <div class="card-body">
                        @if(count($data['galerie']) > 0)
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">@lang('home.Titre')</th>
                                    <th scope="col">@lang('home.Image')</th>
                                    <th >@lang('home.Créé à')</th>
                                </tr>
                            </thead>
                            @foreach ($data['galerie'] as $item)
                            <tbody>
                                <tr>
                                    <td>{{$item->titre}}</td>
                                    <td><img src="storage/images/{{$item->image}}" width="50" height="50"></td>
                                    <td>{{$item->created_at}}</td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">@lang('home.Liens utiles')</strong>
                    </div>
                    <div class="card-body">
                        @if(count($data['lien']) > 0)
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>@lang('home.Type')</th>
                                    <th>@lang('home.Nom')</th>
                                    <th>@lang('home.Fichier')</th>
                                    <th>@lang('home.Lien')</th>
                                </tr>
                            </thead>
                            @foreach ($data['lien'] as $item)
                            <tbody>
                                <tr>
                                    <td>{{$item->type}}</td>
                                    <td>{{$item->nameLien}}</td>
                                    @if(!empty($item->file)) 
                                    <td><a href="{{ asset('/storage/file')}}/{{$item->file}}">@lang('home.Ouvrez le PDF')</a></td>
                                    @else
                                    <td>@lang("home.Il n'y a pas de fichier")</td>
                                    @endif                                    
                                    <td>{{$item->lien}}</td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                        @endif
                    </div>
                </div>
            </div>
        </div><!--- row -->
    </div><!-- .animated -->
</div><!-- .content -->
<script src="../jsd/drag.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 @endsection