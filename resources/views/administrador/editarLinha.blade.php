@extends('app')

@section('title', 'Editar linha:')

@section('content')
<link href="/css/estiloEdita.css" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/icon?family=Material+Icons">

<div class="container" id="contPrincipal">
    <h4 class="header">Editar linha:</h4>
    <div class="card">
        <div class="card">
            <div class="card-body">
                <form action="" method="post">
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
                        <input type="text" class="form-control" id="precoLinha" name = "preço" disabled > 
                    </div>
                    <div class="form-group">
                        <label for="horarioPartida">Horario de Partida: </label>
                        <input type="text" class="form-control" id="horarioPartida" name = "hPartida" disabled > 
                    </div>
                    <div class="form-group">
                        <label for="horarioChegada">Horario de Chegada: </label>
                        <input type="text" class="form-control" id="horarioChegada" name = "hChegada" disabled> 
                    </div>
                    <div class="form-group">
                        <label for="horarioChegada">Quantidade de vagas: </label>
                        <input type="text" class="form-control" id="qntdVagas" name = "vagas" disabled> 
                    </div>

                    
                </form>
            </div>
            <div class="btnBaixo">
                <button type="button" class="botao botaoAzul" id="btnResetar">Resetar </button>
                <button type="submit" class="botao botaoAmarelo" id="btnSalvar">Salvar Alterações</button>
            </div>
            
        </div>
        

    </div>
</div>
@endsection