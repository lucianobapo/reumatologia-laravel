
<div class="row" style="margin-bottom: 30px">

    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Fale Conosco</div>
            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="mailto:contato@reumatologiasp.gov.br">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
                        <label for="nome" class="col-md-4 control-label">Nome</label>

                        <div class="col-md-6">
                            <input id="nome" type="nome" class="form-control" name="nome"
                                   value="{{ old('nome') }}" required autofocus>

                            @if ($errors->has('nome'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('nome') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('telefone') ? ' has-error' : '' }}">
                        <label for="telefone" class="col-md-4 control-label">Telefone</label>

                        <div class="col-md-6">
                            <input id="telefone" type="telefone" class="form-control" name="telefone"
                                   value="{{ old('telefone') }}" required autofocus>

                            @if ($errors->has('telefone'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('telefone') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">E-Mail</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email"
                                   value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('mensagem') ? ' has-error' : '' }}">
                        <label for="mensagem" class="col-md-4 control-label">Mensagem</label>

                        <div class="col-md-6">
                            <textarea id="mensagem" class="form-control" name="mensagem" required>
                                {{ old('mensagem') }}
                            </textarea>

                            @if ($errors->has('mensagem'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('mensagem') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Enviar Mensagem
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
