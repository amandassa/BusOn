@extends('app')

@section('title', 'Edição de agenda')
@section('content')
<div class="container">
    <h4 class="titulo">Editar Agenda</h4>
    <div class="container">
    <div class="card">        
            <div class="row">
              <div class="col">
                <label for="inputPart" class="form-label">Cidade Partida</label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="Feira de Santana">
              </div>              
              <div class="col">
                <label for="inputCheg" class="form-label">Cidade Chegada</label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="Araci">
              </div>
              <div class="col">
                <label for="inputCheg" class="form-label">Selecione o tipo de linha</label>                
                <select class="form-select" aria-label="Default select example">
                    <option selected>Selecione</option>
                    <option value="1">Linha Direta</option>
                    <option value="2">Linha Comum</option>                   
                  </select>               
              </div>
              <div class="col">
                <div class="w-100 d-none d-md-block"></div> 
                
            </div>
    </div>      
    
                       
            <div class="row">
            <div class="w-100 d-none d-md-block"></div>   
            <div class="col">
                <label for="precoL" class="form-label">Preço da Linha</label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="R$ 80,50">
            </div>
            <div class="col">
                <label class="legenda" for="saida">Horário Saída</label>
                <input type = "time" id= "time">
            </div>               
            <div class="col">
                <label class="legenda" for="chegada">Horário Chegada</label>
                <input type = "time" id= "time">
            </div>                
            <div class="col">
                <label for="inputCheg" class="form-label">Selecione linha</label>                
                <select class="form-select" aria-label="Default select example">
                    <option selected>Selecione</option>
                    <option value="1">Linha Direta</option>
                    <option value="2">Linha Comum</option>                                       
                  </select>                            
            </div>
            <div class="col">
                <div class="w-100 d-none d-md-block"></div>   
                <label for="inputPart" class="form-label">Preço trecho</label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="R$ 60,50">
            </div>
          </div>   
          <div class="w-100 d-none d-md-block"></div> 
                 
          <div class="row">
            <div class="col-sm"><button type="button" class="btn btn-outline-primary">Resetar</button></div>
            <div class="col-sm"><button type="button" class="btn btn-primary">Editar trechos</button></div>
            <div class="col-sm"><button type="button" class="btn btn-warning">Salvar alterações</button></div>
          </div>
    
        </div>

  
  
    
<h4 class="titulo">Editar Trechos</h4>

    
    <div class="card">
        <table class="table table-hover">            
            <thead>
              <tr>
                <th scope="col">Número</th>
                <th scope="col">Cidade de partida</th>
                <th scope="col">Cidade de destino</th>
                <th scope="col">Preço</th>
                <th scope="col">Horários</th>
                <th scope="col">Ações</th>
              </tr>
            </thead>
            <tbody>
              <tr>                
                <th scope="row">1</th>
                <td>Serrinha</td>
                <td>Feira de Santana</td>
                <td>R$ 20,00</td>
                <td><button type="button" class="btn btn-secondary">Editar</button></td>
                <td></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Serrinha</td>
                <td>Feira de Santana</td>
                <td>R$ 20,00</td>
                <td><button type="button" class="btn btn-secondary">Editar</button></td>
                <td></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Serrinha</td>
                <td>Feira de Santana</td>
                <td>R$ 20,00</td>
                <td><button type="button" class="btn btn-secondary">Editar</button></td>
                <td></td>
              </tr>
            </tbody>
          </table>
    </div>
</div>
          

@endsection