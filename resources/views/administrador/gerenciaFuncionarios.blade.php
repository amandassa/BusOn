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
                  <td> {{substr($funcionario->CPF, 0, 3) . '.' . substr($funcionario->CPF , 3, 3) . '.' . substr($funcionario->CPF , 6, 3) . '-' . substr($funcionario->CPF , 9)}}</td>
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
                  <a class="btn botaoAzul delete" data-toggle="modal" data-target="#exampleModal" role="button" data-id ="{{$funcionario->email}}" data-nome ="{{$funcionario->nome}}">Excluir</a>
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

  

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #F9C536">
          <h5 class="modal-title" id="exampleModalLabel">Exclusão </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('gerenciaUsuarios.excluir')}}" id="deleteForm" method="post">
          @csrf
          @method('DELETE')
          <div class="modal-body">
            <p> Deseja excluir o usuario(a): </p>
            <input type="text" name="nome" id="nome" value=""  readonly style= "border: none;">
            <input type="hidden" name="email" id="id" value="">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn botaoAmarelo" data-dismiss="modal">Cancelar</button>
            <button type="sumbmit" class="btn botaoAzul">Confirmar</button>
          </div>
        </form>
        
      </div>
    </div>
  </div>

  

  <script>
    $(document).on('click','.delete',function(){
        var userID=$(this).attr('data-id');
        $('#id').val(userID); 
      
        var userNome=$(this).attr('data-nome');
        $('#nome').val(userNome); 
        $('#exampleModal').modal('show'); 
    });
    </script>
  

@endsection

