@extends('app')

@section('title', 'Confirmação - ')
    
@section('content')
    <link href="/css/estiloPaginas.css" rel="stylesheet">
    <div class="container" style="margin-top:2em;">
        <div class="row"> <!-- Linha 1 -->
          <div class="col-sm-6"> <!-- Coluna 1 -->
            <h4>Status da Compra</h4> 
              <div class="card">
                <div class="card-body">
                    <p class="tituloAzul">Aguardando Pagamento!!</p>                
                  <hr/>                  
                  <p class="textoAmarelo"><label class="label2">Código Pedido:</label> 398273287</p>
              </div>
            </div>
            <div class="card" style="margin-top:1em;">
                <div class="card-body">
                  <h3 class="textoConfirmacao">Compra efetuada com sucesso!</h3>
                  <p>
                    Uma mensagem contendo detalhes de sua passagem foi enviada para o seu email: email@email.com
                  </p>
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    Caso não encontre o email, verifique sua caixa de spam!                    
                  </div>
                    <center>
                  <button type="button" class="btn btn-primary" style="background-color:#1C5576;" onClick="{{ route('base') }} ">Minhas Passagens</button>
                    </center>
              </div>
            </div>
          </div>        
          <div class="col-sm-4"> <!-- coluna 2 -->
                <h4>Resumo da Viagem</h4>
                <div class="card">                    
                    <div class="card-body" style="text-align:left;">
                        <p class="textoAmarelo" style="text-align:left;">Trecho:</p>
                        <p class="textoPreto">Feira de Santana >>> Jaguaquara</p>
                        <p class="textoAmarelo" style="text-align:left;">Tipo de Linha:</p>
                        <select disabled class="form-control">
                            <option>Rota Convencional</option>
                            <option>Rota Direta</option>
                        </select>
                        <p class="textoAmarelo" style="text-align:left;">Data | Horário da Partida: </p>
                        <p class="textoPreto">25/08/2021 18:00</p>
                        <p class="textoAmarelo" style="text-align:left;">Nome passageiro: </p>
                        <p class="textoPreto">Nome Cliente Feliz</p>
                            <p class="textoAmarelo" style="text-align:left;">Número Documento: </p>
                        <p class="textoPreto">88.422390-23</p>
                    </div>
                </div>
          </div>
        </div>
    </div>
@endsection