@extends('app')

@section('title', 'Editar linha:')

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
@section('linkM3', 'ativado')
@section('estiloMigalha3', 'migalhaRetanguloAtiva')
@section('estiloMigalhaT3', 'migalhaTrianguloAtiva')
@section('estiloMigalhaUltimo', 'migalhaTrianguloAtiva')   


<link href="/css/estiloEdita.css" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/icon?family=Material+Icons">

<div class="container" id="contPrincipal">
    <h4 class="header">Editar linha:</h4>
    <div class="card">
        <div class="card">
            <div class="card-body">
                <form action="{{route('editarLinha.editar')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="cidadeOrigem">Cidade Origem: </label>
                        <input type="text" class="form-control" id="cidadeOrigem" name = "origem" > 
                    </div>
                    <div class="form-group">
                        <label for="cidadeDestino">Cidade Destino: </label>
                        <input type="text" class="form-control" id="cidadeDestino" name = "destino" > 
                    </div>
                    <div class="form-group">
                        <label for="tipoLinha">Tipo Linha: </label>
                        <select name="tipo" id = "tipoLinha" class="form-control">
                            <option value="Comum">Linha Comum</option>
                            <option value="Direta">Linha Direta</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="precoLinha">Preço da Linha: </label>
                        <input type="text" class="form-control" id="precoLinha" name = "preço"  > 
                    </div>
                    <div class="form-group">
                        <label for="horarioPartida">Horario de Partida: </label>
                        <input type="text" class="form-control" id="horarioPartida" name = "hPartida"  > 
                    </div>
                    <div class="form-group">
                        <label for="horarioChegada">Horario de Chegada: </label>
                        <input type="text" class="form-control" id="horarioChegada" name = "hChegada" > 
                    </div>
                    <div class="form-group">
                        <label for="horarioChegada">Quantidade de vagas: </label>
                        <input type="text" class="form-control" id="qntdVagas" name = "vagas" > 
                    </div>
                    <div class="form-group">
                        <label for="horarioChegada"> Dias da semana: </label><br>

                        <label class="form-check-label">Dom</label>
                        <input class="form-check form-check-inline" style="margin-right:1em;" type="checkbox" name="domingo" value="0" checked>

                        
                        <label class="form-check-label">Seg</label>   
                        <input class="form-check form-check-inline" style="margin-right:1em;" type="checkbox" name="segunda" value="1" checked>

                        
                        <label class="form-check-label">Ter</label>
                        <input class="form-check form-check-inline" style="margin-right:1em;" type="checkbox" name="terça" value="2" checked>

                        
                        <label class="form-check-label">Qua</label>   
                        <input class="form-check form-check-inline" style="margin-right:1em;" type="checkbox" name="quarta" value="3" checked>

                        
                        <label class="form-check-label">Qui</label>   
                        <input class="form-check form-check-inline" style="margin-right:1em;" type="checkbox" name="quinta" value="4" checked>

                        
                        <label class="form-check-label">Sex</label>
                        <input class="form-check form-check-inline" style="margin-right:1em;" type="checkbox" name="sexta" value="5" checked>

                       
                        <label class="form-check-label">Sab</label> 
                        <input class="form-check form-check-inline" style="margin-right:1em;" type="checkbox" name="sabado" value="6" checked>  
                        
                    </div>

                    <div class="btnBaixo">
                        <button type="button" class="botao botaoAzul" id="btnResetar">Resetar </button>
                        <button type="submit" class="botao botaoAmarelo" id="btnSalvar">Salvar Alterações</button>
                    </div>
                </form>
            </div>
           
            
        </div>
        

    </div>
</div>
@endsection