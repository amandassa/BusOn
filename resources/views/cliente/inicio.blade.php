@extends('app')
@section('title', 'Home')
@section('content')
<link href="/css/estiloPaginas.css" rel="stylesheet">
<link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>

<script type="text/javascript">
    
    $(document).ready(function() {                
        var trechos_partida = <?php echo $trechos_partida; ?>;
        var trechos_chegada = <?php echo $trechos_chegada; ?>;
        
        function onSelectItem(item, element) {
        $('#output').html(
            'Element <b>' + $(element).attr('id') + '</b> was selected<br/>' +
            '<b>Value:</b> ' + item.value + ' - <b>Label:</b> ' + item.label
        );
        }
        $('#cidade_partida').autocomplete({
        source: trechos_partida,
        onSelectItem: onSelectItem,
        highlightClass: 'text-danger',
        treshold: 2,
        });
        $('#cidade_destino').autocomplete({
        source: trechos_chegada,
        onSelectItem: onSelectItem,
        highlightClass: 'text-danger',
        treshold: 2,
        });
    });
</script>

<div class="container">    
    <h4 class="titulo">Página Inicial</h4>
    <div class="card"> 
        <div class="barraCentral barra"> <!--BARRA CENTRAL-->
        <form method="POST" action="{{route('selecao')}}" class="form">
        @csrf
        <div class="divisaoPrimaria">                
                <div class="divisaoBase">
                    <div class="divisaoEntrada">                          
                        <span class="border">
                            <p class="text-center">
                                <div class="row justify-content-center">
                                    <div class="col-sm-6">
                                        <label>Cidade Partida:</label>
                                        <input class="form-control" type="text" size="55" placeholder="Qual a cidade de partida?" name="cidade_partida" id="cidade_partida">
                                    </div>
                                </div>
                                
                            </p>
                        </span>                                               
                    </div>
                    <div class="divisaoEntrada">                                                
                        <p class="text-center">
                            <div class="row justify-content-center">
                                <div class="col-sm-6">
                                <label>Cidade Chegada:</label>
                                <input class="form-control" type="text" size="55" placeholder="Qual a cidade de destino?" name="cidade_destino" id="cidade_destino">
                                </div>
                            </div> 
                        </p>                        
                    </div>
                    <div class="divisaoEntrada">
                        <p class="text-center"><label class="legenda" for="cidadeDestino">Quando pretende realizar sua viagem?</label></p>  
                        <p class="text-center"><input class="entradaTexto" type="date" size="20" name=dataPartida id=dataPartida></p>                        
                    </div>        
                    <div class="divisaoControle">
                        <p class="text-center"><button class="botao botaoAmarelo" name="buscarLinhas" value="buscarLinhas" id="buscarLinhas">Buscar</button></p>                        
                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>

@endsection  