@extends('app')

@section('title', 'Pagamento - ')

@section('content')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.mask.js') }}"></script>
    
    
    <script>
    $(document).ready(function(){
        $("#cpf").mask('999.999.999-99');
        $("#numero_cartao").mask('9999 9999 9999 9999');
        $("#validade_cartao").mask('99/99');              
        
        $("#pagamento").submit(function() {
            $("#cpf").unmask();
            $("#numero_cartao").unmask();
        });
        document.getElementById("boleto").style.display="none";
        document.getElementById("pix").style.display="none";
    });
    
    function mostrar() 
    {
        var alerta = document.getElementById('alerta');
        var nome = document.getElementById('nome_titular');
        var cpf = document.getElementById('cpf');
        if (nome.value != null && cpf.value != null) 
        {
            document.getElementById('alerta').style.visibility = 'visible';
            document.getElementById('botao_baixar').style.visibility = 'visible';
            document.getElementById('botao_copiar').style.visibility = 'visible';            
        }
    }

    function alterar(opcao)
    {
        document.getElementById('opcao').value = opcao;
        switch (opcao) {
                case 1:
                    document.getElementById("bt_1").className = "botao botaoSelecionado";
                    document.getElementById("bt_2").className = "botao botaoNormal";
                    document.getElementById("bt_3").className = "botao botaoNormal";
                    document.getElementById("cartao").style.display="block"
                    document.getElementById("boleto").style.display="none";
                    document.getElementById("pix").style.display="none";
                break;
                case 2:   
                    document.getElementById("bt_2").className = "botao botaoSelecionado";
                    document.getElementById("bt_1").className = "botao botaoNormal";
                    document.getElementById("bt_3").className = "botao botaoNormal";           
                    document.getElementById("boleto").style.display="block";
                    document.getElementById("cartao").style.display="none";
                    document.getElementById("pix").style.display="none";
                break;
                case 3:
                    document.getElementById("bt_3").className = "botao botaoSelecionado";
                    document.getElementById("bt_2").className = "botao botaoNormal";
                    document.getElementById("bt_1").className = "botao botaoNormal";           
                    document.getElementById("boleto").style.display="none";
                    document.getElementById("cartao").style.display="none";
                    document.getElementById("pix").style.display="block";
                break;
            }
    }


    </script>
       

    @section('usaMigalha', TRUE)
    @section('nomeMigalha1', 'Seleção de Passagem')
    @section('rotaMigalha1') {{route('selecao')}} @endsection
    @section('nomeMigalha2', 'Pagamento')
    @section('rotaMigalha3') @endsection
    @section('nomeMigalha3', 'Confirmação')    
    @section('linkM2', 'ativado')
    @section('estiloMigalha2', 'migalhaRetanguloAtiva')
    @section('estiloMigalhaT2', 'migalhaTrianguloAtiva')                
          
        
    <div class="container">
        <div class="row">
            <div class="col-sm">  
            @if ($errors->any())
            <div class="alert alert-danger alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                <ul>
                    @foreach($errors->all() as $error)
                        <li><strong>{{ $error }}</strong></li>
                    @endforeach
                </ul>
            </div>
            @endif                          
                <section class="content">
                <h3>Forma de Pagamento</h3>
                    <div class="container-fluid">
                        <div class="card card-default">                        
                            <div class="card-body">               
                                <label>Selecione a Forma de Pagamento: </label> <br>                                
                                <button id="bt_1" class="botaoSelecionado" onClick="alterar(1)">
                                  <i class="fas fa-credit-card"></i>
                                    Cartão de Crédito</button>                                
                                <button id="bt_2" class="botaoNormal" onClick="alterar(2)">
                                  <i class="fas fa-barcode"></i>
                                    Boleto</button>                                
                                <button  id="bt_3" class="botaoNormal" onClick="alterar(3);">
                                  <i class="fas fa-mobile-alt"></i>
                                    Pix</button>
                                <hr/>     
                                
                                <form  class="form" action="{{ route('confirmacao', ['linha' => $linha]) }}" method="post" id="pagamento">
                                @csrf               
                                <input type='hidden' class="form-group" name='opcao' id='opcao' value='1'/>              

                                <!--Boleto--> 
                                <div id="boleto" style="font-size: medium; text-align:justify">
                                    <p>Após clicar em Comprar Passagem você será redirecionado para uma página em que será possível acessar o boleto gerado.</p>
                                    <p> <i class="fas fa-check-circle" style="color: green"></i>
                                          Até que seu pagamento seja confirmado sua passagem não está assegurada</p>
                                    <p> <i class="fas fa-check-circle" style="color: green"></i>
                                          Pagamentos com boleto são identificados em até 3 dias. </p>
                                </div>

                                <!--Pix-->                                   
                                <div id="pix" style="font-size: medium; text-align:justify">
                                    <p>Após clicar em Comprar Passagem o código QR Code e código de pagamento do Pix será gerado para a efetuação do pagamento.</p>
                                    <p> <i class="fas fa-check-circle" style="color: green"></i>
                                          Copie ou faça a leitura do código QR Code através do site ou app do seu banco. </p>
                                    <div class="form-group">
                                        <label>Chave Pix:</label>
                                        <input type="text" class="form-control" name="pix_pagador" id="pix_pagador" placeholder="Exemplo: cliente@gmail.com" style="max-width: 20rem"/>
                                        <small class="form-text text-muted">Nunca compartilharemos sua chave com outras pessoas.</small>
                                    </div>
                                </div>
                                                                
                                 <!--Cartão-->                                                                                                  
                                    <div class="form-group" id="cartao">
                                        <div class="container" style="padding-left:0px;">                             
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <label>Número do Cartão:</label>
                                                    <input type="text" class="form-control" name="numero_cartao" id="numero_cartao" placeholder="_ _ _ _  _ _ _ _  _ _ _ _  _ _ _ _">
                                                </div>
                                                    <div class="col-sm-4">
                                                        <label>Parcelas: </label>
                                                            <select class="form-control" name="parcela" id="parcela">
                                                                <option value="1">1x</option>
                                                                <option value="2">2x</option>
                                                                <option value="3">3x</option>
                                                                <option value="4">4x</option>
                                                                <option value="5">5x</option>
                                                                <option value="6">6x</option>
                                                                <option value="7">7x</option>
                                                                <option value="8">8x</option>
                                                                <option value="9">9x</option>
                                                                <option value="10">10x</option>
                                                                <option value="11">11x</option>
                                                                <option value="12">12x</option>
                                                            </select>
                                                    </div>
                                            </div>
                                            <br>
                                            <div class="row"> <!-- Segunda Linha -->
                                                <div class="col-sm-6">
                                                    <label>Validade:</label>
                                                    <input type="text" class="form-control" name="validade_cartao" id="validade_cartao" placeholder="mm/aaaa" />
                                                </div>
                                                <div class="col-sm-6">
                                                    <label>Código de Segurança (CCV):</label>
                                                    <input type="text" class="form-control" name="ccv_cartao" id="ccv_cartao" placeholder="_ _ _ _"  maxlength = "3" />
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row"> <!-- TerceiraLinha -->
                                                <div class="col-sm">
                                                    <label>Nome do titular:</label>
                                                    <input type="text" class="form-control" name="nome_titular" id="nome_titular" />
                                                </div>                    
                                            </div>
                                        </div>                
                                    </div>                                                                                                                                                                                                       
                            </div>
                        </div>
                    </div>
                </section>        
            </div>
            <div class="col-sm">
                <h3> Resumo da Compra</h3>
                <section class="content">
                    <div class="container-fluid">
                        <div class="card card-default">                        
                            <div class="card-body">                            
                                <p class="textoAmarelo" style="text-align:left; font-size:18px;">{{ $linha['partida']}} >>> {{ $linha['destino']}}</p>
                                <label class="textoPreto" style="text-align:left; font-size:12px;">Saída: {{ $linha['data_partida']}} às {{ $linha['hora_partida'] }}</label><br>
                                <label class="textoPreto" style="text-align:left; font-size:12px;">Previsão de chegada: {{ $linha['data_chegada']}} às {{ $linha['hora_chegada'] }}</label>
                                <ol>
                                    <li>Assento linha {{ ($linha['tipo']?"direta":"comum") }} R$ {{ $linha['preco']}}</li>                                    
                                </ol>                                
                                <hr/>    
                                <p><b>Subtotal:</b></p>
                                <h4 class="textoAmarelo" style="text-align:left; font-size:32px; font-weight: bolder;">R$ {{$linha['preco']}}</h4>
                            </div>
                        </div>
                            <br>                        
                            <button type="submit" class="botao botaoAmarelo" style="width: 100%;height:60px;" ><i class="fas fa-check-circle"></i>                                                        
                            Comprar Passagem                                                        
                        </button>                    
                        </div>
                        </form>
                </section>                
            </div>
        </div>
    </div>    
@endsection
