<header class="site-navbar">
  <nav class="navbar navbar-expand-lg ">
    <a class="navbar-brand" href="/">
      <img src="/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
      UGFP2
    </a>
    <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

    <div class="collapse navbar-collapse navbar-dark" id="navbarTogglerDemo02">
      <ul class="navbar-nav mx-auto" >
        <li class="nav-item ">
          <a class="nav-link" href="/">@lang('home.Accueil')</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="/actualite">@lang('home.Actualités')</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="/publication">@lang('home.Publications')</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="/galerie">@lang('home.Galerie')</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarTogglerDemo02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Pages
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarTogglerDemo02">
            <a class="dropdown-item" href="/equipe">@lang('home.Équipe')</a>
            <a class="dropdown-item" href="/projet">@lang('home.Projets')</a>
            <a class="dropdown-item" href="/lien">@lang('home.Liens utiles')</a>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/contact">@lang('home.Contact')</a>
        </li>
        @guest  
        <li class="d-lg-none"><a class="nav-link" href="{{ route('login') }}"> @lang("home.S'identifier")</a></li>
        @if (Route::has('register'))
        <li class="d-lg-none"><a class="nav-link" href="{{ route('register') }}">@lang("home.S'inscrire")</a></li>
        @endif
                
        @else
        @if(Auth::user()->name == 'Admin')
        <li class="d-lg-none"><a class="nav-link" href="/home">@lang('home.Bonjour') ,  {{Str::limit( Auth::user()->name, 6) }} </a></li>
        @else
        <li class="d-lg-none"><a class="nav-link" href="/description/{{ Auth::user()->id }}">@lang('home.Bonjour') ,  {{Str::limit( Auth::user()->name, 2) }}</a></li>
        @endif
        @endguest
        
        <li class="nav-item"><a class="nav-link" href="{{ url('locale/en') }}" ><img class='logout' src="{{ asset('/images/en.png') }}"></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('locale/fr') }}" ><img class='logout' src="{{ asset('/images/fr.png') }}"></a></li>
      </ul>
         
    </div>
          <div class=" navbar-nav ml-auto"  >
                  @guest     
                  <a class="btn btn-outline-white border-width-2 d-none d-lg-inline-block" href="{{ route('login') }}">@lang("home.S'identifier")</a>
                  
                
                  @else
                @if(Auth::user()->name == 'Admin')
                    <a class="btn btn-outline-white border-width-2 d-none d-lg-inline-block" href="/home">@lang('home.Bonjour') ,  {{Str::limit( Auth::user()->name, 6) }} </a>
                    <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                    <img class='logout' src='/images/out.png' width="40px" height="40px">
                    </a>
                @else
                    <a class="btn btn-outline-white border-width-2 d-none d-lg-inline-block" href="/description/{{ Auth::user()->id }}">@lang('home.Bonjour') ,  {{Str::limit( Auth::user()->name, 2) }}</a>
                    <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                    <img class='logout' src="{{ asset('/images/out.png') }}" width="40px" height="40px">
                    </a>
                @endif
                    
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                      </form>
                @endguest
    </div>
  </nav>
  
</header>
      