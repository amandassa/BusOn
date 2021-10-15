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
        .row{
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
                        <div class="row">
                        <div class="col-sm-4">
                            <span>Definir tipo de busca: </span>
                                <select class="form-control">
                                    <option>Nome</option>
                                    <option>Código</option>
                                </select>
                        </div>                            
                        </div>
                            
                        <div class="row">                            
                                <div class="col-sm-4">                                
                                    <span>Cidade de Partida: </span>
                                    <input id="cidade_partida" class="form-control"/>
                                </div>
                                <div class="col-sm-4">
                                    <span>Cidade de Destino: </span>
                                    <input id="cidade_destino" class="form-control">
                                </div>
                                <div class="col-sm-4">
                                    <span>Data de Partida: </span>
                                    <input id="data_partida" class="form-control">
                                </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-4">                                
                                
                                    <input class="form-check form-check-inline" type="radio" name="tipoLinha" value="" id="opcao1">
                                    <label class="form-check-label">Comum</label>
                                    <input class="form-check form-check-inline" type="radio" name="tipoLinha" value="" id="opcao2">
                                    <label class="form-check-label"">Direta</label>
                                        <input class="form-check form-check-inline" type="radio" name="tipoLinha" value="" id="opcao3">
                                    <label class="form-check-label">Todas</label>                                  
                                
                            </div>
                            <div class="col-sm-4">                                
                            </div>
                            <div class="col-sm-4" style="text-align:right;">
                                <button class="botao botaoAzul" type="button">Buscar</button>
                            </div>
                        </div>
                    </div>                
            </div>
        </div>
    </div>
        
@endsection