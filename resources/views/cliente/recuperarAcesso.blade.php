@extends('app')

@section('title', 'Recuperar Acesso - ')

@section('content')
    <link href="/css/estiloAcessoUsuario.css" rel="stylesheet">
    <div class="container">
        <h5 class="texto">Recuperar Acesso</h5>
        <div class="card">
            @if ($errors->any()) 
                <div class="alert alert-danger alert-dismissable">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li><strong>{{ $error }}</strong></li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success alert-dismissable">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <ul>
                        <li><strong>{{session ('success')}}</strong></li>
                    </ul>
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger alert-dismissable">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <ul>
                        <li><strong>{{session ('error')}}</strong></li>
                    </ul>
                </div>
            @endif
            <div class="card-body">
                <form method="POST" action="{{route('recuperarAcessoCliente')}}" id="recuperarAcessoCliente">
                    @csrf
                    <div class="form-group">
                        <label for="entradaEmail">Email Cadastrado</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                    <div class="btnCC">
                        <button class="botao botaoAmarelo" id="btnCriarConta">Enviar Senha Provisória</button>
                    </div>
                    <div class="linkAC">
                        <label>Recordou sua senha?</label>
                        <a class="link" href="/">Tente acessar sua conta</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
