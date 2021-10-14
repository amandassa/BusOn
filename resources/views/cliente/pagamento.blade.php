@extends('app')

@section('title', 'Pagamento - ')

@section('content')

    @section('usaMigalha', TRUE)
    @section('nomeMigalha1', 'Seleção de Passagem')
    @section('rotaMigalha1') {{route('selecao')}} @endsection
    @section('nomeMigalha2', 'Pagamento')
    @section('rotaMigalha3') {{ route('confirmacao') }} @endsection
    @section('nomeMigalha3', 'Confirmação')    
    @section('linkM2', 'ativado')
    @section('estiloMigalha2', 'migalhaRetanguloAtiva')
    @section('estiloMigalhaT2', 'migalhaTrianguloAtiva')    
            
    <script>            
        function alterarOpcao(opcao){                        
            alert(opcao);            
        }
    </script>    
        
    <div class="container">
        <div class="row">
            <div class="col-sm">                
                <section class="content">
                <h3>Forma de Pagamento</h3>
                    <div class="container-fluid">
                        <div class="card card-default">                        
                            <div class="card-body">               
                                <label>Selecione a Forma de Pagamento: </label> <br>                                    
                                <button id="bt_1" class="botaoSelecionado" onClick="alterarOpcao(1);">
                                  <i class="fas fa-credit-card"></i>
                                    Cartão de Crédito</button>
                                <button id="bt_2" class="botao botaoNormal" onClick="alterarOpcao(2);" type="button">
                                  <i class="fas fa-barcode"></i>
                                    Boleto</button>
                                <button  id="bt_3" class="botao botaoNormal" onClick="alterarOpcao(3);">
                                  <i class="fas fa-mobile-alt"></i>
                                    Pix</button>
                                <hr/>
                                <div id="">
                                    @switch($valor)
                                        @case(1)
                                            @include('cliente._partials.cartao')
                                        @break
                                        @case(2)
                                            @include('cliente._partials.boleto')
                                        @break
                                        @default
                                            @include('cliente._partials.boleto')
                                    @endswitch
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
