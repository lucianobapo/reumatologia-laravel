@extends('layouts.app')

@section('content')
    <style>
        body {
            padding: 20px;
            font-family: 'Open Sans', sans-serif;
            background-color: #f7f7f7;
        }

        .lib-panel {
            margin-bottom: 20Px;
        }
        .lib-panel img {
            width: 100%;
            background-color: transparent;
        }

        .lib-panel .row,
        .lib-panel .col-md-6 {
            padding: 0;
            /*background-color: #FFFFFF;*/
        }


        .lib-panel .lib-row {
            padding: 0 20px 0 20px;
        }

        .lib-panel .lib-row.lib-header {
            /*background-color: #FFFFFF;*/
            font-size: 20px;
            padding: 10px 20px 0 20px;
        }

        .lib-panel .lib-row.lib-header .lib-header-seperator {
            height: 2px;
            width: 26px;
            background-color: #d9d9d9;
            margin: 7px 0 7px 0;
        }

        .lib-panel .lib-row.lib-desc {
            position: relative;
            height: 100%;
            display: block;
            font-size: 13px;
        }
        .lib-panel .lib-row.lib-desc a{
            position: absolute;
            width: 100%;
            bottom: 10px;
            left: 20px;
        }

        .row-margin-bottom {
            margin-bottom: 20px;
        }

        .box-shadow {
            -webkit-box-shadow: 0 0 10px 0 rgba(0,0,0,.10);
            box-shadow: 0 0 10px 0 rgba(0,0,0,.10);
        }

        .no-padding {
            padding: 0;
        }
    </style>
<div class="container">

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
                        <img class="img-rounded" src="/img/content1.jpg">
                    </div>
                    <div class="col-md-6">
                        <div class="lib-row lib-header">
                            <p><a href="{{  url('/home')  }}">SOBRE A SOCIEDADE PAULISTA DE REUMATOLOGIA</a></p>
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
                        <img class="img-rounded" src="/img/content2.jpg">
                    </div>
                    <div class="col-md-6">
                        <div class="lib-row lib-header">
                            <p><a href="{{  url('/home')  }}">ÁREA EXCLUSIVA PARA MEMBROS ASSOCIADOS</a></p>
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
