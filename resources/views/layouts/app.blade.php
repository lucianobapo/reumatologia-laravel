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
    <link href="/css/app.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    {{--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">--}}
    {{--<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" rel="stylesheet">--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>--}}

    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}
    {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}

    <!-- Scripts -->
    <script>
        window.Laravel = '{{ json_encode([ 'csrfToken' => csrf_token(), ]) }}';
    </script>
    <style>

        .lib-row {
            padding: 0 20px 0 20px;
        }

        .lib-header-seperator {
            height: 2px;
            width: 26px;
            background-color: #d9d9d9;
            margin: 7px 0 7px 0;
        }

        .circle {

        }

        .circle::before,
        .circle::after {
            position: absolute;
            z-index: -1;
            display: block;
            content: '';
        }
        .circle,
        .circle::before,
        .circle::after {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-transition: all .5s;
            transition: all .5s;
        }

        .circle {
            position: relative;
            z-index: 2;
            background-color: #00d9d9;
            border: 2px solid #00fdfd;
            color: #5c5eae;
            line-height: 50px;
            overflow: hidden;

            margin: 15px;
            display: inline-block;
            padding: 16px;
            text-align: center;
            width: 90px;
            height: 90px;
            border-radius: 50%;
            /*border: 2px solid #00d9d9;*/
        }

        .circle:hover {
            color: #fff;
        }
        .circle::after {
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            -webkit-transform: scale(.5);
            transform: scale(.5);
        }
        .circle:hover::after {
            background: #fff;
            border-radius: 50%;
            -webkit-transform: scale(.9);
            transform: scale(.9);
            border: 2px solid #5c5eae;
        }

        .circle1 {
            opacity: 0.4;
        }

        .circle2 {
            opacity: 0.6;
        }

        .circle3 {
            opacity: 0.8;
        }

        .circle a {
            text-decoration: none;
            color: #1d2087;
        }

        .circle h2 {
            font-size: 60px;
        }

        .circle h2 small {
            color: #1d2087;
        }

        .circle p {
            font-size: 24px;
            line-height: 26px;
        }

        /*=========================
          Icons
         ================= */

        /* footer social icons */
        ul.social-network {
            list-style: none;
            display: inline;
            margin-left:0 !important;
            padding: 0;
        }
        ul.social-network li {
            display: inline;
            margin: 0 5px;
        }


        /* footer social icons */
        .social-network a {
            background-color: #D3D3D3;
        }
        .social-network a.icoRss:hover {
            background-color: #F56505;
        }
        .social-network a.icoFacebook:hover {
            background-color:#3B5998;
        }
        .social-network a.icoTwitter:hover {
            background-color:#33ccff;
        }
        .social-network a.icoGoogle:hover {
            background-color:#BD3518;
        }
        .social-network a.icoVimeo:hover {
            background-color:#0590B8;
        }
        .social-network a.icoLinkedin:hover {
            background-color:#007bb7;
        }
        .social-network a.icoRss:hover i, .social-network a.icoFacebook:hover i, .social-network a.icoTwitter:hover i,
        .social-network a.icoGoogle:hover i, .social-network a.icoVimeo:hover i, .social-network a.icoLinkedin:hover i {
            color:#fff;
        }
        a.socialIcon:hover, .socialHoverClass {
            color:#44BCDD;
        }

        .social-circle li a {
            display:inline-block;
            position:relative;
            margin:0 auto 0 auto;
            -moz-border-radius:50%;
            -webkit-border-radius:50%;
            border-radius:50%;
            text-align:center;
            width: 50px;
            height: 50px;
            font-size:20px;
        }
        .social-circle li i {
            margin:0;
            line-height:50px;
            text-align: center;
        }

        .social-circle li a:hover i, .triggeredHover {
            -moz-transform: rotate(360deg);
            -webkit-transform: rotate(360deg);
            -ms--transform: rotate(360deg);
            transform: rotate(360deg);
            -webkit-transition: all 0.2s;
            -moz-transition: all 0.2s;
            -o-transition: all 0.2s;
            -ms-transition: all 0.2s;
            transition: all 0.2s;
        }
        .social-circle i {
            color: #fff;
            -webkit-transition: all 0.8s;
            -moz-transition: all 0.8s;
            -o-transition: all 0.8s;
            -ms-transition: all 0.8s;
            transition: all 0.8s;
        }

        a {
            /*background-color: #D3D3D3;*/
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
                    <a class="navbar-brand" href="{{ url('/') }}" style="height: 92px">
                        <img src="http://concch.com/reumatologia/wp-content/uploads/2016/09/logo2.png" class="" style="width: 163px">
                    </a>
                </div>


                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        @foreach(app(\ErpNET\Models\v1\Repositories\PageRepositoryEloquent::class)->all() as $item)
                            @if($item->rota=='eventos')
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ $item->nome }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{ route('pages.era') }}">ERA</a></li>
                                        <li><a href="{{ route('pages.forum') }}">Forum de debates</a></li>
                                        <li><a href="{{ route('pages.curso') }}">Curso de Revisão para Reumatologistas</a></li>
                                        <li><a href="{{ route('pages.calendario') }}">Calendário de eventos</a></li>
                                    </ul>
                                </li>

                            @elseif($item->ordem>0)
                                <li class="dropdown"><a href="{{ route('pages.'.$item->rota) }}">{{ $item->nome }}</a></li>
                            @endif
                        @endforeach
                    </ul>


                    @if (Auth::guest())
                        <a class="btn btn-default pull-right" style="border-radius: 2px;margin: 5px;background-color: rgb(221, 221, 221);" href="{{ url('/register') }}">ASSOCIE-SE</a>
                    @endif
                    <a class="btn btn-default pull-right" style="border-radius: 2px;margin: 5px;background-color: rgb(221, 221, 221);"  href="{{ route('pages.membros') }}">Área de Sócios</a>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">



                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            {{--<li><a href="{{ url('/login') }}">Área de Sócios</a></li>--}}
                            {{--<li><a href="{{ url('/register') }}">ASSOCIE-SE</a></li>--}}

                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
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
                    <ul class="social-network social-circle">
                        <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
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
    <script src="/js/app.js"></script>
    {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}

</body>
</html>
