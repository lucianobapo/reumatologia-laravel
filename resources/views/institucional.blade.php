@extends('layouts.app')

@section('content')
    <style>

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

        .no-padding {
            padding: 0;
        }
    </style>
<div class="container">

    <div class="row row-margin-bottom">
        <div class="col-md-10 no-padding lib-item" data-category="view">
            <div class="lib-panel">
                <div class="row">
                    <div class="col-md-6">
                        <img class="img-rounded img-responsive" src="/img/content1.jpg">
                    </div>
                    <div class="col-md-6">
                        <div class="lib-row lib-header">
                            <h2>HISTÓRIA</h2>
                            <h3 class="">Há mais de 60 anos representando os reumatologistas de São Paulo</h3>

                            <div class="lib-header-seperator"></div>
                        </div>
                        <div class="lib-row lib-desc">

                            <p>
                                Fundada em 1953, a Sociedade Paulista de Reumatologia (SPR) é uma associação civil científica de direito privado, sem fins lucrativos, que tem como objetivo representar os reumatologistas do Estado de São Paulo.
                            </p>

                            <p>
                                Desde sua criação, a SPR tem atuado ativamente para cumprir seu papel de levar aos profissionais da saúde do Estado de São Paulo e ao público em geral as mais recentes conquistas científicas no campo da Reumatologia.
                            </p>
                            <p>
                                Com sede própria, a SPR é afiliada à Associação Paulista de Medicina e à Sociedade Brasileira de Reumatologia / Associação Médica Brasileira.
                            </p>


                            <p>PRESIDENTES DA SPR</p>

                            <ul>
                                <li>2016-2017 Eduardo Ferreira Borba Neto</li>
                                <li>2014-2015 Dawton Yukito Torigoe</li>
                                <li>2012-2013 Paulo Louzada Junior</li>
                                <li>2010-2011 Luiz Carlos Latorre</li>
                                <li>2008-2009 Jose Carlos Mansur Szajubok</li>
                                <li>2006-2007 Ari Stiel Radu Halpern</li>
                                <li>2004-2005 Manoel Barros Bertolo</li>
                                <li>2002-2003 Jamil Natour</li>
                                <li>2000-2001 Rina Dalva Neubarth Giorgi</li>
                                <li>1998-1999 Jose Roberto Provenza</li>
                                <li>1996-1997 Celio Roberto Goncalves</li>
                                <li>1994-1995 Daniel Feldman Pollak</li>
                                <li>1992-1993 Elda Matilde Hirose</li>
                                <li>1990-1991 Emilia Inoue Sato</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
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
                            <h2>RESPONSABILIDADE SOCIAL</h2>
                            <h3>Transformando vidas</h3>

                            <div class="lib-header-seperator"></div>
                        </div>
                        <div class="lib-row lib-desc">
                            <p>A Sociedade Paulista de Reumatologia acredita que é possível transformar a vida de indivíduos, comunidades e da sociedade em geral, por meio de ações de Responsabilidade Social que contemplem iniciativas voltadas para a saúde e o bem-estar.</p>

                            <p>Este compromisso se traduz em programas como a Ação Reumato, promovida pela SPR e com grande repercussão nos meios de comunicação.</p>

                            <p>A SPR continua participando de diversas atividades voltadas para a Responsabilidade Social, através de seus associados e colaboradores, com a certeza de que saúde é um dos pilares fundamentais para o desenvolvimento do Estado e do País.</p>

                            <p>Com o apoio de voluntários e de patrocinadores, a SPR possui em seu escopo a participação em diversos eventos em todo o Estado de São Paulo, que beneficiam milhares de pessoas, seja por meio da disseminação de informações ou por ações diretas que estreitem o conhecimento e o relacionamento do público com os médicos Reumatologistas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
