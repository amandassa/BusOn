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
        
    @push('js')                
    <script>
        function alterarOpcao(valor){
            alert('teste');
            reload()->with('valor');
        }
        $(document).ready(function(){
            $('bt_1').onClick("alterarOpcao(1);");
            $('bt_2').onClick("alterarOpcao(2);");
            $('bt_3').onClick("alterarOpcao(3);");
        }
            
    </script>
    @endpush
        
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
                                <button id="bt_2" type="button" class="botao botaoNormal" onClick="alterarOpcao(2);">
                                  <i class="fas fa-barcode"></i>
                                    Boleto</button>
                                <button  id="bt_3" class="botao botaoNormal" onClick="alterarOpcao(3);">
                                  <i class="fas fa-mobile-alt"></i>
                                    Pix</button>
                                <hr/>        
                                <div>
                                    @switch($valor)
                                        @case(1):
                                            @include('cliente._partials.cartao')
                                        @break
                                        @case(2):
                                            @include('cliente._partials.boleto')
                                        @break
                                        @default:
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
