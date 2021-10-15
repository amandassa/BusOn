@extends('app')

@section('title', 'Gerenciar Usuários - ')

@section('content')
<link href="/css/estiloGerencia.css" rel="stylesheet"> 

      <div class="container" id="contPrincipal">
        <div id="meio">
          <div class="cimaGu">
            <input type="text" placeholder="Diga o que busca aqui..." id="buscaGu">
            <button class="botaoAmarelo" id="botaoBusca"> Buscar </button>
            <hr>
          </div>
          <div class="row" id="colCentral">
            <div class="col" id="esquerda">
              <div class="card" id="cardsGu">
                <div class="card-body" id="cardBodyGu">
                  <button class="botaoAzul" id="botaoEditar"> Editar </button>
                </div>
              </div>
              <div class="card" id="cardsGu">
                <div class="card-body" id="cardBodyGu">
                  <button class="botaoAzul" id="botaoEditar"> Editar </button>
                </div>
              </div>
              <div class="card" id="cardsGu">
                <div class="card-body" id="cardBodyGu">
                  <button class="botaoAzul" id="botaoEditar"> Editar </button>
                </div>
              </div>
              <div class="card" id="cardsGu">
                <div class="card-body" id="cardBodyGu">
                  <button class="botaoAzul" id="botaoEditar"> Editar </button>
                </div>
              </div>
            </div>
            <div class="col" id="direita">
              <div class="card" id="cardsGu">
                <div class="card-body" id="cardBodyGu">
                  <button class="botaoAzul" id="botaoEditar"> Editar </button>
                </div>
              </div>
              <div class="card" id="cardsGu">
                <div class="card-body" id="cardBodyGu">
                  <button class="botaoAzul" id="botaoEditar"> Editar </button>
                </div>
              </div>
              <div class="card" id="cardsGu">
                <div class="card-body" id="cardBodyGu">
                  <button class="botaoAzul" id="botaoEditar"> Editar </button>
                </div>
              </div>
              <div class="card" id="cardsGu">
                <div class="card-body" id="cardBodyGu">
                  <button class="botaoAzul" id="botaoEditar"> Editar </button>
                </div>
              </div>
              
            </div>
            
            
          </div>
          <div class="baixoGu">
            <button class="botaoAmarelo" id="botaoGu"> Baixar Arquivo Completo </button>
          </div>
          
        </div>
      </div>
      
@endsection