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
@if ($errors->any())
<div class="alert alert-warning">
    @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach
</div>
@endif
@if (session('success'))
    <div class="alert alert-success alert-block">
        {{session ('success')}}
    </div>
@endif
@if (session('error'))
    <div class="alert alert-danger">
        {{session ('error')}}
    </div>
@endif
<div class="container" id="contPrincipal">
    <h4 class="header">Editar linha:</h4>
        <div class="card">
            <div class="card-body">
                <form action="{{route('editarLinha.editar')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="codigoLinha">Código: </label>
                        <input type="text" class="form-control" id="codigoLinha" name = "codigo" value="{{$linhas['codigo']}}" readonly  > 
                    </div>
                    <div class="form-group">
                        <label for="cidadePartida">Cidade Origem: </label>
                        <input type="text" class="form-control" id="cidadePartida" name = "partida" value="{{$linhas['partida']}}" disabled> 
                    </div>
                    <div class="form-group">
                        <label for="cidadeDestino">Cidade Destino: </label>
                        <input type="text" class="form-control" id="cidadeDestino" name = "destino"  value="{{$linhas['destino']}}" disabled> 
                    </div>
                    <div class="form-group">
                        <label for="tipoLinha">Tipo Linha: </label>
                        <select name="tipo" id = "tipoLinha" class="form-control"  value="{{$linhas['tipo']}}">
                            @if ($linhas['tipo'] == 1 )
                                <option value="true">Linha Direta</option>
                                <option value="false">Linha Comum</option>
                            @else
                                <option value="false">Linha Comum</option>
                                <option value="true">Linha Direta</option>
                            @endif
                           
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="precoLinha">Preço da Linha: </label>
                        <input type="text" class="form-control" id="precoLinha" name = "preco"  value=" {{$linhas['preco']}}" disabled>                        
                    </div>
                    <div class="form-group">
                        <label for="horarioPartida">Horário de Partida: </label>
                        <input type="time" class="form-control" id="horarioPartida" name = "hPartida" value="{{$linhas['hPartida']}}" > 
                    </div>
                    <div class="form-group">
                        <label for="horarioChegada">Horário de Chegada: </label>
                        <input type="text" class="form-control" id="horarioChegada" name = "hChegada"                              
                        @if ($linhas['horario'] > "12:00:00")
                            value=" {{$linhas['horario']}} PM"
                        @else
                            value=" {{$linhas['horario']}} AM" 
                            
                        @endif  disabled> 
                    </div>
    
                    <div class="form-group">
                        <label for="horarioChegada">Quantidade de vagas: </label>
                        <input type="text" class="form-control" id="qntdVagas" name = "vagas" value=" {{$linhas['vagas']}}"> 
                    </div>
                    <div class="form-group">
                        <label for="horarioChegada"> Dias da semana: </label><br>
                        
                        <label class="form-check-label">Dom</label>
                        <input class="form-check form-check-inline" style="margin-right:1em;" type="checkbox" name="dias[]"  id="dom" value= "0"
                        @foreach(explode(';',$linhas['dias']) as $dias)
                            @if ($dias == 0)
                                checked
                            @endif 
                        @endforeach>
                        
                        
                        <label class="form-check-label">Seg</label>   
                        <input class="form-check form-check-inline" style="margin-right:1em;" type="checkbox" name="dias[]"  id="seg" value="1" 
                        @foreach(explode(';',$linhas['dias']) as $dias)
                            @if ($dias == 1)
                                checked
                            @endif 
                        @endforeach>

                        
                        <label class="form-check-label">Ter</label>
                        <input class="form-check form-check-inline" style="margin-right:1em;" type="checkbox" name="dias[]"  id="ter" value="2" 
                        @foreach(explode(';',$linhas['dias']) as $dias)
                            @if ($dias == 2)
                                checked
                            @endif 
                        @endforeach>

                        
                        <label class="form-check-label">Qua</label>   
                        <input class="form-check form-check-inline" style="margin-right:1em;" type="checkbox" name="dias[]"  id="qua" value="3" 
                        @foreach(explode(';',$linhas['dias']) as $dias)
                            @if ($dias == 3)
                                checked
                            @endif 
                        @endforeach>

                        
                        <label class="form-check-label">Qui</label>   
                        <input class="form-check form-check-inline" style="margin-right:1em;" type="checkbox" name="dias[]"  id="qui"    value="4" 
                        @foreach(explode(';',$linhas['dias']) as $dias)
                            @if ($dias == 4)
                                checked
                            @endif 
                        @endforeach>

                        
                        <label class="form-check-label">Sex</label>
                        <input class="form-check form-check-inline" style="margin-right:1em;" type="checkbox" name="dias[]"  id="sex" value="5" 
                        @foreach(explode(';',$linhas['dias']) as $dias)
                            @if ($dias == 5)
                                checked
                            @endif 
                        @endforeach>

                       
                        <label class="form-check-label">Sab</label> 
                        <input class="form-check form-check-inline" style="margin-right:1em;" type="checkbox"  name="dias[]"  id="sab" value="6"
                        @foreach(explode(';',$linhas['dias']) as $dias)
                            @if ($dias == 6)
                                checked
                            @endif 
                        @endforeach>  
                        
                    </div>

                    <div class="btnBaixo">
                        <button type="submit" class="botao botaoAzul" id="btnTrecho" name="trechos" value="6" href="{{route('buscarTrechos')}}">Editar trechos</button>
                        <button type="submit" class="botao botaoAzul" id="btnResetar" name="cancel" value="5" href="{{route('editarLinha')}}">Cancelar Alterações</button>
                        <button type="submit" class="botao botaoAmarelo" id="btnSalvar">Salvar Alterações</button>
                    </div>
                </form>
            </div>
           
            
        </div>
</div>




@endsection