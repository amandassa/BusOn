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
                
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <h3>Forma de Pagamento</h3>
                <section class="content">
                    <div class="container-fluid">
                        <div class="card card-default">                        
                            <div class="card-body">               
                                <label>Selecione a Forma de Pagamento: </label> <br>                                    
                                <button class="botaoSelecionado" onClick="{{ $i = 1}}">
                                  <i class="fa-solid fa-credit-card"></i>
                                    Cartão de Crédito</button>
                                <button class="botao" onClick="{{ $i = 2}}">
                                  <i class="fa-solid fa-credit-card"></i>
                                    Boleto</button>
                                <button class="botao" onClick="{{ $i = 3}}">
                                  <i class="fa-solid fa-credit-card"></i>
                                    Pix</button>
                                <hr/>        
                                <div>                                    
                                    @include('cliente._partials.cartao')                                    
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
                                <hr/>    
                                <p>Subtotal:</p>
                                <h4 class="textoAmarelo" style="text-align:left; font-size:16px;">R$65,00</h4>
                            </div>
                        </div>
                    </div> 
                </section> 
            </div>
        </div>
    </div>    
@endsection