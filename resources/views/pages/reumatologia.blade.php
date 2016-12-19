
<div class="row" style="margin-bottom: 30px">

    <div class="col-md-12 text-center">
        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
            @if (Auth::guest())
                <a class="btn btn-primary" href="{{ url('/register') }}">ASSOCIE-SE</a>
            @endif
            <a class="btn btn-default" href="{{ route('pages.guideline') }}">Guideline Doenças</a>
            <a class="btn btn-default" href="{{ route('pages.revistas') }}">Revistas</a>

            <div class="btn-group" role="group">
                <button type="button" id="btnGroupDrop1" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Eventos <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <li><a class="dropdown-item" href="{{ route('pages.era') }}">ERA</a></li>
                    <li><a class="dropdown-item" href="{{ route('pages.forum') }}">Forum de debates</a></li>
                    <li><a class="dropdown-item" href="{{ route('pages.curso') }}">Curso de Revisão para Reumatologistas</a></li>
                    <li><a class="dropdown-item" href="{{ route('pages.calendario') }}">Calendário de eventos</a></li>
                </ul>
            </div>
        </div>

           
    </div>

    <div class="col-md-12">
        métricas (aplicação da Pfizer) - por enquanto deixar vazio.
    </div>

    <div class="col-md-4">
    </div>
</div>
