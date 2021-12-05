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
    
    @push('js')
    <script>
        function desativacao() {
        $('#cidade_partida').attr('disabled','disabled');
            $('#cidade_destino').attr('disabled','disabled');
            $('#codigo_linha').attr('disabled','true');
            var opcao = $('#opcaoBusca').value;
            alert(opcao);
        if (opcao == "Código") {
            $('#cidade_partida').attr('disabled','disabled');
            $('#cidade_destino').attr('disabled','disabled');
            $('#codigo_linha').attr('disabled','true');
        } else {
            $('#cidade_partida').attr('disabled','true');
            $('#cidade_destino').attr('disabled','true');
            $('#codigo_linha').attr('disabled','disabled');
        }
        }        
    </script>
    @endpush
    
    <style>
        .espaco{
            margin-top:2em;
            margin-left:1em;
        }
    </style>
        
    <!-- 
        apresentação de mensagem de erros caso os campos do formulário estejam
        incompletos ou possuam informações que não passaram na validação
    -->
    
    
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
                                <select id="opcaoBusca" onchange="desativacao()" name="opcaoBusca" class="form-control">
                                    <option>Nome</option>
                                    <option>Código</option>
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
                                    <input type="date" id="data_partida" value="{{ old('data_partida') }}" name="data_partida" class="form-control">
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
                    <table class="table">
                        <thead>
                        <tr>
                          <th scope="col">Código</th>
                          <th scope="col">Cidade de Origem</th>
                          <th scope="col">Cidade de Destino</th>
                          <th scope="col">Preço</th>
                          <th scope="col">Tipo</th>
                          <th scope="col"> Ação</th>
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
                                    <a class="btn botaoAmarelo" style="min-width:0px;" role="button" href="{{route('venderPassagens', $linha)}}"><i class="fas fa-shopping-cart"></i></a>    
                                    <a class="btn botaoAzul" style="min-width:0px;" role="button" href="{{route('editarLinha', $linha)}}"><i class="fas fa-edit"></i></a>                                                                        
                                    <a class="btn btn-danger" style="min-width:0px;" role="button" href="{{route('editarLinha', $linha)}}"><i class="fas fa-trash"></i></a>                                    
                                </td>
                            </tr>
                            @endforeach                        
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
        
@endsection