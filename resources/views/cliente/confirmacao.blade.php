@extends('app')

@section('title', 'Confirmação - ')
    
@section('content')    
  <script type="text/javascript" src="{{ asset('js/jquery.mask.js') }}"></script>

    <script> 
       $("#cpf").mask('999.999.999-99');
    
    
    
    
    </script>
    @section('usaMigalha', TRUE)
    @section('nomeMigalha1', 'Seleção de Passagem')
    @section('rotaMigalha1') {{ route('selecao') }} @endsection
    @section('nomeMigalha2', 'Pagamento')
    @section('rotaMigalha1') {{ route('pagamento') }} @endsection
    @section('nomeMigalha3', 'Confirmação')
    @section('linkM3', 'ativado')
    @section('estiloMigalha3', 'migalhaRetanguloAtiva')
    @section('estiloMigalhaT3', 'migalhaTrianguloAtiva')
    @section('estiloMigalhaUltimo', 'migalhaTrianguloAtiva')    


    <div class="container">
        <div class="row"> <!-- Linha 1 -->
          <div class="col-sm-6"> <!-- Coluna 1 -->
            <h5>Informaçãos do Pedido</h5> 
              @if($metodo == 1) <!-- Método de Pagamento por Cartão -->
                  <div class="card">
                    <div class="card-body">
                      <div class="row"> <!-- Linha 1 -->
                        <p class="col-sm infoPedidoTexto">Pedido BusOn</p> <!-- Coluna 1 -->
                        <p class="col-sm infoPedidoDados">{{$passagem_info['pedido']}}</p> <!-- Coluna 2 -->
                      </div>       
                      <hr/>   
                      <div class="row"> <!-- Linha 2 -->
                        <p class="col-sm infoPedidoTexto">Status do Pedido</p> <!-- Coluna 1 -->
                        <p class="col-sm infoPedidoDados" id="statusPagamento">Pagamento Processado</p>  <!-- Coluna 2 -->
                      </div>             
                  </div>
                </div>
                <div class="card" style="text-align: center">
                    <div class="card-body">
                      <p class="textoConfirmacao">Pedido efetuado com sucesso!</p> <br>
                      <p>
                        Uma mensagem contendo detalhes de sua passagem foi enviada para o seu email: <b>{{$passagem_info['email']}}</b>
                      </p>
                      
                      <div class="alert alert-warning alert-dismissible fade show" role="alert" id="msgAlerta" style="text-align: center">
                        O email pode ter sido enviado para caixa de spam!
                      </div>     
                      <div class="btnMP">
                        <button type="button" class="botao botaoAzul" id="btnMinhasPassagens" onclick="window.location='{{ route("minhasPassagens")}}'">Minhas Passagens</button>
                      </div>
                  </div>
                </div>
              </div>  
            @elseif($metodo == 2) <!-- Método de Pagamento por Boleto -->
              <div class="card">
                <div class="card-body">
                  <div class="row"> <!-- Linha 1 -->
                    <p class="col-sm infoPedidoTexto">Pedido BusOn</p> <!-- Coluna 1 -->
                    <p class="col-sm infoPedidoDados">{{$passagem_info['pedido']}}</p> <!-- Coluna 2 -->
                  </div>       
                  <hr/>   
                  <div class="row"> <!-- Linha 2 -->
                    <p class="col-sm infoPedidoTexto">Status do Pedido</p> <!-- Coluna 1 -->
                    <p class="col-sm infoPedidoDados" id="statusPagamento">Aguardando Pagamento</p>  <!-- Coluna 2 -->
                  </div>             
              </div>
            </div>
            <div class="card" style="text-align: center">
                <div class="card-body">
                  <p class="textoConfirmacao">Boleto gerado com sucesso!</p> <br>
                  <p>
                    Detalhes de sua passagem será enviada para o email: <b>{{$passagem_info['email']}}</b> assim que o pagamento for processado
                  </p>
                  
                  <div class="alert alert-warning alert-dismissible fade show" role="alert" id="msgAlerta" style="text-align: center">
                    O boleto demora até 3 dias para ser processado
                  </div>     
                  <div class="btnMP">
                    <button type="button" class="botao botaoAzul" id="btnMinhasPassagens">Pagar boleto</button>
                  </div>
              </div>
            </div>
          </div>  
          @endif


                    
          <div class="col-sm-4"> <!-- coluna 2 -->
                <h5>Resumo da Viagem</h5>
                <div class="card">                    
                    <div class="card-body">
                        <p class="textoPreto">Trecho:</p>
                        <p class="textoAmarelo">{{$passagem_info['cidade_partida']}} >>> {{$passagem_info['cidade_destino']}}</p>
                        <p class="textoPreto">Tipo de Linha:</p>
                        @if ($passagem_info['tipo']==1)
                        <p class="textoAmarelo">Direta</p>
                        @elseif($passagem_info['tipo']==0)
                        <p class="textoAmarelo">Comum</p>
                        @endif
                        <p class="textoPreto">Data | Horário da Partida: </p>
                        <p class="textoAmarelo">{{$passagem_info['data']}}  {{$passagem_info['horario']}}</p>
                        <p class="textoPreto">Número do assento:</p>
                        <p class="textoAmarelo">{{$passagem_info['assento']}}</p>
                        <p class="textoPreto" >Nome passageiro: </p>
                        <p class="textoAmarelo">{{$passagem_info['nome']}}</p>
                        <p class="textoPreto">CPF: </p>
                        <p class="textoAmarelo" id='cpf'>{{$passagem_info['cpf']}}</p>
                    </div>
                </div>
          </div>
        </div>
    </div>
@endsection