@extends('app')

@section('title', 'Logs do Sistema - ')
    
@section('content')
    <link href="/css/estiloInicio.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
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
            zeroRecords: "Nenhum dado foi encontrado!",
            oPaginate: 
            {
                sNext: '<i class="fas fa-angle-double-right"></i>',
                sPrevious: '<i class="fas fa-angle-double-left"></i>'
            }
        }   
      }); 
    } )
  </script>

    <script>  
        $(document).ready(function(){

        $("#div_impressao").printThis();

        });

        function impressao(){    
            var printContents = document.getElementById('div_impressao').innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;    
        }
    </script>
    
    <div class="container">
        <h2> Filtrar</h2>
        <div class="card">
            <div class="card-body">
                <form method="POST" class="form" action="{{route('Logs')}}">
                    @csrf
                    <div class="form-group"> 
                        <label for="idFuncionario"><b>Pesquisar por usuário</b></label>
                        <input type="text" class="form-control" name="idFuncionario" id="idFuncionario" placeholder="Dados do administrador">
                        <select name="buscaOp" id="buscaOp">
                            <option value="nome">Nome</option>
                            <option value="cpf">CPF</option>
                            <option value="email">Email</option>
                            <option value="matricula">Matricula</option>
                        </select>
                    </div>
                    
                    <div class="row">
                        <div class="form-group col">
                            <label for="dataInicio"><b>De</b></label>
                            <input type="date" class="form-control" name="dataInicio" id="dataInicio">
                        </div>

                        <div class="form-group col">
                            <label for="dataFim"><b>Até</b></label>
                            <input type="date" class="form-control" name="dataFim" max="<?php echo date("Y-m-d")?>" id="dataFim">
                        </div>
                    </div>
                    <!--div>
                        <p><b>Ações</b></p>
                        <div class="form-check form-check-inline" id="tipoAcao">
                            <input class="form-check-input" type="checkbox" nome="tipoAcao" id="inlineCheckbox1" value="todos" checked>
                            <label class="form-check-label" for="inlineCheckbox1">Todos</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" nome="tipoAcao" id="inlineCheckbox2" value="adicao">
                            <label class="form-check-label" for="inlineCheckbox2">Adição</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" nome="tipoAcao" id="inlineCheckbox3" value="exclusao">
                            <label class="form-check-label" for="inlineCheckbox3">Exclusão</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" nome="tipoAcao" id="inlineCheckbox4" value="edicao">
                            <label class="form-check-label" for="inlineCheckbox4">Edição</label>
                        </div>
                    </div-->
                    
                    <p class="text-center"><button type="submit" class="botao botaoAzul">Pesquisar</button></p>
                </form>  
            </div>
        </div>

        <br>
        <br>
        <br>

        
        <div class="card text-center" id="div_impressao">
            <h3 class="card-header">Atualizações no sistema</h3>
            <table class="table table-bordered table-hover" id="tabela">
                <thead>
                    <tr>
                        <th class="bg-warning">Data</th>
                        <th class="bg-warning">Administrador</th>
                        <th class="bg-warning">Contato</th>
                        <th data-orderable="false" class="bg-warning">Ação</th>
                    </tr>
                </thead>
                <tbody>
                @if($logs == null)  
                    <tr>
                        <td colspan="4">Nenhum dado foi encontrado!</td>
                    </tr>
                @else
                    <tr>
                        @foreach ($logs as $log)
                            <th scope="row"> {{ $log->data_hora }} </th>
                                <td> {{ $log->nome }} </td>
                                <td> {{ $log->email }} </td>
                                <td> {{ $log->descricao }} </td>
                    </tr>
                        @endforeach
                @endif
                </tbody>
            </table>
        </div>

        <div class="d-flex" style="margin-top:2em;">
            <div class="mx-auto">
                <button class="botao botaoAmarelo" type="button" onClick="impressao()" >Imprimir</button>
            </div>
        </div>
    </div>
@endsection