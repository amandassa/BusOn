@extends('app')

@section('title', 'Gerar Relatório - ')
@section('content')
<link href="/css/estiloPadrao.css" rel="stylesheet">

@push('js')
<script>
  $( "#date" ).datepicker({
    format: "dd/mm/yyyy",
    language: "pt-BR"
  });
  $(document).ready(function() {
    $('.pagination').addClass('align-self-center');
    $('.pagination li').addClass('page-item');
    $('.pagination li a').addClass('page-link');
    $('.page-item.active .page-link').addClass('corPaginacao');
    $( "#date" ).datepicker({
    format: "dd/mm/yyyy",
    language: "pt-BR"
  });
  });    
</script>
@endpush

<div class="container">
    <h4 class="titulo">Relatório de passageiros por linha</h4> 
    
    <form method="POST" action="{{ route('buscarRelatorio') }}" lang="pt" class="form">
    @csrf  
    <div class="row" style="margin-bottom:1em;">      
        <div class="col-sm-6">
          <span>Código da Linha: </span>
          <input name="codigo_linha" type="text" class="form-control">
        </div>

        <div class="col-sm-4">
          <span>Data: </span>
          <input type="date" name="data" placeholder="dd/mm/yyyy" class="form-control">          
        </div>

        <div class="col-sm-2">        
          <span desativacted style="color: #f8fafc;">Hold On</span>           
          <button class="botao botaoAmarelo" type="submit">Gerar</button>
        </div>      
     </div>
    </form>

  <div class="card">
    <div class="card-body">
      <table class="table">
          <thead>
          <tr>
            <th scope="col">Nº Assento</th>
            <th scope="col">Nome</th>
            <th scope="col">CPF</th>
            <th scope="col">Passagem</th>
            <th scope="col">Cidade de Partida</th>          
            <th scope="col">Horário</th>          
            <th scope="col">Cidade de Chegada</th>          
            <th scope="col">Horário</th>                      
          </tr>
          </thead>
        <tbody>                                            
              @foreach ($passagens as $passagem)
              <tr>
                <th scope="row"> {{ $passagem['num_assento'] }} </th>                  
                  <td> {{ $passagem['nome'] }} </td>
                  <td> {{ $passagem['cpf'] }} </td>                  
                  <td> {{ $passagem['codigo'] }} </td>                  
                  <td> {{ $passagem['cidade_partida'] }} </td>                  
                  <td> {{ $passagem['horario_partida'] }} </td>                 
                  <td> {{ $passagem['cidade_chegada'] }} </td>                  
                  <td> {{ $passagem['horario_chegada'] }} </td>                   
              </tr>
              @endforeach               
        </tbody>
      </table>  
  </div>
</div>  
    <div class="d-flex">
      <div class="mx-auto">
        {{ $passagens->links() }}
      </div>
    </div>
  

    <button class="btn btn-primary" type="button">Imprimir</button></div></div>
    
     
</div>

@endsection      