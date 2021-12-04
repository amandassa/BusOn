@extends('app')
@section('title', 'Home')
@section('content')
<link href="/css/estiloPaginas.css" rel="stylesheet">
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
                                        <input class="form-control" type="text" size="55" placeholder="Qual a cidade de partida?" name="cidade_partida" id="cidadePartida">
                                    </div>
                                </div>
                                
                            </p>
                        </span>                                               
                    </div>
                    <div class="divisaoEntrada">                                                
                        <p class="text-center">
                            <div class="row justify-content-center">
                                <div class="col-sm-6">
                                     <input class="form-control" type="text" size="55" placeholder="Qual a cidade de destino?" name="cidade_destino" id="cidadeDestino">
                                </div>
                            </div> 
                        </p>                        
                    </div>

                    <div class="divisaoEntrada">
                        <p class="text-center"><label class="legenda" for="cidadeDestino">Quando pretende realizar sua viagem?</label></p>  
                        <p class="text-center"><input class="entradaTexto" type="date" size="20" name="data_partida" id="dataPartida"></p>                        
                    </div>        
                    
                    <div class="row justify-content-center">                  
                            
                        <input class="form-check form-check-inline" style="margin-right:1em;" type="checkbox" name="tipoLinha_op1" value="0" checked>
                        <label class="form-check-label">Linha Comum</label>
                            
                        <input class="form-check form-check-inline" style="margin-left:1em;" type="checkbox" name="tipoLinha_op2" value="1" checked>
                        <label class="form-check-label">Linha Direta</label>
                                
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