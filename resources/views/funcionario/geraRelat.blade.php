@extends('app')

@section('title', 'Gera relatório ')
@section('content')
<div class="container">
    <h4 class="titulo">Relatório de passageiros por linha</h4> 
    <div class="input-group mb-3">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Digite o código da linha" aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Pesquisar</button>
          </div>

          <div class="row justify-content-md-center">
            <div class="col col-lg-1">               
            </div>
            <div class="col-md-11">
              <div class="alert alert-success" role="alert">
                  <h4 class="alert-heading">Linha encontrada</h4>
                  <p>Abaixo as informações de todos os passageiros da respectiva linha</p>                        
              </div>  
            </div>
            <div class="col col-lg-1">               
            </div>       
  <div class="row justify-content-md-center">
    <div class="card">
        <table class="table table-hover">
            <thead>
              <tr>
                <td class="bg-warning"></td>                
                <td class="bg-warning">Nome</td>
                <td class="bg-warning">Sobrenome</td>
                <td class="bg-warning">CPF</td>
                <td class="bg-warning">Partida</td>
                <td class="bg-warning">Chegada</td>                                 
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Fran</td>
                <td>Marx</td>
                <td>75198736195</td>
                <td>Serrinha</td>
                <td>Salvador</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Lisa</td>
                <td>Simpson</td>
                <td>25996158912</td>
                <td>São Francisco</td>
                <td>Feira de Santana</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Lisa</td>
                <td>Simpson</td>
                <td>25996158912</td>
                <td>São Francisco</td>
                <td>Feira de Santana</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Lisa</td>
                <td>Simpson</td>
                <td>25996158912</td>
                <td>São Francisco</td>
                <td>Feira de Santana</td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>Lisa</td>
                <td>Simpson</td>
                <td>25996158912</td>
                <td>São Francisco</td>
                <td>Feira de Santana</td>
              </tr>
              <tr>
                <th scope="row">6</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>95461297861</td>
                <td>São Paulo</td>
                <td>Biritinga</td>
              </tr>
              </tr>
            </tbody>
          </table> 
    </div>
  </div>  
    <div class="row justify-content-md-center">
    <div class="container">
      <div class="btn-group me-2" role="group" aria-label="First group">
        <button type="button" class="btn btn-outline-secondary"><<</button>
        <button type="button" class="btn btn-outline-secondary">1</button>
        <button type="button" class="btn btn-outline-secondary">2</button>
        <button type="button" class="btn btn-outline-secondary">3</button>
        <button type="button" class="btn btn-outline-secondary">4</button>
        <button type="button" class="btn btn-outline-secondary">5</button>
        <button type="button" class="btn btn-outline-secondary">>></button>
      </div>
    </div>
    <button class="btn btn-primary" type="button">Imprimir</button></div></div>
    </div>
     
    
</div>

@endsection      