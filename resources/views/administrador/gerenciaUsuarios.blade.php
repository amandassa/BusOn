@extends('app')

@section('title', 'Gerenciar Usuários - ')

@section('content')
<link href="/css/estiloGerencia.css" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/icon?family=Material+Icons">

      <div class="container" id="contPrincipal">

        <ol class="breadcrumb" id="superior">
          <li> <a href="#" style="text-decoration: none"> 
                <button type="button" class="button_listagem_adm" id="button_listagem_cliente"> 
                  Lista de clientes
                </button>
              </a>
          </li>
          <li> <a href="#" style="text-decoration: none">
                <button type="button" class="button_listagem_adm" id="button_listagem_funcionario"> 
                  Lista de funcionários
                </button>
               </a>
          </li>
        </ol>

        <div id="meio">
         
          <div class="cimaGu">
            <div class="buscGu">
              <input type="text" class="busca" id="buscaGu" placeholder="Digite a busca desejada.">
              <img src="/imagens/lupa.png" alt="Imagem Lupa" id="lupa">
                <select name="buscaOpcoes" id="buscaOpcoes">
                  <option value="todos">Todos</option>
                  <option value="nome">Nome</option>
                  <option value="cpf">CPF</option>
                  <option value="email">Email</option>
                 </select>            
            </div>
            <button class="botaoAmarelo" id="botaoBusca"> Buscar </button>
          </div>
          <hr>
          
          <!-- subpágina com a lista de cliente e suas informações -->
          <article class ="subpagina_cliente">
            <div class="row" id="rowCentral">
              <div class="col" id="colEsquerda">
                <div class="card" id="cardsGu">
                  <div class="card-body" id="cardBodyGu">
                    <div class="divCentro" id="centroGu">
                      <label for="staticNome">Nome: </label>
                      <input type="text" readonly class="inputNome" id="staticNome" value="Jailson Ferreira Etcher">
                      <label for="staticEmail">Email: </label>
                      <input type="text" readonly class="inputEmail" id="staticEmail" value="etcher.jailson@gmail.com">
                      <label for="staticCpf">CPF: </label>
                      <input type="text" readonly class="inputCpf" id="staticCpf" value="530.106.021-19">
                      <hr>
                    </div>      
                  </div>
                </div>
              <div class="card" id="cardsGu">
                <div class="card-body" id="cardBodyGu">
                    <div class="divCentro" id="centroGu"; aling-items: center>
                      <label for="staticNome">Nome: </label>
                      <input type="text" readonly class="inputNome" id="staticNome" value="Jailson Ferreira Etcher">
                      <label for="staticEmail">Email: </label>
                      <input type="text" readonly class="inputEmail" id="staticEmail" value="etcher.jailson@gmail.com">
                      <label for="staticCpf">CPF: </label>
                      <input type="text" readonly class="inputCpf" id="staticCpf" value="530.106.021-19">
                      <hr>
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
                      <label for="staticCpf">CPF: </label>
                      <input type="text" readonly class="inputCpf" id="staticCpf" value="530.106.021-19">
                      <hr>
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
                      <label for="staticCpf">CPF: </label>
                      <input type="text" readonly class="inputCpf" id="staticCpf" value="530.106.021-19">
                      <hr>
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
                      <label for="staticCpf">CPF: </label>
                      <input type="text" readonly class="inputCpf" id="staticCpf" value="530.106.021-19">
                      <hr>
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
                      <label for="staticCpf">CPF: </label>
                      <input type="text" readonly class="inputCpf" id="staticCpf" value="530.106.021-19">
                      <hr>
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
                      <label for="staticCpf">CPF: </label>
                      <input type="text" readonly class="inputCpf" id="staticCpf" value="530.106.021-19">
                      <hr>
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
                      <label for="staticCpf">CPF </label>
                      <input type="text" readonly class="inputCpf" id="staticCpf" value="530.106.021-19">
                      <hr>
                    </div>      
                </div>
              </div>
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
          </article>

          <!-- subpágina com a lista de funcionários e suas informações -->
          <article class ="subpagina_funcionario">
            <div class="row" id="rowCentral">
              <div class="col" id="colEsquerda">
                <div class="card" id="cardsGu">
                  <div class="card-body" id="cardBodyGu">
                    <div class="divCentro" id="centroGu">
                      <label for="staticNome">Nome: </label>
                      <input type="text" readonly class="inputNome" id="staticNome" value="Jailson Ferreira Etcher">
                      <label for="staticEmail">Email: </label>
                      <input type="text" readonly class="inputEmail" id="staticEmail" value="etcher.jailson@gmail.com">
                      <label for="staticCpf">CPF: </label>
                      <input type="text" readonly class="inputCpf" id="staticCpf" value="530.106.021-19">
                      <label for="staticMatricula">Matrícula: </label>
                      <input type="text" readonly class="inputMatricula" id="staticMatricula" value="FUNC 003">
                      <hr>
                      <button class="botaoAzul" id="botaoEditar"> Editar Informações</button>
                    </div>      
                  </div>
                </div>
              <div class="card" id="cardsGu">
                <div class="card-body" id="cardBodyGu">
                    <div class="divCentro" id="centroGu"; aling-items: center>
                      <label for="staticNome">Nome: </label>
                      <input type="text" readonly class="inputNome" id="staticNome" value="Jailson Ferreira Etcher">
                      <label for="staticEmail">Email: </label>
                      <input type="text" readonly class="inputEmail" id="staticEmail" value="etcher.jailson@gmail.com">
                      <label for="staticCpf">CPF: </label>
                      <input type="text" readonly class="inputCpf" id="staticCpf" value="530.106.021-19">
                      <label for="staticMatricula">Matrícula: </label>
                      <input type="text" readonly class="inputMatricula" id="staticMatricula" value="FUNC 003">
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
                      <label for="staticCpf">CPF: </label>
                      <input type="text" readonly class="inputCpf" id="staticCpf" value="530.106.021-19">
                      <label for="staticMatricula">Matrícula: </label>
                      <input type="text" readonly class="inputMatricula" id="staticMatricula" value="FUNC 003">
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
                      <label for="staticCpf">CPF: </label>
                      <input type="text" readonly class="inputCpf" id="staticCpf" value="530.106.021-19">
                      <label for="staticMatricula">Matrícula: </label>
                      <input type="text" readonly class="inputMatricula" id="staticMatricula" value="FUNC 003">
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
                      <label for="staticCpf">CPF: </label>
                      <input type="text" readonly class="inputCpf" id="staticCpf" value="530.106.021-19">
                      <label for="staticMatricula">Matrícula: </label>
                      <input type="text" readonly class="inputMatricula" id="staticMatricula" value="FUNC 003">
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
                      <label for="staticCpf">CPF: </label>
                      <input type="text" readonly class="inputCpf" id="staticCpf" value="530.106.021-19">
                      <label for="staticMatricula">Matrícula: </label>
                      <input type="text" readonly class="inputMatricula" id="staticMatricula" value="FUNC 003">
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
                      <label for="staticCpf">CPF: </label>
                      <input type="text" readonly class="inputCpf" id="staticCpf" value="530.106.021-19">
                      <label for="staticMatricula">Matrícula: </label>
                      <input type="text" readonly class="inputMatricula" id="staticMatricula" value="FUNC 003">
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
                      <label for="staticCpf">CPF </label>
                      <input type="text" readonly class="inputCpf" id="staticCpf" value="530.106.021-19">
                      <label for="staticMatricula">Matrícula: </label>
                      <input type="text" readonly class="inputMatricula" id="staticMatricula" value="FUNC 003">
                      <hr>
                      <button class="botaoAzul" id="botaoEditar"> Editar Informações</button>
                    </div>      
                </div>
              </div>
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
          </article>

          <div class="baixoGu">
              <button class="botaoAmarelo" id="botaoGu"> Baixar Arquivo Completo </button>
          </div>
          
        </div>
        
      </div>
      
@endsection