@extends('padraoPosLogin')

@section ('alturaMinima','440px')

@section ('noTitulo','Perfil - ')

@section('naBarraCentral')
    <div class="divisaoPrimaria">
        <h1 class="titulo">Editar Perfil</h1>
        <div class="cardBranco">
            <div class="divisaoEntrada">
                @yield('naDivisaoEntrada')
            </div>    
            <div class="divisaoEntrada">
                <label class="legenda" for="cpf">CPF:</label>
                <input class="entradaTexto entradaTextoDesativado" type="text" name="cpf">
            </div>
            <div class="divisaoEntrada">
                <label class="legenda" for="nomeCompleto">Nome:</label>
                <input class="entradaTexto" type="text" name="nomeCompleto" id="nomeCompleto">
            </div>
            <div class="divisaoEntrada">
                <label class="legenda" for="email">E-mail:</label>
                <input class="entradaTexto" type="email" name="email" id="email">
            </div>
            <div class="divisaoEntrada">
                <label class="legenda" for="senha">Senha:</label>
                <input class="entradaTexto" type="password" name="senha" id="senha">
            </div>
            <div class="divisaoEntrada">
                <label class="legenda" for="confirmacaoSenha">Confirmação de senha:</label>
                <input class="entradaTexto" type="password" name="confirmacaoSenha" id="confirmacaoSenha">
            </div>
            <div class="divisaoControle">
                <button class="botao botaoPrimario" name="salvarDados" value="salvarDados" id="salvarDados">Salvar dados</button>
            </div>
        </div>
    </div>
@endsection