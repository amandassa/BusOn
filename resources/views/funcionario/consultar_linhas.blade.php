@extends('app')

@section('title', 'Consultar Linhas - ')

@section('content')

    @section('usaMigalha', TRUE)
    @section('nomeMigalha1', 'Dashboard')
    @if(auth('funcionario')->user()->is_admin == 1)
        @section('rotaMigalha1') {{route('inicial_adm')}} @endsection
    @endif
    @if(auth('funcionario')->user()->is_admin == 0)
     @section('rotaMigalha1') {{route('inicial_func')}} @endsection
    @endif
    @section('nomeMigalha2', 'Consultar Linha')
    @section('rotaMigalha2') {{ route('consultar_linhas') }} @endsection
    @section('nomeMigalha3', 'Editar')    
    @section('rotaMigalha3') {{ route('editarLinha') }} @endsection
    @section('linkM2', 'ativado')
    @section('estiloMigalha2', 'migalhaRetanguloAtiva')
    @section('estiloMigalhaT2', 'migalhaTrianguloAtiva')
        
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.3/css/select.dataTables.min.css">
    <script src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script> 

    <script type="text/javascript" >
        $(document).ready(function() {          
        var trechos_partida = <?php echo $trechos_partida; ?>;
        var trechos_chegada = <?php echo $trechos_chegada; ?>;
        document.getElementById('cidade_partida').placeholder = trechos_partida[0];
        document.getElementById('cidade_destino').placeholder = trechos_chegada[0];        
        
        $('#tabelaLinhas').DataTable( {            
            searching: false,
            info:false,                         
            pageLength : 5,
            "lengthChange": false,
            language: 
                {
                    zeroRecords: "Não há linhas registradas para a consulta realizada!",
                    oPaginate: 
                    {
                        sNext: '<i class="fas fa-angle-double-right"></i>',
                        sPrevious: '<i class="fas fa-angle-double-left"></i>'
                    }                    
                }
        } );

    
        $('#cidade_partida').autocomplete({
        source: trechos_partida,                
        treshold: 2,
        });

        $('#cidade_destino').autocomplete({
        source: trechos_chegada,                
        treshold: 2,
        });

            if ($('#opcaoBusca').value == "Codigo") {
                $('#cidade_partida').attr('disabled', true);                
                $('#cidade_destino').attr('disabled',true);                              
                $('#codigo_linha').attr('disabled', false);
            } else {
                $('#cidade_partida').attr('disabled', false);                
                $('#cidade_destino').attr('disabled', false);
                $('#codigo_linha').attr('disabled',true);
            }
        });

        $(document).on('click','.delete',function(){          
        var linhaCodigo = $(this).data('id');
        $('#codigo').val(linhaCodigo);                 
        document.getElementById('linha_span').innerHTML = linhaCodigo;
        $('#confirmacaoExclusao').modal('show'); 
        });

        function alterarOpcao(elemento){                    
            var opcao = elemento.value;            
            if (opcao == "Codigo") {
                $('#cidade_partida').attr('disabled', true);                
                $('#cidade_destino').attr('disabled',true);                              
                $('#codigo_linha').attr('disabled', false);
            } else {
                $('#cidade_partida').attr('disabled', false);                 
                $('#cidade_destino').attr('disabled', false);
                $('#codigo_linha').attr('disabled',true);
            }
        }
    </script>    
    
    <style>
        .espaco{
            margin-top:2em;
            margin-left:1em;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/css/estiloAutocomplete.css')}}">
    
    
    <div class="container">       
        <div class="row-xl">
            <h5>Consulta de Linhas</h5>  
            <div class="card card-default">
                <div class="card-body">
                <form method="POST" action="{{ route('consulta') }}" class="form">
                        <div class="row espaco">                        
                        <div class="col-sm-4">                            
                            @csrf 
                            <span>Definir tipo de busca: </span>
                                <select id="opcaoBusca" name="opcaoBusca" value = "{{ old('opcaoBusca') }}" onchange="javascript:alterarOpcao(this);" class="form-control">
                                    <option value="Nome">Nome</option>
                                    <option value="Codigo">Código</option>
                                </select>
                        </div>                                                                            
                        <div class="col-sm-4">
                            <span>Código da Linha: </span>
                            <input id="codigo_linha" name="codigo_linha" value="{{ old('codigo_linha') }}" class="form-control"/>
                        </div>
                        </div>
                        
                        <div class="row espaco">                            
                                <div class="col-sm-4">                                
                                    <span>Cidade de Partida: </span>
                                    <input id="cidade_partida" name="cidade_partida" value="{{ old('cidade_partida') }}" class="form-control"/>
                                </div>
                                <div class="col-sm-4">
                                    <span>Cidade de Destino: </span>
                                    <input id="cidade_destino" name="cidade_destino" value="{{ old('cidade_destino') }}" class="form-control">
                                </div>
                                <div class="col-sm-4">
                                    <span>Data de Partida: </span>
                                    <input class="form-control" type="date" id="data_partida" name="data_partida" min="<?php echo date("Y-m-d")?>" value="<?php (old('data_partida') == true) ? old('data_partida') : print(date("Y-m-d")) ?>" >                                     
                                </div>
                        </div>
                        
                        <div class="row espaco">
                            <div class="col-sm-4">                                
                                
                                    <input class="form-check form-check-inline" style="margin-right:1em;" type="checkbox" name="tipoLinha_op1" value="0" checked>
                                    <label class="form-check-label">Linha Comum</label>
                                        
                                        
                                    <input class="form-check form-check-inline" style="margin-left:1em;" type="checkbox" name="tipoLinha_op2" value="1" checked>
                                    <label class="form-check-label">Linha Direta</label>
                                    
                            </div>
                            <div class="col-sm-4">                                
                            </div>
                            <div class="col-sm-4" style="text-align:right;">
                                <button class="botao botaoAzul" type="submit">Buscar</button>
                            </div>
                        </div>
                    </div>            
                </form>    
            </div>
             @isset($status)              
                @if ($status)
                    <div class="alert alert-success alert-dismissable" style="margin:10px">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a> 
                        {{ $status}} 
                    </div>
                @endif
            @endisset
     @if (count($errors) > 0)
        <div class="alert alert-danger alert-dismissable" style="margin:10px;">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            <ul>                
                @foreach ($errors as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
            <!-- Tabela de resultados de consulta -->
            <div class="card card-default">            
                <div class="card-body">
                    <table class="table" id="tabelaLinhas">
                        <thead>
                        <tr>
                          <th scope="col">Código</th>
                          <th scope="col">Partida</th>
                          <th scope="col">Destino</th>
                          <th scope="col">Preço</th>
                          <th scope="col">Tipo</th>
                          <th data-orderable= "false" scope="col"> Ação</th>
                        </tr>
                        </thead>
                      <tbody>                        
                            @foreach ($linhas as $linha)
                            <tr>
                             <th scope="row">{{ $linha['codigo']}}</th>
                                <td> {{ $linha['partida']}} </td>
                                <td> {{ $linha['destino']}} </td>
                                <td>R$ {{ $linha['preco']}} </td>
                                @if ($linha['tipo'] == 1 )
                                    <td> Direta </td>
                                @else
                                    <td> Comum </td>
                                @endif
                                <td>
                                    <a class="btn botaoAmarelo" style="min-width:0px;" role="button" href="{{route('consultaVP', $linha)}}"><i class="fas fa-shopping-cart"></i></a>    
                                    <a class="btn botaoAzul" style="min-width:0px;" role="button" href="{{route('editarLinha', $linha)}}"><i class="fas fa-edit"></i></a>                                                                                                            
                                    @if(auth('funcionario')->user()->is_admin == 1)
                                    <a class="btn btn-danger delete" style="min-width:0px;" data-toggle="modal" data-target="#confirmacaoExclusao" role="button" data-id ="{{ $linha['codigo'] }}" data-nome ="{{ $linha['codigo'] }}"><i class="fas fa-trash"></i></a>
                                    @endif
                                </td>
                            </tr>
                            @endforeach                        
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
        
    <div class="modal fade" id="confirmacaoExclusao" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #F9C536">
          <h5 class="modal-title" id="exampleModalLabel">Exclusão </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('linha.apagar')}}" id="deleteForm" method="post">
          @csrf
          @method('DELETE')
          <div class="modal-body">
            <p> Deseja realmente apagar a linha <span id="linha_span" name="linha_span"></span> e todas as suas ligações com trechos?                    
            <input type="hidden" name="codigo" id="codigo" value=""  readonly style= "border: none;">            
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn botaoAmarelo" data-dismiss="modal">Cancelar</button>
            <button type="sumbmit" class="btn botaoAzul">Apagar</button>
          </div>
        </form>
        
      </div>
    </div>
  </div>
@endsection