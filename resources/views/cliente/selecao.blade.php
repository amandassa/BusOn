@extends('app')

@section('title', 'Selecionar Passagem - ')

@section('content')

    @section('usaMigalha', TRUE)
    @section('nomeMigalha1', 'Seleção de Passagem')
    @section('rotaMigalha1') {{ route('selecao') }} @endsection
    @section('nomeMigalha2', 'Pagamento')
    @section('rotaMigalha2') {{ route('pagamento') }} @endsection
    @section('nomeMigalha3', 'Confirmação')
    @section('linkM1', 'ativado')
    @section('estiloMigalha1', 'migalhaRetanguloAtiva')
    @section('estiloMigalhaT1', 'migalhaTrianguloAtiva')
    <link href="/css/estiloSelecao.css" rel="stylesheet">



    <div class="container" id="cont">
        <h5>Seleção de Passagem!</h5>
        <div class="row justify-content-center" id="coluna">
            <div class="col-md" id="centralizado">
                <div class="card" id="cards">
                    <div class="card-body" id="cb">
                        @if($linha == null)
                            <p class="text-center">Não encontramos a rota selecionada!</p>
                        @else
                            @foreach ($linha as $l)
                                <div class="esquerda">
                                    <img class="ticket" src="/imagens/ticket.png" alt="">
                                    <p class="vagas">{{$l->total_vagas}} vagas</p>
                                </div>
                                <div class="passagens">
                                    <p class="partida"> Partida: 6:50Hrs: Feira de Santana-BA</p>
                                    <p class="destino"> Destino: 8:20Hrs: Cruz das Almas-BA</p>
                                </div>                        
                                
                                <button > <img src="/imagens/aviao.png" alt="">
                                    Selecionar 
                                </button>
                                
                                <div class="central">
                                    <p class="textoCentralCima">Linha Comum</p>
                                    <hr>
                                    <p class="textoCentralCima">Valor R$18,00</p>  
                                </div>
                            @endforeach
                        @endif                       
                    </div>
                  </div>
                </div>
                
                <!--div class="btn" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group mr-2" role="group" aria-label="First group">
                      <button type="button" class="btn btn-secondary"><<</button>
                      <button type="button" class="btn btn-secondary">1</button>
                      <button type="button" class="btn btn-secondary">2</button>
                      <button type="button" class="btn btn-secondary">3</button>
                      <button type="button" class="btn btn-secondary">4</button>
                      <button type="button" class="btn btn-secondary">>></button>
                </div-->
            </div>
        </div>             
    </div>
                
                 
    

@endsection

