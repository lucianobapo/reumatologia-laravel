
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox" style="height: 350px;">
        <div class="item active" style="height: 350px;">
            <img src="/img/slide1.jpg" style="width: 100%">
            {{--<div style="width: 150px; height: 300px; background-image: url(http://localhost:8008/img/slide1.jpg);"></div>--}}

            <div class="carousel-caption">
                <h2>BEM VINDO AO NOVO SITE</h2>
                <h3>Um novo caminho se inicia. Associe-se Agora.</h3>
                @if (Auth::guest())
                    <a class="btn btn-primary" href="{{ url('/register') }}">ASSOCIE-SE</a>
                @endif
                <a class="btn btn-default" href="{{ route('pages.reumatologistas') }}">ENCONTRE UM REUMATOLOGISTA</a>
            </div>
        </div>

        <div class="item" style="height: 350px;">
            <img src="/img/slide2.jpg" style=" width: 100%">
            <div class="carousel-caption">
                <h2>23º ERA 2017</h2>
                <h2>Encontro de Reumatologia Avançada</h2>
            </div>
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="fa fa-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="fa fa-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="row" style="margin-bottom: 30px">
    <div class="col-md-4 text-center">
        <div class="circle circle3">
            <a href="#section_1">
                <img src="/img/s.png" style="width: 40px">
            </a>
        </div>
        <h3><a href="{{ route('pages.socio') }}">SÓCIO</a></h3>
        <h4>Conheça a SPR e nossa história</h4>
    </div>

    <div class="col-md-4 text-center">
        <div class="circle circle3">
            <a href="#section_1">
                <img src="/img/p.png" style="width: 40px">
            </a>
        </div>
        <h3><a href="{{ route('pages.paciente') }}">PACIENTE</a></h3>
        <h4>Mantenha-se informado</h4>
    </div>

    <div class="col-md-4 text-center">
        <div class="circle circle3">
            <a href="#section_1">
                <img src="/img/r.png" style="width: 40px">
            </a>
        </div>
        <h3><a href="{{ route('pages.reumatologia') }}">REUMATOLOGIA</a></h3>
        <h4>Conheça os beneficios de associar-se à SPR  </h4>
    </div>
</div>



<div class="row" style="margin-bottom: 30px">
    <div class="col-md-12" data-category="view">
        <div class="">
            <div class="row">
                <div class="col-md-6">
                    <img class="img-rounded img-responsive" src="/img/content1.jpg">
                </div>
                <div class="col-md-6">
                    <div class="lib-row">
                        <h2>SOBRE A SOCIEDADE PAULISTA DE REUMATOLOGIA</h2>
                        <h3>Muito mais do que uma sociedade</h3>

                        <div class="lib-header-seperator"></div>
                    </div>
                    <div class="lib-row">
                        <p>Desde sua criação, a SPR tem atuado ativamente para cumprir seu papel de levar aos profissionais da saúde do Estado de São Paulo e ao público em geral as mais recentes conquistas científicas no campo da Reumatologia.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 text-center">
        <h2>REUMATOLOGISTAS ASSOCIADOS</h2>
        <h3>Junte-se também à nossa sociedade</h3>
    </div>
</div>
<div class="row" style="margin-bottom: 30px">

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


<div class="row" style="margin-bottom: 30px">
    <div class="col-md-12" data-category="view">
        <div class="lib-panel">
            <div class="row">
                <div class="col-md-6">
                    <img class="img-rounded img-responsive" src="/img/content2.jpg">
                </div>
                <div class="col-md-6">
                    <div class="">
                        <h2>ÁREA EXCLUSIVA PARA MEMBROS ASSOCIADOS</h2>
                        <h3>Tenha acesso a conteúdos exclusivos</h3>

                        <div class="lib-header-seperator"></div>
                    </div>
                    <div class="lib-row">
                        <p>Como associado da SPR, você tem acesso a conteúdos exclusivos.</p>
                        <button type="button" class="btn btn-secondary">Ir para a Área Exclusiva</button>
                        @if (Auth::guest())
                            <a class="btn btn-primary" href="{{ url('/register') }}">ASSOCIE-SE</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
