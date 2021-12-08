@extends('app')

@section('title', 'Editar Perfil Funcionário - ')


@section('content')
    @push('js')
    <script>
        $(document).ready(function () {
            $(".editarcpf").mask('000.000.000-00', {reverse: true});
            console.log('novocpf! ', cep);

        });
    </script>

        @endpush
        
    <link href="/css/estiloAcessoUsuario.css" rel="stylesheet">
    <div class="container">
        <h5 class="texto">Editar Perfil de Funcionário</h5>
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
                <form  action="{{route('perfilAdministrador.editarFunc')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="entradaNome">Nome Completo</label>
                        <input type="name" class="form-control" id="entradaNome"  name = "nome"  value="{{$funcionario['entradaNome']}}">
                    </div>
                    <div class="form-group">
                        <label for="entradaEmail">Email</label>
                        <input type="email" class="form-control" id="entradaEmail" name = "email" value="{{$funcionario['entradaEmail']}}">
                    </div>
                    <div class="form-group">
                        <label for="entradacpf">cpf</label>
                        <input oninput="mascara(this, 'cpf')" data-mask="000.000.000-00" class="form-control"  autocomplete="on" id="disabledInput entradacpf" name="customer['cpf']" type="text" value="{{$funcionario['cpf']}}"disabled />
                    </div>
                    <div class="form-group">
                        <label for="entradaMatricula">Matricula</label>
                        <input type="text" class="form-control" id="matricula" name = "matricula" value="{{$funcionario['entradaMatricula']}}" readonly/>
                    </div>
                    <div class="form-group">
                        <label for="entradaSenha">Senha</label>
                        <input type="password" class="form-control" id="entradaSenha" name="senha" value="{{$funcionario['entradaSenha']}}">
                    </div>
                    <div class="form-group">
                        <label for="entradaConfirmarSenha">Confirmação de senha</label>
                        <input type="password" class="form-control" id="entradaConfirmarSenha" name = "confirmarSenha" value="{{$funcionario['entradaConfirmarSenha']}}">
                    </div>
                    <div class="btnCC">
                        <button type="submit" class="botao botaoAmarelo" id="btnCriarConta">Salvar</button>
                    </div>
                </form>
            </div>
        </div>



    </div>


@endsection
