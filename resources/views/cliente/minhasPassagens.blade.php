@extends('app')

@section('title', 'Minhas Passagens - ')

@section('content')

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
            searching:false,
            pageLength : 5,
            lengthMenu: [[5, 10, 20, -1], [5, 10, 20, 'Todas']],
            language: 
            {
                lengthMenu: "Exibir: _MENU_ linhas",         
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

    <div class="conteiner">
        <div class="card">
            <h3 class="card-header text-center">Minhas passagens</h3>
            <div class="card-body">
                <table class="table table-bordered table-hover text-center" id="tabela" name="form-control">
                        <thead>
                            <tr>
                                <td  scope="col" class="">Código</td>
                                <td  scope="col" class="">Cidade de Origem</td>
                                <td  scope="col" class="">Cidade de Destino</td>
                                <td  scope="col" class="">Nº de Assento</td>
                                <td  scope="col" class="">Data de Compra</td>
                            </tr>
                        </thead>
                        <tbody>
                            @if($passagens == null)  
                                <tr>
                                    <td colspan="6">Você ainda não comprou nenhuma passagem!</td>
                                </tr>
                            @else
                                <tr>
                                @foreach ($passagens as $passagem)
                                    <th scope="row"> {{ $passagem->codigo}} </th>
                                    <td> {{$passagem->cidade_partida}}</td>
                                    <td> {{$passagem->cidade_chegada}}</td>
                                    <td> {{$passagem->num_assento}} </td>
                                    <td> {{$passagem->data}}</td>
                                </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
@endsection
