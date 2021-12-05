@extends('app')

@section('title', 'Editar Trechos')

@section('content')

<link href="/css/estiloTrecho.css" rel="stylesheet"> 
<script type="text/javascript">


    function selectUpdate(trecho, add){
        old_cod = document.getElementById("checked");
        cod_add = trecho['codigo'].toString();
        cod_add = cod_add.concat(",");
        
        if(add){
            cod_add = cod_add.concat(old_cod.value);
            old_cod.value = cod_add;
        }else{
            old_cod.value = old_cod.value.replace(cod_add);
            if(old_cod.value == "undefined") old_cod.value = "";
        }
    }


    function Mudarestado(el) {
    var display = document.getElementById(el).style.display;
    if (display == "none")
        document.getElementById(el).style.display = 'block';
    else
        document.getElementById(el).style.display = 'none';
    }

    
</script>


<div class="container" id="contPrincipal">
        <div class="row">         
            <h3>Trechos da Linha: </h3>            
        </div>        
        <div class="row-xl">
                
            @if(session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
    
            <!-- Tabela de resultados de consulta -->
            <div class="card" >       
                    <div class="card-body">
                        <table class="table" id="tb1" style="overflow-y: scroll;max-height:800px;">
                            <thead>
                            <tr>
                                <th scope="col">Código</th>
                                <th scope="col">Cidade de Origem</th>
                                <th scope="col">Cidade de Destino</th>
                                <th scope="col">Preço</th>
                                <th scope="col">Duração de viagem</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Ordem</th>
                            </tr>
                            </thead>
                        <tbody>                        
                                @foreach ($trechos as $trecho)
                                <tr>
                                <th scope="row">{{ $trecho->codigo }}</th>
                                    <td> {{ $trecho->cidade_partida }} </td>
                                    <td> {{ $trecho->cidade_chegada }} </td>
                                    <td>R$ {{ $trecho->preco }} </td>
                                    <td> {{ $trecho->duracao }} </td>
                                    <td>
                                        <button type="submit" class="botao botaoAzul" id="btnEditar" onclick="Mudarestado('edit'), Mudarestado('edit1')">Editar</button>
                                    </td>
                                    <td>1 </td>
                                </tr>
                                @endforeach                        
                        </tbody>
                        </table>

                        <div class="btnBaixo">
                            <div class="direita">
                                <button type="submit" class="botao botaoAmarelo" id="btnAdicionar" onclick="Mudarestado('selecao'), Mudarestado('selecao1')">Adicionar Trecho</button>
                            </div>
                            
                        </div>
                    </div>
                </div>
        </div>       

        <div class="row" style="display: none;" id="selecao">         
            <h3>Seleção de Trechos: </h3>            
        </div>        
        <div class="row-xl" style="display: none;" id="selecao1">
                
            @if(session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
    
            <!-- Tabela de resultados de consulta -->
            <div class="card" >       
                    <div class="card-body">
                        <table class="table" id="tb2" style="overflow-y: scroll;max-height:800px;">
                            <thead>
                            <tr>
                                <th scope="col">Código</th>
                                <th scope="col">Cidade de Origem</th>
                                <th scope="col">Cidade de Destino</th>
                                <th scope="col">Preço</th>
                                <th scope="col">Duração de viagem</th>
                                <th scope="col">Selecionar</th>
                                <th scope="col">Editar</th>
                            </tr>
                            </thead>
                        <tbody>                        
                                @foreach ($trechos as $trecho)
                                <tr>
                                <th scope="row">{{ $trecho->codigo }}</th>
                                    <td> {{ $trecho->cidade_partida }} </td>
                                    <td> {{ $trecho->cidade_chegada }} </td>
                                    <td>R$ {{ $trecho->preco }} </td>
                                    <td> {{ $trecho->duracao }} </td>
                                    <td>
                                        <input type="checkbox" onclick="selectUpdate(JSON.parse('{{ json_encode($trecho)}}'), this.checked);">
                                    </td>
                                    <td>
                                        <button type="submit" class="botao botaoAzul" id="btnEditar" onclick="Mudarestado('edit'), Mudarestado('edit1')">Editar</button>
                                    </td>
                                </tr>
                                @endforeach                        
                        </tbody>
                        </table>
                        <form method="POST" class="form" action="">
                            @csrf
                            <div class="btnBaixo">
                                <div class="direita">
                                    <input type="hidden" id="checked" name="checked">
                                    <button type="submit" id="btnSelecionar" class="botao botaoAmarelo" >Selecionar</button>
                                </div>
                            </div>
                        </form> 
                    </div>
                </div>
        </div>

        <div class="row" style="display: none;" id="edit">         
            <h3>Editar Trecho:</h3>            
        </div>        
        <div class="card" style="display: none;" id="edit1">
            <div class="card-body">
                <form action="{{route('editarLinha.editar')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="codigoLinha">Código: </label>
                        <input type="text" class="form-control" id="codigoLinha" name = "codigo" value="" readonly  > 
                    </div>
                    <div class="form-group">
                        <label for="cidadePartida">Cidade Origem: </label>
                        <input type="text" class="form-control" id="cidadePartida" name = "partida" value="" > 
                    </div>
                    <div class="form-group">
                        <label for="cidadeDestino">Cidade Destino: </label>
                        <input type="text" class="form-control" id="cidadeDestino" name = "destino"  value="" > 
                    </div>
                    <div class="form-group">
                        <label for="precoLinha">Preço do Trecho: </label>
                        <input type="text" class="form-control" id="precoLinha" name = "preco"  value="" >                        
                    </div>
                    <div class="form-group">
                        <label for="duracaoViage,">Duração Viagem: </label>
                        <input type="time" class="form-control" id="duracaoViagem" name = "horario" value="" > 
                    </div>
                    <div class="form-group">
                        <label for="Ordem">Ordem Trecho: </label>
                        <input type="text" class="form-control" id="ordemT" name = "ordem" value="" > 
                    </div>

                    <div class="btnBaixo">
                        <div class="direita">
                            <button type="submit" class="botao botaoAzul" id="btnResetar" name="cancel" value="" href="">Cancelar Alterações</button>
                            <button type="submit" class="botao botaoAmarelo" id="btnSalvar">Salvar Alterações</button>
                        </div>
                        
                    </div>
            
                </form>
            </div>
            
        </div>


</div>
@endsection
