@extends('app')

@section('title', 'Recuperar Acesso - ')

@section('content')
    <link href="/css/estiloAcessoUsuario.css" rel="stylesheet">
    <div class="container">
        <h5 class="texto">Recuperar Acesso</h5>
        <div class="card">
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="entradaEmail">Email Cadastrado</label>
                        <input type="email" class="form-control" id="entradaEmail">
                    </div>
                    <div class="btnCC">
                        <button type="sublit" class="botao botaoAmarelo" id="btnCriarConta">Enviar Senha Provisória</button>
                    </div>
                    <div class="linkAC">
                        <label>Recordou sua senha?</label>
                        <a class="link" href="#">Tente acessar sua conta</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
