@extends('app')

@section('title', 'Gerenciar Usuários - ')

@section('content')  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="/css/estiloVP.css">

  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.3/css/select.dataTables.min.css">
  <script src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script> 
  
  <script>
    $(document).ready(function() {
      
      //Script do datatable - serve para deixar a tabela com varias funcionalidades      
      $('#tabela').DataTable({
        select:{}, 
        info:false, 
        pageLength : 5,
        lengthMenu: [[5, 10, 20, -1], [5, 10, 20, 'Todas']],
        language: 
        {
            lengthMenu: "Exibir: _MENU_ linhas",
            search: "Busca rápida",
            zeroRecords: "Funcionário não encontrado!",            
            oPaginate: 
            {
                sNext: '<i class="fas fa-angle-double-right"></i>',
                sPrevious: '<i class="fas fa-angle-double-left"></i>'
            }
        }   
      }); 
      document.getElmentById('#tabela').className = "form-control"
    } )
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
      <a class="btn botaoAmarelo botaoCancelar" id="btnCancel" href="#" role="button">Lista de Funcionários</a>
      <a class="btn botaoAmarelo" href="gerenciaClientes" style="margin-left: 2em; margin-right: 2em;"role="button">Lista de Clientes</a>
      <a class="btn botaoAzul" style="margin-left: 2em;" href="/" role="button">Voltar</a>          
    </div>
    
    <div class="card"> <!--card com informações e ações sobre funcionarios cadastrados e fazer cadastros no sistema-->

      <div class="card-header text-center" id="meio">

        <form method="POST" class="form" action="{{route('buscar_fun')}}">
          @csrf   
          <div class="row justify-content-center">            
            <div class="col-sm-6">
                <input type="text" name="buscaG" class="form-control" placeholder="Digite a busca desejada...">
            </div>  
              <div class="col-sm-2">
                  <select class="form-control" name="buscaOp" >
                      <option value="nome">Nome</option>
                      <option value="cpf">CPF</option>
                      <option value="email">Email</option>
                      <option value="matricula">Matricula</option>
                  </select>   
              </div>           
              <div class="col-sm-2">
                  <button class="btn botaoAmarelo">Buscar</button>
              </div>
          </div>
          <div style="margin-top:1em;">     
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="tipoUser" value="todos"  id="todos" checked>
              <label class="form-check-label" for="todos"> Todos</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="tipoUser" value="func" id="func" >
              <label class="form-check-label" for="func"> Funcionários </label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="tipoUser" value="adm" id="adm">
              <label class="form-check-label" for="adm"> Administradores </label>
            </div>
          </div>
        </form>
        <div class="card-footer text-center">
          <a class="btn botaoAmarelo" href="cadastroFuncionario" role="button">Cadastrar novo funcionário</a>          
        </div>
      </div>

      <div class="card-body">
        <table class="table table-bordered table-hover text-center" id="tabela" name="form-control">
          <thead>
            <tr>
              <th scope="col" class="">Matrícula</th>
              <th scope="col" class="">Nome</th>
              <th scope="col" class="">CPF</th>
              <th scope="col" class="">Email</th>
              <th scope="col" class="">Tipo</th>
              <th data-orderable="false" class="">Ações</th>
            </tr>
          </thead>
          <tbody> 
              @if($funcionarios == null)  
              <tr>
                <td colspan="6">Funcionário não encontrado!</td>
              </tr>
              @else                
                <tr>
                  @foreach ($funcionarios as $funcionario)
                    <th scope="row"> {{ $funcionario->matricula }} </th>
                    <td> {{ $funcionario->nome }} </td>
                    <td> {{substr($funcionario->cpf, 0, 3) . '.' . substr($funcionario->cpf , 3, 3) . '.' . substr($funcionario->cpf , 6, 3) . '-' . substr($funcionario->cpf , 9)}}</td>
                    <td> {{ $funcionario->email }} </td>
                    <td>
                      @if($funcionario->is_admin)
                        Administrador
                      @else
                        Funcionário
                      @endif
                    </td>
                    <td>
                      <a class="btn botaoAzul" href="{{route('perfilAdministrador.perfilFunc', $funcionario->email)}}" role="button" method="post" id='editar'> Editar Perfil</a>
                      <a class="btn botaoAzul delete" data-toggle="modal" data-target="#exampleModal" role="button" data-id ="{{$funcionario->email}}" id='excluir' data-nome ="{{$funcionario->nome}}">Excluir</a>
                    </td>
                  </tr> 
                  @endforeach
              @endif
          </tbody>
        </table>
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
            <p> Deseja excluir o usuário(a)?</p>
            <input type="text" name="nome" id="nome" value="" disabled style= "border: none; background-color: transparent;">
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

