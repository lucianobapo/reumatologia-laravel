<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    {{--<link href="/css/app.css" rel="stylesheet">--}}
    {{--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">--}}
    {{--<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" rel="stylesheet">--}}

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <style>

        .lib-panel .lib-row {
            padding: 0 20px 0 20px;
        }

        .lib-panel .lib-row.lib-header .lib-header-seperator {
            height: 2px;
            width: 26px;
            background-color: #d9d9d9;
            margin: 7px 0 7px 0;
        }

    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand img-responsive" href="{{ url('/') }}" style="width: 130px">
                        <img src="/img/logo.png" class="img-responsive">
                    </a>
                </div>


                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">

                        <li class="dropdown"><a href="{{ route('home') }}">INICIO</a></li>
                        <li class="dropdown"><a href="{{ route('institucional') }}">INSTITUCIONAL</a></li>
                        <li class="dropdown"><a href="{{ url('/home') }}">REUMATOLOGISTAS EM SP</a></li>
                        <li class="dropdown"><a href="{{ url('/home') }}">REVISTAS</a></li>
                        <li class="dropdown"><a href="{{ url('/home') }}">GUIDELINE DE DOENÇAS</a></li>
                        <li class="dropdown"><a href="{{ url('/home') }}">EVENTOS</a></li>
                        <li class="dropdown"><a href="{{ url('/home') }}">FORUM</a></li>
                        <li class="dropdown"><a href="{{ url('/home') }}">CONTATO</a></li>

                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            {{--<li><a href="{{ url('/login') }}">Login</a></li>--}}
                            {{--<li><a href="{{ url('/register') }}">Register</a></li>--}}
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                {{--<ul class="dropdown-menu" role="menu">--}}
                                    {{--<li>--}}
                                        {{--<a href="{{ url('/logout') }}"--}}
                                            {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                            {{--Logout--}}
                                        {{--</a>--}}

                                        {{--<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">--}}
                                            {{--{{ csrf_field() }}--}}
                                        {{--</form>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

        <div class="container-fluid well">
            <div class="row row-margin-bottom">
                <div class="col-md-4">
                    <h3>SPR NAS REDES SOCIAIS</h3>
                    <h4>Facebook</h4>
                    <h4>Twitter</h4>
                </div>
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <img src="/img/banner.gif" class="img-responsive img-rounded">
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    {{--<script src="/js/app.js"></script>--}}
    {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>--}}
</body>
</html>
