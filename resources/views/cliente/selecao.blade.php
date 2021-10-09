@extends('app')

@section('title', 'Selecionar Passagem - ')

@section('content')
    <link href="/css/estiloSelecao.css" rel="stylesheet">
    <div class="container">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#"> Selecionar Passagem</a></li>
              <li class="breadcrumb-item"><a href="#">Pagamento</a></li>
              <li class="breadcrumb-item active" aria-current="page"> <a href="#">Confirmação</a></li>
            </ol>
        <div class="row justify-content-center">
            <div class="col-md">
                <div class="cards" >
                    <div class="card-body">
                        <div class="esquerda">
                            <img class="ticket" src="/imagens/ticket.png" alt="">
                            <p class="vagas">20 vagas</p>
                        </div>
                        <div class="passagens">
                            <p class="partida"> Partida: 6:50Hrs: Feira de Santana-BA</p>
                            <p class="destino"> Destino: 8:20Hrs: Cruz das Almas-BA</p>
                        </div>
                        <button> <img src="/imagens/aviao.png" alt="">Selecionar</button>
                        <div class="central">
                            <p class="textoCentralCima">Linha Comum</p>
                            <hr>
                            <p class="textoCentralCima">Valor R$18,00</p>  
                        </div>                        
                        
                    </div>
                </div>
                <div class="cards">
                    <div class="card-body">
                        <div class="esquerda">
                            <img class="ticket" src="/imagens/ticket.png" alt="">
                            <p class="vagas">10 vagas</p>
                        </div>
                        <div class="passagens">
                            <p class="partida"> Partida: 8:50Hrs: Feira de Santana-BA</p>
                            <p class="destino"> Destino: 10:20Hrs: Cruz das Almas-BA</p>
                        </div>
                        <button> <img src="/imagens/aviao.png" alt="">Selecionar</button>
                        <div class="central">
                            <p class="textoCentralCima">Linha Comum</p>
                            <hr>
                            <p class="textoCentralCima" >Valor R$26,20</p>
                        </div>
                        
                    </div>
                </div>
                <div class="cards">
                    <div class="card-body">
                        <div class="esquerda">
                            <img class="ticket" src="/imagens/ticket.png" alt="">
                            <p class="vagas">2 vagas</p>
                        </div>
                        <div class="passagens">
                            <p class="partida"> Partida: 4:20Hrs: Feira de Santana-BA</p>
                            <p class="destino"> Destino: 5:00Hrs: Cruz das Almas-BA</p>
                        </div>
                        <button> <img src="/imagens/aviao.png" alt="">Selecionar</button>
                        <div class="central">
                            <p class="textoCentralCima">Linha direta</p>
                            <hr>
                            <p class="textoCentralCima" >Valor R$34,70</p>
                        </div>    
                        
                        
                    </div>
                </div>
                <div class="btn" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group mr-2" role="group" aria-label="First group">
                      <button type="button" class="btn btn-secondary"><<</button>
                      <button type="button" class="btn btn-secondary">1</button>
                      <button type="button" class="btn btn-secondary">2</button>
                      <button type="button" class="btn btn-secondary">3</button>
                      <button type="button" class="btn btn-secondary">4</button>
                      <button type="button" class="btn btn-secondary">>></button>
                </div>
            </div>
        </div>
            
                
          
      </div>
    </div>
                
                 
    

@endsection

