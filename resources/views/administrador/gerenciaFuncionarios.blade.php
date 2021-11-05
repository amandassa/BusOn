@extends('app')

@section('title', 'Gerenciar Usuários - ')

@section('content')
  <link href="/css/estiloGerencia.css" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script>
    $(document).ready(function(){

      var $rows = $('#tabela tbody tr');

      $('#buscaG').keyup(function() {
          
          var val = '^(?=.*\\b' + $.trim($(this).val()).split(/\s+/).join('\\b)(?=.*\\b') + ').*$',
              reg = RegExp(val, 'i'),
              text;
          
          $rows.show().filter(function() {
              text = $(this).text().replace(/\s+/g, ' ');
              return !reg.test(text);
          }).hide();
      });
    });
  </script>

  <div class="container">        
    <div class="row d-flex justify-content-center"> <!--Botoes de seleção para tela inical do funcionario-->
      <a class="btn" id="botaoMigalha" href="#">
          Lista de funcionários
      </a>
      <a class="btn" id="botaoMigalha" href="gerenciaClientes">
          Lista de clientes
      </a>
    </div>
    
    <div class="card text-center"> <!--card com informações e ações sobre funcionarios cadastrados e fazer cadastros no sistema-->

      <div class="card-header" id="meio">

        <div class="cimaGu">

          <div class="buscGu form-inline" method="post" id="form-pesquisa" action="">
              <input type="text" name="buscaG" id="buscaG" placeholder="Digite a busca desejada...">
              <!--img src="/imagens/lupa.png" alt="Imagem Lupa" id="lupa"-->
              <!--select name="buscaOp" id="buscaOp">
                <option value="nom">Nome</option>
                <option value="cp">CPF</option>
                <option value="emai">Email</option>
                <option value="matricul">Matricula</option>
              </select-->
          </div>
          <!--button type="button" class="btn botaoAmarelo" id="botaoBusca"> Buscar</button-->
        </div>

        <!--div class="form-check-inline" method="post" id="form-pesquisa2" action="">
          <input class="form-check-input" type="radio" name="tipoUser" id="todos"  value="todos" checked>
          <label class="form-check-label" for="todos"> Todos</label>

          <input class="form-check-input" type="radio" name="tipoUser" value="todos" id="func" >
          <label class="form-check-label" for="func"> Funcionários </label>

          <input class="form-check-input" type="radio" name="tipoUser" value="todos" id="adm">
          <label class="form-check-label" for="adm"> Administradores </label>
        </div-->
        

        
      </div>

      <div class="card-body">
        <table class="table table-bordered" id="tabela">
          <thead>
            <tr>
              <th class="bg-warning">Matrícula</th>
              <th class="bg-warning">Nome</th>
              <th class="bg-warning">CPF</th>
              <th class="bg-warning">Email</th>
              <th class="bg-warning">Tipo</th>
              <th class="bg-warning">Ações</th>
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
                    <a class="btn botaoAzul" href="editarPerfilFuncionario" role="button"> Editar Perfil</a>
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
  </div>
      
@endsection