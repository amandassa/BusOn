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
    @if ($errors->any())
    <div class="alert alert-warning">
         @foreach ($errors->all() as $error)
             <p>{{ $error }}</p>
         @endforeach
     </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success alert-block">
            {{session ('success')}}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">
            {{session ('error')}}
        </div>
    @endif

     
    <link href="/css/estiloAcessoUsuario.css" rel="stylesheet">
    <div class="container">
        <h5 class="texto">Editar Perfil</h5>
        <div class="card">
            <div class="card-body">
                <form action="{{route('perfilAdministrador.editar')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="entradaNome">Nome Completo</label>
                        <input type="name" class="form-control" id="entradaNome" name = "nome"  value="{{$administrador['entradaNome']}}"> 
                    </div>
                    <div class="form-group">
                        <label for="entradaEmail">Email</label>
                        <input type="email" class="form-control" id="entradaEmail" name = "email"value="{{$administrador['entradaEmail']}}">
                    </div>
                    <div class="form-group">
                        <label for="entradacpf">cpf</label>
                        <input oninput="mascara(this, 'cpf')" class="form-control" autocomplete="on" id="disabledInput entradacpf" name="customer['cpf']" type="text" value="{{$administrador['cpf']}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="entradaMatricula">Matricula</label>
                        <input type="number" class="form-control" id="disabledInput entradaMatricula" name = "matricula"value="{{$administrador['entradaMatricula']}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="entradaSenha">Senha</label>
                        <input type="password" class="form-control" id="entradaSenha" name="senha" value="{{$administrador['entradaSenha']}}">
                    </div>
                    <div class="form-group">
                        <label for="entradaConfirmarSenha">Confirmação de senha</label>
                        <input type="password" class="form-control" id="entradaConfirmarSenha" name = "confirmarSenha" value="{{$administrador['entradaConfirmarSenha']}}">
                    </div>
                    <div class="btnCC">
                        <button type="submit" class="botao botaoAmarelo" id="btnCriarConta">Salvar</button>
                    </div>
                </form>
            </div>
        </div>



    </div>


@endsection
