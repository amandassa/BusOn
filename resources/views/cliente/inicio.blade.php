@extends('app')
@section('title', 'Home')
@section('content')
<link href="/css/estiloPaginas.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


<script type="text/javascript">
    
    $(document).ready(function() {                
        var trechos_partida = <?php echo $trechos_partida; ?>;
        var trechos_chegada = <?php echo $trechos_chegada; ?>;
        document.getElementById('cidade_partida').placeholder = 'Ex: '+trechos_partida[0];
        document.getElementById('cidade_destino').placeholder = 'Ex: '+trechos_chegada[0];        

    
        $('#cidade_partida').autocomplete({
        source: trechos_partida,                
        treshold: 2,
        });

        $('#cidade_destino').autocomplete({
        source: trechos_chegada,                
        treshold: 2,
        });
        $('div.checkbox-group.required :checkbox:checked').length > 0

        
    });

    function inverter_cidades(){
        //troca os valores da cidade destino e cidade partida
        var num1 = document.getElementById("cidade_partida").value;
        var num2 = document.getElementById("cidade_destino").value;
        
        //guarda o estilo do botão de inversao
        var estilo = document.getElementById("btn_inverter_icon").style;
        
        //rotaciona o botao, dado um tempo de 1 retorna a posicao original
        document.getElementById("btn_inverter_icon").style =  "transition: 1s; transform: rotate(180deg);"
        setTimeout(function sayHi() {
            document.getElementById("btn_inverter_icon").style = estilo;

            //atribui os valores trocados as cidades de partida e destino
            document.getElementById('cidade_partida').value = num2; 
            document.getElementById('cidade_destino').value = num1;
        }, 1000)
    }
</script>

<link rel="stylesheet" type="text/css" href="{{URL::asset('/css/estiloAutocomplete.css')}}">

<div class="container">   
      
    <div class="row justify-content-center">
        <div class="col-10">                
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{route('selecao')}}" class="form">
                        @csrf
                        <div class="row justify-content-center">
                                <div class="col-sm-5">
                                    <label for="cidade_partida">Cidade de Partida:</label><br>                                    
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1" style="background-color:#F9C536;"><i class="fas fa-location-arrow" style="color:black;"></i></span>
                                        </div>
                                            <input class="form-control" type="text" placeholder="" name="cidade_partida" id="cidade_partida" required>
                                    </div>                                    
                                </div>
                                <div class="col-sm-4">
                                    <label for="data_partida">Data de partida:</label>
                                    <input class="form-control" type="date" name="data_partida" min="<?php echo date("Y-m-d")?>" value="<?php echo date("Y-m-d")?>" id="dataPartida" required> 
                                </div>
                            </div>
                            <div class ="row justify-content-center"> 
                                <div class="col-5">
                                    <label for="cidade_chegada">Cidade de Destino: </label>                                    
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1" style="background-color:black;"><i class="fas fa-location-arrow" style="color:#F9C536;"></i></span>
                                        </div>
                                        <input class="form-control" type="text" placeholder="" name="cidade_destino" id="cidade_destino" required>                                        
                                    </div>                                    
                                    
                                </div>
                                <div class="col-4 ">
                                    <label for="tipo_linha">Tipo de Linha:</label><br>
                                    <div class="checkbox-group" required>
                                        <input class="form-check form-check-inline" style="margin-right:1em;" type="checkbox" name="tipoLinha_op1" id="tipoLinha_op1" value="0" checked>
                                        <label class="form-check-label" for="tipoLinha_op1">Linha Comum</label>
                                        <br>
                                        <input class="form-check form-check-inline" type="checkbox" name="tipoLinha_op2" id="tipoLinha_op2" value="1" checked>
                                        <label class="form-check-label" for="tipoLinha_op2">Linha Direta</label>
                                    </div>
                                </div>
                            </div>
                        <br>
                        <div class="row justify-content-center">
                            <p class="text-center"><button class="botao botaoAmarelo" name="buscarLinhas" value="buscarLinhas" id="buscarLinhas">Buscar</button></p>                        
                        </div>
                    </form>
                </div>
            </div>
        </div>            
    </div>
</div>

       

@endsection  