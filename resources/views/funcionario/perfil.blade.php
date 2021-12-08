@extends('app')

@section('title', 'Editar Perfil - ')


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

    <link href="/css/estiloAcessoUsuario.css" rel="stylesheet">
    <div class="container">
        <h5 class="texto">Editar Perfil</h5>
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
                <form action="{{route('perfilFuncionario.editar')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="entradaNome">Nome Completo</label>
                        <input type="name" class="form-control" id="entradaNome" name = "nome"  value="{{$funcionario['entradaNome']}}">
                    </div>
                    <div class="form-group">
                        <label for="entradaEmail">Email</label>
                        <input type="email" class="form-control" id="entradaEmail" name = "email"  value="{{$funcionario['entradaEmail']}}">
                    </div>
                    <div class="form-group">
                        <label for="entradacpf">cpf</label>
                        <input oninput="mascara(this, 'cpf')" class="form-control" autocomplete="on" id="disabledInput entradacpf" name="customer['cpf']" type="text" value="{{$funcionario['cpf']}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="entradaMatricula">Matricula</label>
                        <input type="number" class="form-control" id="disabledInput entradaMatricula" name = "matricula"value="{{$funcionario['entradaMatricula']}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="entradaSenha">Senha</label>
                        <input type="password" class="form-control" id="entradaSenha" name="senha" value="{{$funcionario['entradaSenha']}}">
                    </div>
                    <div class="form-group">
                        <label for="entradaConfirmarSenha">Confirmação de senha</label>
                        <input type="password" class="form-control"  id="entradaConfirmarSenha" name = "confirmarSenha" value="{{$funcionario['entradaConfirmarSenha']}}">
                    </div>
                    <div class="btnCC">
                        <button type="sublit" class="botao botaoAmarelo" id="btnCriarConta">Salvar</button>
                    </div>
                </form>
            </div>
        </div>



    </div>


@endsection
