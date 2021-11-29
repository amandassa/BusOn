@extends('app')

@section('title', 'Cadastrar Funcionário - ')


@section('content')    

    <link href="/css/estiloAcessoUsuario.css" rel="stylesheet">
    <div class="container">
        <div class="row">
            <div class="col">
                <h5 class="texto">Cadastrar Funcionário</h5>
                <div class="card">
                    <div class="card-body">
                        
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <p>Falha no Cadastro.</p>
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if(session('message'))
                            <div class="alert alert-success">{{session('message')}}</div>
                        @endif 
                    
                        <form method="POST" action="{{ route('criarFuncionario') }}">
                            @csrf
                            <div class="form-group">
                                <label for="entradaNome">Nome Completo</label>
                                <input type="name" class="form-control" name="nome">
                            </div>
                            <div class="form-group">
                                <label for="entradaEmail">Email</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="form-group camposMenores">
                                <label for="entradacpf">cpf</label>
                                <input oninput="mascara(this, 'cpf')" id="entradacpf" type="text" class="form-control" autocomplete="on" name="cpf">
                            </div>
                            <div class="form-group camposMenores">
                                <label for="entradaSenha">Senha</label>
                                <input type="password" class="form-control" id="senha" name="senha">
                            </div>
                            <div class="form-group camposMenores">
                                <label for="entradaConfirmarSenha">Confirmação de senha</label>

                                <input type="password" class="form-control" id="confirmacaoSenha" name="confirmacaoSenha">

                            </div>
                            <div class="form-check" style="margin-bottom: 20px">
                                <input class="form-check-input" name="is_admin" type="checkbox" value="true" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Cadastrar como administrador
                                </label>
                            </div>
                            <div class="btnCC">
                                <div class="btnCC">
                                    <button type="submit" class="botao botaoAmarelo" id="btnCriarConta">Cadastrar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
