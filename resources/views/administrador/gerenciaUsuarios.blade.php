@extends('app')

@section('title', 'Gerenciar Usuários - ')

@section('content')
  <link href="/css/estiloGerencia.css" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script> //busca a cada tecla digitada
    $(document).ready(function(){

      $('#buscaG').keyup(function(){

        var buscaG = $(this).val();
        var buscaOp = $('#buscaOp').val();
        var buscaTipo = $('#tipoUser').val();

        alert(buscaOp);
        $.post('processa.php', {buscaG: buscaG}, {bucasOP: buscaOp}, function(data){
          
        });
      });

    });
  </script>

  <div class="container">        
    <div class="card text-center">

      <div class="card-header" id="meio">

        <div class="cimaGu">

          <div class="buscGu form-inline" method="post" id="form-pesquisa" action="">
              <input type="text" name="buscaG" id="buscaG" placeholder="Digite a busca desejada...">
              <!--img src="/imagens/lupa.png" alt="Imagem Lupa" id="lupa"-->
              <select name="buscaOp" id="buscaOp">
                <option value="nome">Nome</option>
                <option value="cpf">CPF</option>
                <option value="email">Email</option>
                <option value="matricula">Matricula</option>
              </select>
              <input type="submit" class="botaoAmarelo" id="botaoBusca" name="botaoBusca" value="Buscar"></input>
          </div>
        </div>

        <div class="form-check-inline" method="post" id="form-pesquisa2" action="">
          <input class="form-check-input" type="radio" name="tipoUser" id="todos"  value="todos" checked>
          <label class="form-check-label" for="todos"> Todos</label>

          <input class="form-check-input" type="radio" name="tipoUser" value="todos" id="func" >
          <label class="form-check-label" for="func"> Funcionários </label>

          <input class="form-check-input" type="radio" name="tipoUser" value="todos" id="adm">
          <label class="form-check-label" for="adm"> Administradores </label>
        </div>
        

        
      </div>

      <div class="card-body">
        <table class="table table-bordered table-striped" id="resultado">
          <thead>
            <tr>
              <td class="bg-warning">Matrícula</td>
              <td class="bg-warning">Nome</td>
              <td class="bg-warning">CPF</td>
              <td class="bg-warning">Email</td>
              <td class="bg-warning">Tipo</td>
              <td class="bg-warning">Ações</td>
            </tr>
          </thead>
          <tbody>                 
              <tr>
                @foreach ($funcionarios as $funcionario)
                  <th scope="row"> {{ $funcionario->matricula }} </th>
                  <td> {{ $funcionario->nome }} </td>
                  <td> {{ $funcionario->CPF }}</td>
                  <td> {{ $funcionario->email }} </td>
                  <td>
                    @if($funcionario->is_admin)
                      Administrador
                    @else
                      Funcionário
                    @endif
                  </td>
                  <td>
                    <a class="btn botaoAzul" href="{{route('perfilAdministrador.perfilFunc', $funcionario->email)}}" role="button" method="post"> Editar Perfil</a>
                    
                  </td>
                </tr> 
                @endforeach
              
          </tbody>
        </table>
      </div>
      
      <div class="card-footer text-muted">
        <a class="btn botaoAmarelo" href="cadastroFuncionario" role="button">Cadastrar Funcionário</a>
      </div>
    </div>
  </div>
      
@endsection