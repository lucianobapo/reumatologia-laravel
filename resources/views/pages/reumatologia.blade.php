
<div class="row" style="margin-bottom: 30px">

    <div class="col-md-4 text-center">
        @if (Auth::guest())
            <a class="btn btn-primary" href="{{ url('/register') }}">ASSOCIE-SE</a>
        @endif

            <a class="btn btn-default" href="{{ route('pages.guideline') }}">Guideline Doenças</a>
            métricas (aplicação da Pfizer) - por enquanto deixar vazio.
            link para revistas
            link para EVENTOS(ERA, Forum de debates, Curso de Revisão para Reumatologistas, Calendário de eventos)
    </div>

    <div class="col-md-4">
    </div>

    <div class="col-md-4">
    </div>
</div>
