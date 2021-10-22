@extends('app')

@section('title', 'Consultar Linhas - ')

@section('content')

    @section('usaMigalha', TRUE)
    @section('nomeMigalha1', 'Dashboard')
    @section('rotaMigalha1') {{route('inicial_func')}} @endsection
    @section('nomeMigalha2', 'Consultar Pasagens')
    @section('rotaMigalha3') {{ route('confirmacao') }} @endsection
    @section('nomeMigalha3', 'Editar')    
    @section('linkM2', 'ativado')
    @section('estiloMigalha2', 'migalhaRetanguloAtiva')
    @section('estiloMigalhaT2', 'migalhaTrianguloAtiva')
    
    <style>
        .espaco{
            margin-top:2em;
            margin-left:1em;
        }
    </style>
    
    <div class="container">
        <div class="row">
            <h3>Consulta de Linhas</h3>            
        </div>
        <div class="row-xl">
            <div class="card card-default">
                <div class="card-body">                    
                        <div class="row espaco">
                        <div class="col-sm-4">
                            <span>Definir tipo de busca: </span>
                                <select class="form-control">
                                    <option>Nome</option>
                                    <option>Código</option>
                                </select>
                        </div>                            
                        </div>
                        <form method="POST" action="{{ route('consulta') }}" class="form">
                        @csrf 
                        <div class="row espaco">                            
                                <div class="col-sm-4">                                
                                    <span>Cidade de Partida: </span>
                                    <input id="cidade_partida" name="cidade_partida" class="form-control"/>
                                </div>
                                <div class="col-sm-4">
                                    <span>Cidade de Destino: </span>
                                    <input id="cidade_destino" name="cidade_destino" class="form-control">
                                </div>
                                <div class="col-sm-4">
                                    <span>Data de Partida: </span>
                                    <input id="data_partida" class="form-control">
                                </div>
                        </div>
                        
                        <div class="row espaco">
                            <div class="col-sm-4">                                
                                
                                    <input class="form-check form-check-inline" type="checkbox" name="tipoLinha" value="" id="opcao1">
                                    <label class="form-check-label" style="margin-right:1em;">Linha Comum</label>
                                        
                                        
                                    <input class="form-check form-check-inline" style="margin-left:1em;" type="checkbox" name="tipoLinha" value="" id="opcao2">
                                    <label class="form-check-label"">Linha Direta</label>
                                    
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
                        </tr>
                        </thead>
                      <tbody>                        
                            @foreach ($linhas as $linha)
                            <tr>
                             <th scope="row">{{ $linha['codigo']}}</th>
                                <td> {{ $linha['partida']}} </td>
                                <td> {{ $linha['destino']}} </td>
                                <td> {{ $linha['preco']}} </td>
                                @if ($linha['tipo'] == 1 )
                                    <td> Direta </td>
                                @else
                                    <td> Comum </td>
                                @endif
                            </tr>
                            @endforeach                        
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
        
@endsection