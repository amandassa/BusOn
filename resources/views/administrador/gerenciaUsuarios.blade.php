@extends('app')

@section('title', 'Gerenciar Usuários - ')

@section('content')
<link href="/css/estiloGerencia.css" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/icon?family=Material+Icons">

      <div class="container" id="contPrincipal">
        <div id="meio">
          <div class="cimaGu">
            <div class="buscGu">
              <input type="text" class="busca" id="buscaGu" placeholder="Digite o que busca.">
              <img src="/imagens/lupa.png" alt="Imagem Lupa" id="lupa">
                <select name="buscaOpcoes" id="buscaOpcoes">
                  <option value="nome">Nome</option>
                  <option value="cpf">Cpf</option>
                  <option value="email">Email</option>
                 </select>            
            </div>
            <button class="botaoAmarelo" id="botaoBusca"> Buscar </button>
          </div>
          <hr>
          <div class="row" id="rowCentral">
            <div class="col" id="colEsquerda">
              <div class="card" id="cardsGu">
                <div class="card-body" id="cardBodyGu">
                    <div class="divCentro" id="centroGu">
                      <label for="staticNome">Nome: </label>
                      <input type="text" readonly class="inputNome" id="staticNome" value="Jailson Ferreira Etcher">
                      <label for="staticEmail">Email: </label>
                      <input type="text" readonly class="inputEmail" id="staticEmail" value="etcher.jailson@gmail.com">
                      <label for="staticCpf">Cpf: </label>
                      <input type="text" readonly class="inputCpf" id="staticCpf" value="530.106.021-19">
                      <hr>
                      <button class="botaoAzul" id="botaoEditar"> Editar Informações</button>
                    </div>      
                </div>
              </div>
              <div class="card" id="cardsGu">
                <div class="card-body" id="cardBodyGu">
                    <div class="divCentro" id="centroGu">
                      <label for="staticNome">Nome: </label>
                      <input type="text" readonly class="inputNome" id="staticNome" value="Jailson Ferreira Etcher">
                      <label for="staticEmail">Email: </label>
                      <input type="text" readonly class="inputEmail" id="staticEmail" value="etcher.jailson@gmail.com">
                      <label for="staticCpf">Cpf: </label>
                      <input type="text" readonly class="inputCpf" id="staticCpf" value="530.106.021-19">
                      <hr>
                      <button class="botaoAzul" id="botaoEditar"> Editar Informações</button>
                    </div>      
                </div>
              </div>
              <div class="card" id="cardsGu">
                <div class="card-body" id="cardBodyGu">
                    <div class="divCentro" id="centroGu">
                      <label for="staticNome">Nome: </label>
                      <input type="text" readonly class="inputNome" id="staticNome" value="Jailson Ferreira Etcher">
                      <label for="staticEmail">Email: </label>
                      <input type="text" readonly class="inputEmail" id="staticEmail" value="etcher.jailson@gmail.com">
                      <label for="staticCpf">Cpf: </label>
                      <input type="text" readonly class="inputCpf" id="staticCpf" value="530.106.021-19">
                      <hr>
                      <button class="botaoAzul" id="botaoEditar"> Editar Informações</button>
                    </div>      
                </div>
              </div>
              <div class="card" id="cardsGu">
                <div class="card-body" id="cardBodyGu">
                    <div class="divCentro" id="centroGu">
                      <label for="staticNome">Nome: </label>
                      <input type="text" readonly class="inputNome" id="staticNome" value="Jailson Ferreira Etcher">
                      <label for="staticEmail">Email: </label>
                      <input type="text" readonly class="inputEmail" id="staticEmail" value="etcher.jailson@gmail.com">
                      <label for="staticCpf">Cpf: </label>
                      <input type="text" readonly class="inputCpf" id="staticCpf" value="530.106.021-19">
                      <hr>
                      <button class="botaoAzul" id="botaoEditar"> Editar Informações</button>
                    </div>      
                </div>
              </div>

            </div>
            <div class="col" id="colDireita">
              <div class="card" id="cardsGu">
                <div class="card-body" id="cardBodyGu">
                    <div class="divCentro" id="centroGu">
                      <label for="staticNome">Nome: </label>
                      <input type="text" readonly class="inputNome" id="staticNome" value="Jailson Ferreira Etcher">
                      <label for="staticEmail">Email: </label>
                      <input type="text" readonly class="inputEmail" id="staticEmail" value="etcher.jailson@gmail.com">
                      <label for="staticCpf">Cpf: </label>
                      <input type="text" readonly class="inputCpf" id="staticCpf" value="530.106.021-19">
                      <hr>
                      <button class="botaoAzul" id="botaoEditar"> Editar Informações</button>
                    </div>      
                </div>
              </div>
              <div class="card" id="cardsGu">
                <div class="card-body" id="cardBodyGu">
                    <div class="divCentro" id="centroGu">
                      <label for="staticNome">Nome: </label>
                      <input type="text" readonly class="inputNome" id="staticNome" value="Jailson Ferreira Etcher">
                      <label for="staticEmail">Email: </label>
                      <input type="text" readonly class="inputEmail" id="staticEmail" value="etcher.jailson@gmail.com">
                      <label for="staticCpf">Cpf: </label>
                      <input type="text" readonly class="inputCpf" id="staticCpf" value="530.106.021-19">
                      <hr>
                      <button class="botaoAzul" id="botaoEditar"> Editar Informações</button>
                    </div>      
                </div>
              </div>
              <div class="card" id="cardsGu">
                <div class="card-body" id="cardBodyGu">
                    <div class="divCentro" id="centroGu">
                      <label for="staticNome">Nome: </label>
                      <input type="text" readonly class="inputNome" id="staticNome" value="Jailson Ferreira Etcher">
                      <label for="staticEmail">Email: </label>
                      <input type="text" readonly class="inputEmail" id="staticEmail" value="etcher.jailson@gmail.com">
                      <label for="staticCpf">Cpf: </label>
                      <input type="text" readonly class="inputCpf" id="staticCpf" value="530.106.021-19">
                      <hr>
                      <button class="botaoAzul" id="botaoEditar"> Editar Informações</button>
                    </div>      
                </div>
              </div>
              <div class="card" id="cardsGu">
                <div class="card-body" id="cardBodyGu">
                    <div class="divCentro" id="centroGu">
                      <label for="staticNome">Nome: </label>
                      <input type="text" readonly class="inputNome" id="staticNome" value="Jailson Ferreira Etcher">
                      <label for="staticEmail">Email: </label>
                      <input type="text" readonly class="inputEmail" id="staticEmail" value="etcher.jailson@gmail.com">
                      <label for="staticCpf">Cpf: </label>
                      <input type="text" readonly class="inputCpf" id="staticCpf" value="530.106.021-19">
                      <hr>
                      <button class="botaoAzul" id="botaoEditar"> Editar Informações</button>
                    </div>      
                </div>
              </div>
            </div>
            <div class="baixoGu">
              <button class="botaoAmarelo" id="botaoGu"> Baixar Arquivo Completo </button>
            </div>
          </div>
          <hr>
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
      
@endsection