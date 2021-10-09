@extends('app')

@section('title', 'Selecionar Passagem - ')

@section('content')
    <link href="/css/estiloSelecao.css" rel="stylesheet">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md">
                <div class="cards" >
                    <div class="card-body">
                        <p> Partida: 6:50Hrs: Feira de Santana-BA</p>
                        <p> Destino: 8:20Hrs: Cruz das Almas-BA</p>
                        <label class="textoCentralCima">Linha Comum</label>
                        <hr>
                        <label class="textoCentralBaixo">Valor R$18,00</label>
                        <p>20 vagas</p>
                        <button> <img src="/imagens/aviao.png" alt="">Selecionar</button>
                       
                    </div>
                </div>
                <div class="cards">
                    <div class="card-body">
                        <p> Partida: 8:50Hrs: Feira de Santana-BA</p>
                        <p> Destino: 10:20Hrs: Cruz das Almas-BA</p>
                        <label class="textoCentralCima">Linha Comum</label>
                        <hr>
                        <label class="textoCentralBaixo" >Valor R$26,20</label>
                        <p>10 vagas</p>
                        <button> <img src="/imagens/aviao.png" alt="">Selecionar</button>
                    </div>
                </div>
                <div class="cards">
                    <div class="card-body">
                        <p> Partida: 4:20Hrs: Feira de Santana-BA</p>
                        <p> Destino: 5:00Hrs: Cruz das Almas-BA</p>
                        <label class="textoCentralCima">Linha direta</label>
                        <hr>
                        <label class="textoCentralBaixo" >Valor R$34,70</label>
                        <p>2 vagas</p>
                        <button> <img src="/imagens/aviao.png" alt="">Selecionar</button>
                    </div>
                </div>
                <div class="btn" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group mr-2" role="group" aria-label="First group">
                      <button type="button" class="btn btn-secondary">1</button>
                      <button type="button" class="btn btn-secondary">2</button>
                      <button type="button" class="btn btn-secondary">3</button>
                      <button type="button" class="btn btn-secondary">4</button>
                    </div>
                </div>
            </div>
        </div>
            
                
          
      </div>
    </div>
                
                 
    

@endsection

