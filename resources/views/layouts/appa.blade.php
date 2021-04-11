<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="author" content="Ben Brahim Nidhal">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('/fonts/icomoon/style.css') }}">

  <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/magnific-popup.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/jquery-ui.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap-datepicker.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/fonts/flaticon/font/flaticon.css') }}" />
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700" rel="stylesheet">


<!-- MAIN CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('/css/rangeslider.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('/css/aos.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('../css/style.css') }}" />

<link rel="stylesheet" type="text/css" href="{{ asset('/css/home.css') }}" />


  </head>
  <body>
  
      

    <div class="site-wrap">

      <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>
      
      <header class="site-navbar" role="banner">

        <div class="container">
          <div class="row align-items-center">
            
            <div class="col-11 col-xl-2">
              <h1 class="mb-0 site-logo"><a href="/" class="text-white h2 mb-0"><img src ="{{ asset('/images/logo.png') }}" style="width:80px;height:100px;"></a></h1>
            </div>
            <div class="col-12 col-md-10 d-none d-xl-block">
              <nav class="site-navigation position-relative text-right" role="navigation">
  
                <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                  <li class="{{Request::path()=='/' ? 'active' : '' }}"><a href="/"><span>@lang('home.Accueil')</span></a></li>
                <li class="{{Request::path()=='actualite' ? 'active' : '' }}"><a href="/actualite"><span>@lang('home.Actualités')</span></a></li>
                  <li class="{{Request::path()=='projet' ? 'active' : '' }}"><a href="/projet"><span>@lang('home.Projets')</span></a></li>
                  <li class="{{Request::path()=='equipe' ? 'active' : '' }}"><a href="/equipe"><span>@lang('home.Équipe')</span></a></li>
                  <li class="has-children">
                    <a href="#"><span>Autres</span></a>
                    <ul class="dropdown arrow-top">
                      <li><a href="/publication"><span>@lang('home.Publications')</span></a></li>
                       <li><a href="/galerie">@lang('home.Galerie')</a></li>
                      <li><a href="/lien">@lang('home.Liens utiles')</a></li>
                      <li><a href="/stat">Les Statistiques</a></li>
                    </ul>
                  </li>
                  <li class="{{Request::path()=='contact' ? 'active' : '' }}"><a href="/contact"><span>@lang('home.Contact')</span></a></li>
                  @if(App::isLocale('fr'))
                  <li><a href="{{ url('locale/en') }}" ><img class='logout' src="{{ asset('/images/en.png') }}"></a></li>
                  @else
                  <li><a href="{{ url('locale/fr') }}" ><img class='logout' src="{{ asset('/images/fr.png') }}"></a></li>
                  @endif
                  <li></li>
                  
                  @guest
                  @else
              
              @if(Auth::user()->name == 'Admin')
              <li class="has-children">
                <a href="#"><span>{{Auth::user()->name }}</span></a>
                <ul class="dropdown arrow-top">
                  <li><a href="/dash">@lang('home.Profil')</a></li>
                  <li><a href="{{ route('logout') }}">@lang('home.Logout')</a></li>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                </ul>
              </li>
              @else
              <li class="has-children">
                <a href="#"><span>@lang('home.Bonjour') ,  {{Str::limit( Auth::user()->name, 4) }}</span></a>
                <ul class="dropdown arrow-top">
                  <li><a href="/description/{{ Auth::user()->id }}">@lang('home.Profil')</a></li>
                  <li><a href="{{ route('logout') }}">@lang('home.Logout')</a></li>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                </ul>
              </li>
              @endif
              @endguest
                </ul>
              </nav>
            </div>
  
  
  
            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
  
            </div>
  
          </div>
        </div>
        
      </header>
      
      <div class="site-blocks-cover overlay" style="background-image: url('{{ asset('/images/image_1.jpg') }}');" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
              @yield('content')
            </div>
          </div>
          
        </div>
      <script src="{{ asset('/js/jquery-3.3.1.min.js') }}"></script>
      <script src="{{ asset('/js/jquery-migrate-3.0.1.min.js') }}"></script>
      <script src="{{ asset('/js/jquery-ui.js') }}"></script>
              <script src="{{ asset('/js/popper.min.js') }}"></script>
              <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
              <script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
              <script src="{{ asset('/js/jquery.stellar.min.js') }}"></script>
              <script src="{{ asset('/js/jquery.countdown.min.js') }}"></script>
              <script src="{{ asset('/js/jquery.magnific-popup.min.js') }}"></script>
              <script src="{{ asset('/js/bootstrap-datepicker.min.js') }}"></script>
              <script src="{{ asset('/js/aos.js') }}"></script>
              <script src="{{ asset('/js/rangeslider.min.js') }}"></script>
              <script src="{{ asset('/js/typed.js') }}"></script>
              <script>
                var typed = new Typed('.typed-words', {
                strings: [" Recherche de Génomique Fonctionnelle et Physiologie des Plantes"],
                typeSpeed: 80,
                backSpeed: 80,
                backDelay: 4000,
                startDelay: 1000,
                loop: true,
                showCursor: true
                });
                </script>
              <script src="{{ asset('/js/main.js') }}"></script>
      
      
    </body>
</html>