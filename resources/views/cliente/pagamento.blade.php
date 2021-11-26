@extends('app')

@section('title', 'Pagamento - ')

@section('content')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.mask.js') }}"></script>
    
    
    <script>
    $(document).ready(function(){
        $("#cpf").mask("999.999.999-99");
        $("#numero_cartao").mask("9999 9999 9999 9999");
        $("#validade_cartao").mask("99/99");

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
    @section('rotaMigalha3') {{ route('confirmacao') }} @endsection
    @section('nomeMigalha3', 'Confirmação')    
    @section('linkM2', 'ativado')
    @section('estiloMigalha2', 'migalhaRetanguloAtiva')
    @section('estiloMigalhaT2', 'migalhaTrianguloAtiva')                
          
        
    <div class="container">
        <div class="row">
            <div class="col-sm">                
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
                                
                                <!--Boleto--> 
                                <form>
                                    <div class="form-group" id="boleto">
                                        <div class="container" style="padding-left:0px;">
                                            <div id="teste" class="row justify-content-md-center">
                                                <div class="col-sm-12">
                                                    <label> Nome do titular: </label>
                                                    <input id="nome_titular" type="text" class="form-control"/>
                                                </div>
                                            </div>
                                            <div id="teste" class="row justify-content-md-left" style="margin-top:1em;">
                                                <div class="col-sm-7">
                                                    <label> cpf do titular: </label>
                                                    <input id="cpf" name="cpf" type="text" class="form-control"/>
                                                </div>
                                                <div class="col-sm-5" >
                                                <center>
                                                    <label style="color:white;">Carlos me dá 10</label>
                                                    <button type="button" id="botao_gerar" class="botao botaoAmarelo" onClick="mostrar();"><i class="far fa-check-circle"></i> Gerar Boleto</button>                        
                                                </center>
                                                </div>                                                
                                            </div>
                                                <hr>
                                            <div id="divOpcoes" class="row justify-content-md-center">                
                                            <center>
                                                <div id="alerta" class="alert alert-success" role="alert" style="visibility:hidden;">
                                                Boleto gerado com sucesso!                                    
                                              </div>
                                                <button id="botao_baixar" class="botao botaoAzul" style="visibility:hidden;"><i class="fas fa-file-download"></i> Baixar PDF</button>
                                                <button id="botao_copiar" class="botao botaoAzul" style="visibility:hidden;"><i class="fas fa-copy"></i> Copiar Código de Barras</button>
                                            </center>
                                            </div>
                                    </div>
                                </div>
                                </form>

                                <div id="pix" style="font-size: medium">
                                    <p>Após clicar em Comprar Passagem o código QR Code será gerado para a efetuação do pagamento.</p>
                                    <p> <i class="fas fa-check-circle" style="color: green"></i>
                                          O código é válido por apenas 30 minutos. </p>
                                    <p> <i class="fas fa-check-circle" style="color: green"></i>
                                          O pedido só será confirmado após o pagamento. </p>
                                    <p> <i class="fas fa-check-circle" style="color: green"></i>
                                          Copie ou faça a leitura do código QR Code através do site ou app do seu banco. </p>

                                </div>
                                
                                 <!--Cartão--> 
                                <form>
                                    <div class="form-group" id="cartao">
                                        <div class="container" style="padding-left:0px;">
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <label>Número do Cartão:</label>
                                                    <input type="text" class="form-control" id="numero_cartao" placeholder="_ _ _ _  _ _ _ _  _ _ _ _  _ _ _ _">
                                                </div>
                                                    <div class="col-sm-4">
                                                        <label>Parcelas: </label>
                                                            <select class="form-control" id="parcelas">
                                                                <option>1x</option>
                                                                <option>2x</option>
                                                                <option>3x</option>
                                                                <option>4x</option>
                                                                <option>5x</option>
                                                                <option>6x</option>
                                                                <option>7x</option>
                                                                <option>8x</option>
                                                                <option>9x</option>
                                                                <option>10x</option>
                                                                <option>11x</option>
                                                                <option>12x</option>
                                                            </select>
                                                    </div>
                                            </div>
                                            <br>
                                            <div class="row"> <!-- Segunda Linha -->
                                                <div class="col-sm-6">
                                                    <label>Validade:</label>
                                                    <input type="text" class="form-control" id="validade_cartao" placeholder="mm/aaaa">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label>Código de Segurança (CCV):</label>
                                                    <input type="text" class="form-control" id="ccv_cartao" placeholder="_ _ _ _"  maxlength = "3">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row"> <!-- TerceiraLinha -->
                                                <div class="col-sm">
                                                    <label>Nome do titular:</label>
                                                    <input type="text" class="form-control" id="validade_cartao">
                                                </div>                    
                                            </div>
                                        </div>                
                                    </div>
                                </form>
                                                                    
                                                                   
                                    
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
                                <p class="textoAmarelo" style="text-align:left; font-size:18px;">Feira de Santana >>> Jaguaquara</p>
                                <p class="textoPreto" style="text-align:left; font-size:10px;">25/08/2021 às 18:00hrs</label>
                                <ol>
                                    <li>Assento linha comum R$58,00</li>
                                    <li>Seguro de viagem (Obrigatório) R$5,60</li>    
                                </ol>                                
                                <hr/>    
                                <p><b>Subtotal:</b></p>
                                <h4 class="textoAmarelo" style="text-align:left; font-size:32px; font-weight: bolder;">R$65,00</h4>
                            </div>
                        </div>
                            <br>
                            <button class="botao botaoAmarelo" style="width: 100%;height:60px;" ><i class="fas fa-check-circle"></i> Comprar Passagem</button>
                    </div>
                        
                </section>                
            </div>
        </div>
    </div>    
@endsection
