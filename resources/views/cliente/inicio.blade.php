@extends('app')
@section('title', 'Home')
@section('content')
<link href="/css/estiloPaginas.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>


<script type="text/javascript">
    
    $(document).ready(function() {                
        var trechos_partida = <?php echo $trechos_partida; ?>;
        var trechos_chegada = <?php echo $trechos_chegada; ?>;
        document.getElementById('cidade_partida').placeholder = trechos_partida[0];
        document.getElementById('cidade_destino').placeholder = trechos_chegada[0];        

    
        $('#cidade_partida').autocomplete({
        source: trechos_partida,                
        treshold: 2,
        });

        $('#cidade_destino').autocomplete({
        source: trechos_chegada,                
        treshold: 2,
        });
    });
</script>

<style rel="stylesheet">
   .ui-autocomplete {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 160px;
  padding: 5px 0;
  margin: 2px 0 0;
  list-style: none;
  font-size: 14px;
  text-align: left;
  background-color: #ffffff;
  border: 1px solid #cccccc;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 4px;
  -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
  background-clip: padding-box;
}

.ui-autocomplete > li > div {
  display: block;
  padding: 3px 20px;
  clear: both;
  font-weight: normal;
  line-height: 1.42857143;
  color: #333333;
  white-space: nowrap;
}

.ui-state-hover,
.ui-state-active,
.ui-state-focus {
  text-decoration: none;
  color: #262626;
  background-color: #f5f5f5;
  cursor: pointer;
}

.ui-helper-hidden-accessible {
  border: 0;
  clip: rect(0 0 0 0);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: 1px;
}

</style>

<div class="container">        
        <div class="row justify-content-center">
            <div class="col-10">        
            <h5>Escolha para onde deseja ir</h5>                    
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
                                            <input class="form-control" type="text" placeholder="" name="cidade_partida" id="cidade_partida">
                                    </div>                                    
                                </div>
                                <div class="col-sm-4">
                                    <label for="data_partida">Data de partida:</label>
                                    <input class="form-control" type="date" name="data_partida" min="<?php echo date("Y-m-d")?>" value="<?php echo date("Y-m-d")?>" id="dataPartida"> 
                                </div>
                            </div>
                            <div class ="row justify-content-center"> 
                                <div class="col-5">
                                    <label for="cidade_chegada">Cidade de Chegada: </label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1" style="background-color:black;"><i class="fas fa-location-arrow" style="color:#F9C536;"></i></span>
                                        </div>
                                        <input class="form-control" type="text" placeholder="" name="cidade_destino" id="cidade_destino">                                        
                                    </div>                                    
                                    
                                </div>
                                <div class="col-4">
                                    <label for="tipo_linha">Tipo de Linha:</label><br>
                                    <input class="form-check form-check-inline" style="margin-right:1em;" type="checkbox" name="tipoLinha_op1" value="0" checked>
                                    <label class="form-check-label">Linha Comum</label><br>
                                    <input class="form-check form-check-inline" type="checkbox" name="tipoLinha_op2" value="1" checked>
                                    <label class="form-check-label">Linha Direta</label>
                                </div>
                            </div>
                            </div>
                            <div class="row justify-content-center">
                            <p class="text-center"><button class="botao botaoAmarelo" name="buscarLinhas" value="buscarLinhas" id="buscarLinhas">Buscar</button></p>                        
                            </div>
                            </form>
                    </div>
                </div>            
        </div>
        

</div>

       

@endsection  