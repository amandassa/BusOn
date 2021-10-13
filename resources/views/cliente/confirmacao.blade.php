@extends('app')

@section('title', 'Confirmação - ')
    
@section('content')
    <link href="/css/estiloPaginas.css" rel="stylesheet">
    
    @section('usaMigalha', TRUE)
    @section('nomeMigalha1', 'Seleção de Passagem')
    @section('rotaMigalha1', "{{ route('selecao') }}")
    @section('nomeMigalha2', 'Pagamento')
    @section('rotaMigalha1', "{{ route('pagamento') }}")
    @section('nomeMigalha3', 'Confirmação')
    @section('linkM3', 'ativado')
    @section('estiloMigalha3', 'migalhaRetanguloAtiva')
    @section('estiloMigalhaT3', 'migalhaTrianguloAtiva')
    @section('estiloMigalhaUltimo', 'migalhaTrianguloAtiva')    


    <div class="container">
        <div class="row"> <!-- Linha 1 -->
          <div class="col-sm-6"> <!-- Coluna 1 -->
            <h5>Informaçãos do Pedido</h5> 
              <div class="card">
                <div class="card-body">
                  <div class="row"> <!-- Linha 1 -->
                    <p class="col-sm infoPedidoTexto">Pedido BusOn</p> <!-- Coluna 1 -->
                    <p class="col-sm infoPedidoDados"> 8TK762XBR</p> <!-- Coluna 2 -->
                  </div>       
                  <hr/>   
                  <div class="row"> <!-- Linha 2 -->
                    <p class="col-sm infoPedidoTexto">Status do Pedido</p> <!-- Coluna 1 -->
                    <p class="col-sm infoPedidoDados" id="statusPagamento">Pagamento Processado</p>  <!-- Coluna 2 -->
                  </div>   
                  
              </div>
            </div>
            <div class="card">
                <div class="card-body">
                  <p class="textoConfirmacao">Pedido efetuado com sucesso!</p> <br>
                  <p>
                    Uma mensagem contendo detalhes de sua passagem foi enviada para o seu email: <b>email@email.com</b>
                  </p>
                  <div class="alert alert-warning alert-dismissible fade show" role="alert" id="msgAlerta">
                    O email pode ter sido enviado para caixa de spam!                    
                  </div>
                  <div class="btnMP">
                    <button type="button" class="botao botaoAzul" id="btnMinhasPassagens">  Minhas passagens</button>
                  </div>
              </div>
            </div>
          </div>        
          <div class="col-sm-4"> <!-- coluna 2 -->
                <h5>Resumo da Viagem</h5>
                <div class="card">                    
                    <div class="card-body">
                        <p class="textoPreto">Trecho:</p>
                        <p class="textoAmarelo">Feira de Santana >>> Jaguaquara</p>
                        <p class="textoPreto">Tipo de Linha:</p>
                        <p class="textoAmarelo">Rota Direta</p>
                        <p class="textoPreto">Data | Horário da Partida: </p>
                        <p class="textoAmarelo">25/08/2021 18:00</p>
                        <p class="textoPreto" >Nome passageiro: </p>
                        <p class="textoAmarelo">Nome Cliente Feliz</p>
                            <p class="textoPreto">Número Documento: </p>
                        <p class="textoAmarelo">859.859.859-23</p>
                    </div>
                </div>
          </div>
        </div>
    </div>
@endsection