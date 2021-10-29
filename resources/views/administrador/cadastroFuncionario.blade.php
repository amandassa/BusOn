@extends('app')

@section('title', 'Cadastrar Funcionário - ')


@section('content')
    <script>function mascara(i,t){
        var v = i.value;
        if(isNaN(v[v.length-1])){
           i.value = v.substring(0, v.length-1);
           return;
        }
        if(t == "cpf"){
           i.setAttribute("maxlength", "14");
           if (v.length == 3 || v.length == 7) i.value += ".";
           if (v.length == 11) i.value += "-";
        }
     }</script>

    @if (session('status'))
        <div class="alert alert-success"> {{session('status')}} </div>
     @endif
     @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <link href="/css/estiloAcessoUsuario.css" rel="stylesheet">
    <div class="container">

        <div class="row">
            <div class="col">
                <h5 class="texto">Cadastrar Funcionário</h5>
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('criarFuncionario')}}" method="POST">
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
                                <label for="entradaCPF">CPF</label>
                                <input oninput="mascara(this, 'cpf')" id="entradaCPF" type="text" class="form-control" autocomplete="on" name="cpf">
                            </div>
                            <div class="form-group camposMenores">
                                <label for="entradaSenha">Senha</label>
                                <input type="password" class="form-control" name="senha">
                            </div>
                            <div class="form-group camposMenores">
                                <label for="entradaConfirmarSenha">Confirmação de senha</label>
                                <input type="password" class="form-control" name="confirmacaoSenha">
                            </div>
                            <div class="btnCC">
                                <div class="btnCC">
                                    <button class="botao botaoAmarelo" id="btnCriarConta">Cadastrar</button>
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
