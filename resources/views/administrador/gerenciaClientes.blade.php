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
      document.getElmentById('#tabela').className = "form-control" 
    } )
  </script>

  <div class="container">        
    <div class="row d-flex justify-content-center"> <!--Botoes de seleção para tela inical do funcionario-->      
      <a class="btn botaoAmarelo" href="gerenciaUsuarios" role="button">Lista de Funcionários</a>
      <a class="btn botaoAmarelo botaoCancelar" href="#" style="margin-left: 2em; margin-right: 2em;"role="button">Lista de Clientes</a>   
      <a class="btn botaoAzul" style="margin-left: 2em;" href="/" role="button">Voltar</a>          
    </div>

    <div class="card">
      
      <div class="card-header text-center" id="meio">
        
        <form method="POST" class="form" action="{{route('buscar_cliente')}}">
          @csrf
          <div class="row justify-content-center">
            <div class="col-sm-6">
              <input type="text" class="form-control" name="buscaGu" placeholder="Digite a busca desejada...">
            </div>
            <div class="col-sm-2">
              <select class="form-control" name="buscaOp">
                <option value="nome">Nome</option>
                <option value="cpf">CPF</option>
                <option value="email">Email</option>
              </select>
            </div>
            <div class="col-sm-2">
                <button class="btn botaoAmarelo">Buscar</button>
            </div>
          </div>
         
        </form>
        
      </div>

      <div class="card-body">
      <table class="table table-bordered table-hover text-center" id="tabela" name="form-control">         
            <thead>
              <tr>
                <th scope="col" class="">CPF</th>
                <th scope="col" class="">Nome</th>
                <th scope="col" class="">Email</th>
              </tr>
            </thead>
            <tbody>
              @if($clientes == null)  
                <tr>
                  <td colspan="3">Cliente não encontrado!</td>
                </tr>
              @else
                <tr>
                  @foreach ($clientes as $cliente)
                    <th scope="row"> {{ $cliente->cpf }} </th>
                    <td> {{ $cliente->nome }} </td>
                    <td> {{$cliente->email}}</td>
                  </tr>
                  @endforeach
              @endif
            </tbody>
          </table>
      </div>

    </div>
  </div>
      
@endsection