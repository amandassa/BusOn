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
            lengthMenu: "Exibir _MENU_ linhas",
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
                    <label for="buscaUser"><b>Pesquisar por</b></label>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="idFuncionario" id="buscaUser" placeholder="Dados do administrador">
                        </div>
                        <div class="form-group col-md-6">
                            <select class="custom-select" name="buscaOp" id="buscaUser">
                                <option value="nome">Nome</option>
                                <option value="cpf">CPF</option>
                                <option value="email">Email</option>
                                <option value="matricula">Matricula</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="dataInicio"><b>De</b></label>
                            <input type="date" class="form-control" name="dataInicio" id="dataInicio">
                        </div>

                        <div class="form-group col-md-6">
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

        
        <div class="card" id="div_impressao">
            <h3 class="card-header text-center">Atualizações no sistema</h3>
            <table class="table table-bordered table-hover text-center" id="tabela">
                <thead>
                    <tr>
                        <th scope="col" class="">Data</th>
                        <th scope="col" class="">Administrador</th>
                        <th scope="col" class="">Contato</th>
                        <th data-orderable="false" scope="col" class="">Ação</th>
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
                                @php 
                                    $data = date('d/m/Y H:m:s', strtotime(str_replace('/', '-', $log->data_hora)))
                                @endphp
                                <th scope="row">{{ $data }}</th>
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