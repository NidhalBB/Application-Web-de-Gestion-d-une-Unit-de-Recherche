
<!doctype html>
<html lang="en,fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{ asset('vendorsd/bootstrap/css/bootstrap.css') }}">
    <!-- Main CSS-->
        <link rel="stylesheet" href="{{ asset('vendorsd/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assetsd/css/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('cssd/util.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('cssd/main.css') }}">
    <link rel="stylesheet" href="{{ asset('vendorsd/themify-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendorsd/flag-icon-css/css/flag-icon.min.css') }}">
    <!--===============================================================================================-->
    
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<!-- MAIN CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}" /></head>

<body>
<!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a href="/">UGFP2 </a>

            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="/dash"> <i class="menu-icon fa fa-dashboard"></i>@lang('home.Tableau de bord') </a>
                    </li>
                    
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> </i>@lang('home.Actualités')</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="/createA">@lang('home.Ajouter')</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="/updateA">@lang('home.Modifier')</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> </i>@lang('home.Publications')</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="/createP">@lang('home.Ajouter')</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="/updateP">@lang('home.Modifier')</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> </i>@lang('home.Projets')</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="/createPR">@lang('home.Ajouter')</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="/updatePR">@lang('home.Modifier')</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>@lang('home.Utilisateurs')</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-id-badge"></i><a href="/updateM">@lang('home.Liste des utilisateur')</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="/inscritM">INSCRIPTION</a></li>

                        </ul>
                    </li>  
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>@lang('home.Galerie')</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="/createG">@lang('home.Ajouter')</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="/updateG">@lang('home.Modifier')</a></li>
                        </ul>
                    </li> 

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>@lang('home.Liens utiles')</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="/createL">@lang('home.Ajouter')</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="/updateL">@lang('home.Modifier')</a></li>
                        </ul>
                    </li> 
                    
                    <li >
                    <a href="/show">@lang('home.Contact')</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->
    <div id="right-panel" class="right-panel">
      
        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">
                <div class="col-sm-7">
                </div>
                <div class="col-sm-5">
                    
                     <div class="user-area dropdown float-right">
                         
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="/storage/images/{{Auth::user()->image}}" alt="User">
                        </a>
                        
                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="/"> UGFP2</a>
                            <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                              </form>
                        </div>
                    </div>
                    <div class="language-select dropdown" id="language-select">
                        <p>@lang('home.Bonjour') ,  {{ Auth::user()->name }} </p>
                    </div>
                </div>
            </div>

        </header>
    @yield('formulaire')
    
    </div>
    <script src="../vendorsd/jquery/dist/jquery.min.js"></script>
    <script src="../vendorsd/popper.js/dist/umd/popper.min.js"></script>
    <script src="../vendorsd/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../jsd/select.js"></script>
</body>

</html>
