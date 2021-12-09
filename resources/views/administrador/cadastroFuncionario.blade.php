@extends('app')

@section('title', 'Cadastrar Funcionário - ')
@section('content')    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.mask.js') }}"></script>

    <script>
    $(document).ready(function(){
        $("#cpf").mask('999.999.999-99');            

        $("#criarFuncionario").submit(function() {
            $("#cpf").unmask();
        });
    });
    </script>

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
                    
                        <form method="POST" action="{{ route('criarFuncionario') }}" id="criarFuncionario">
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
                                <label for="entradacpf">CPF:</label>
                                <input oninput="mascara(this, 'cpf')" id="cpf" type="text" class="form-control" autocomplete="on" name="cpf" />
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
                                    <button type="button" class="botao" style="background-color: black; color: #F9C536;" id="btnCriarConta" onClick="window.location.href = '/gerenciaUsuarios';"> Voltar </button>
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
