@extends('padraoPreLogin')

@section ('noTitulo','Acesso - ')

@section('naBarraCentral')
    <div class="divisaoPrimaria">
        <h1 class="titulo">Acessar Conta</h1>
        <div class="cardBranco">
            <div class="divisaoEntrada">
                <label class="legenda" for="email">E-mail:</label>
                <input class="entradaTexto" type="email" name="email" id="email">
            </div>
            <div class="divisaoEntrada">
                <label class="legenda" for="senha">Senha:</label>
                <input class="entradaTexto" type="password" name="senha" id="senha">
            </div>
            <div class="divisaoControle">
                <button class="botao botaoPrimario" name="acessarConta" value="acessarConta" id="acessarConta">Acessar conta</button>
            </div>
            @yield('noCardBranco')
        </div>
    </div>
@endsection