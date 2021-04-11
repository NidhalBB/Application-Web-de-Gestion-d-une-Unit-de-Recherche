@extends('layouts.appEP')
<link rel="stylesheet" href="{{ asset('vendorsd/font-awesome/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendorsd/themify-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendorsd/flag-icon-css/css/flag-icon.min.css') }}">
   
@section('content')
<div class="row align-items-center justify-content-center text-center">
  <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
    <div class="row justify-content-center">
      <div class="col-md-8 text-center">
        <h1>Statistiques</h1>
      </div>
    </div>
  </div>
</div>
@endsection
@section('content1')
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class=" col-md-6">
            <h1>Les Statistiques de L'UGFP2</h1>
            <br/>
            <center>
            <h1 class="mb-0 site-logo"><a href="/" class="text-white h2 mb-0"><img src ="{{ asset('/images/logo.png') }}" style="width:180px;height:200px;"></a></h1>
            </center>    
        </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-four">
                            <div class="stat-icon dib">
                                <i class="fa fa-users"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-heading"><a href="/equipe"><strong>Les Chercheurs</strong></a></div>
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
                                <div class="stat-text"><a href="/projet"><strong>Les Projets</strong></a></div>
                                <div class="stat-text">@lang('home.Total'):{{count($data['ProjetN'])}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-file text-danger border-danger"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text"><a href="updateP"><strong>Les Publications</strong></a></div>
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
                                <div class="stat-text"><a href="/actualite"><strong>Les Actualités</strong></a></div>
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
                                <div class="stat-text"><a href="/lien"><strong>Les Liens</strong></a></div>
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
                                <div class="stat-text"><a href="/galerie"><strong>@lang('home.Galerie')</strong></a></div>
                                <div class="stat-text">@lang('home.Total'):{{count($data['galerieN'])}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--- row -->
    </div><!-- .animated -->
</div><!-- .content -->
@endsection