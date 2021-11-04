@extends('app')

@section('title', 'Editar Perfil Funcionário - ')


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

    <!-- 
        apresentação de mensagem de erros caso os campos do formulário estejam
        incompletos ou possuam informações que não passaram na validação
    -->
    @if ($errors->any())
        <div class="alert alert0-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <link href="/css/estiloAcessoUsuario.css" rel="stylesheet">
    <div class="container">
        <h5 class="texto">Editar Perfil de Funcionário</h5>
        <div class="card">
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="entradaNome">Nome Completo</label>
                        <input type="name" class="form-control" id="entradaNome">
                    </div>
                    <div class="form-group">
                        <label for="entradaEmail">Email</label>
                        <input type="email" class="form-control" id="entradaEmail">
                    </div>
                    <div class="form-group">
                        <label for="entradaCPF">CPF</label>
                        <input oninput="mascara(this, 'cpf')" class="form-control" autocomplete="on" id="disabledInput entradaCPF" name="customer['cpf']" type="text" disabled>
                    </div>
                    <div class="form-group">
                        <label for="entradaMatricula">Matricula</label>
                        <input type="cpf" class="form-control" id="disabledInput entradaCPF" disabled>
                    </div>
                    <div class="form-group">
                        <label for="entradaSenha">Senha</label>
                        <input type="password" class="form-control" id="entradaSenha">
                    </div>
                    <div class="form-group">
                        <label for="entradaConfirmarSenha">Confirmação de senha</label>
                        <input type="password" class="form-control" id="entradaConfirmarSenha">
                    </div>
                    <div class="btnCC">
                        <button type="submit" class="botao botaoAmarelo" id="btnCriarConta">Salvar</button>
                    </div>
                </form>
            </div>
        </div>



    </div>


@endsection
