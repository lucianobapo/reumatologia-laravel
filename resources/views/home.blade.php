@extends('layouts.app')

@section('content')
<div class="container">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox" style="height: 300px;">
            <div class="item active" style="height: 300px;">
                <img src="/img/slide1.jpg" style="width: 100%">
                {{--<div style="width: 150px; height: 300px; background-image: url(http://localhost:8008/img/slide1.jpg);"></div>--}}

                <div class="carousel-caption">
                    <h2>Sociedade Paulista de Reumatologia</h2>
                    <h2>BEM VINDO AO NOVO SITE</h2>
                    <h3>Um novo caminho se inicia. Associe-se Agora.</h3>
                    <button type="button" class="btn btn-primary btn-lg">ASSOCIE-SE</button>
                    <button type="button" class="btn btn-default btn-lg">ENCONTRE UM REUMATOLOGISTA</button>
                </div>
            </div>

            <div class="item" style="height: 300px;">
                <img src="/img/slide2.jpg" style=" width: 100%">
                <div class="carousel-caption">
                    <h2>23º ERA 2017</h2>
                    <h2>Encontro de Reumatologia Avançada</h2>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="row">
        <div class="col-md-12 text-center">
            <h1>Sociedade Paulista de Reumatologia</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <p><a href="{{  url('/home')  }}">SÓCIO</a></p>
            <p>Conheça a SPR e nossa história</p>
        </div>

        <div class="col-md-4">
            <p><a href="{{  url('/home')  }}">PACIENTE</a></p>
            <p>Mantenha-se informado</p>
        </div>

        <div class="col-md-4">
            <p><a href="{{  url('/home')  }}">REUMATOLOGIA</a></p>
            <p>Conheça os beneficios de associar-se à SPR  </p>
        </div>
    </div>



    <div class="row row-margin-bottom">
        <div class="col-md-10 no-padding lib-item" data-category="view">
            <div class="lib-panel">
                <div class="row">
                    <div class="col-md-6">
                        <img class="img-rounded img-responsive" src="/img/content1.jpg">
                    </div>
                    <div class="col-md-6">
                        <div class="lib-row lib-header">
                            <p>SOBRE A SOCIEDADE PAULISTA DE REUMATOLOGIA</p>
                            <p>Muito mais do que uma sociedade</p>

                            <div class="lib-header-seperator"></div>
                        </div>
                        <div class="lib-row lib-desc">
                            Desde sua criação, a SPR tem atuado ativamente para cumprir seu papel de levar aos profissionais da saúde do Estado de São Paulo e ao público em geral as mais recentes conquistas científicas no campo da Reumatologia.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 text-center">
            <p>REUMATOLOGISTAS ASSOCIADOS</p>
            <p>Junte-se também à nossa sociedade</p>
        </div>
    </div>
    <div class="row">

        <div class="col-md-4 text-center">
            <img src="/img/doctor.png" class="img-responsive img-rounded">
            <p><a href="{{  url('/home')  }}">Cristiano Cardoso</a></p>
            <p>Reumatologista Especialista</p>
        </div>

        <div class="col-md-4">
        </div>

        <div class="col-md-4">
        </div>
    </div>


    <div class="row row-margin-bottom">
        <div class="col-md-10 no-padding lib-item" data-category="view">
            <div class="lib-panel">
                <div class="row">
                    <div class="col-md-6">
                        <img class="img-rounded img-responsive" src="/img/content2.jpg">
                    </div>
                    <div class="col-md-6">
                        <div class="lib-row lib-header">
                            <p>ÁREA EXCLUSIVA PARA MEMBROS ASSOCIADOS</p>
                            <p>Tenha acesso a conteúdos exclusivos</p>

                            <div class="lib-header-seperator"></div>
                        </div>
                        <div class="lib-row lib-desc">
                            Como associado da SPR, você tem acesso a conteúdos exclusivos.
                            <button type="button" class="btn btn-secondary">Ir para a Área Exclusiva</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
