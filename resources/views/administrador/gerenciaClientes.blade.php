@extends('app')

@section('title', 'Gerenciar Usuários - ')

@section('content')
  <link href="/css/estiloGerencia.css" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.3/css/select.dataTables.min.css">
  <script src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script> 
  
  <script>
    $(document).ready(function() {
      
      //Script do datatable - serve para deixar a tabela com varias funcionalidades
      $('#tabela').DataTable({
        info:false, 
        pageLength : 5,
        lengthMenu: [[5, 10, 20, -1], [5, 10, 20, 'Todas']],
        language: 
        {
            lengthMenu: "Exibir _MENU_",
            search: "Busca rápida",
            zeroRecords: "Cliente não encontrado!",
            oPaginate: 
            {
                sNext: '<i class="fas fa-angle-double-right"></i>',
                sPrevious: '<i class="fas fa-angle-double-left"></i>'
            }
        }   
      }); 
    } )
  </script>

  <div class="container">        
    <div class="row d-flex justify-content-center"> <!--Botoes de seleção para tela inical do funcionario-->
        <a class="btn" id="botaoMigalha" href="gerenciaUsuarios">
            Lista de funcionários
        </a>
        <a class="btn" id="botaoMigalha" href="#">
            Lista de clientes
        </a>
    </div>

    <div class="card text-center">
      
      <div class="card-header" id="meio">
        
        <form method="POST" class="form">
          @csrf
          <div class="form-inline text-center" style="display: inline-block; position: relative;">
              <input type="text" name="buscaGu" placeholder="Digite a busca desejada...">
              <select name="buscaOp">
                <option value="nome">Nome</option>
                <option value="cpf">CPF</option>
                <option value="email">Email</option>
              </select>
          </div>
          <button class="btn botaoAmarelo">Buscar</button>
        </form>
        
      </div>

      <div class="card-body">
          <table class="table table-bordered table-hover" id="tabela">          
            <thead>
              <tr>
                <th scope="col" class="bg-warning">CPF</th>
                <th scope="col" class="bg-warning">Nome</th>
                <th scope="col" class="bg-warning">Email</th>
              </tr>
            </thead>
            <tbody>                
                <tr>
                  @foreach ($clientes as $cliente)
                    <th scope="row"> {{ $cliente->cpf }} </th>
                    <td> {{ $cliente->nome }} </td>
                    <td> {{$cliente->email}}</td>
                  </tr>
                  @endforeach
            </tbody>
          </table>
      </div>

    </div>
  </div>
      
@endsection