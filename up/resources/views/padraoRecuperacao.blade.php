@extends('padraoPreLogin')

@section ('noTitulo','Recuperação - ')

@section ('alturaMinima','234px')

@section('naBarraCentral')
    <div class="divisaoPrimaria">
        <h1 class="titulo">Recuperar Acesso</h1>
        <div class="cardBranco">
            <div class="divisaoEntrada">
                <label class="legenda" for="email">E-mail cadastrado:</label>
                <input class="entradaTexto" type="email" name="email" id="email">
            </div>
            <div class="divisaoControle">
                <button class="botao botaoPrimario" name="acessarConta" value="acessarConta" id="acessarConta">Enviar senha provisória</button>
            </div>
            @yield('noCardBranco')
        </div>
    </div>
@endsection