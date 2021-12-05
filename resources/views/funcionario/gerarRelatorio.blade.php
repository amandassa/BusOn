@extends('app')

@section('title', 'Gerar Relatório - ')
@section('content')
<link href="/css/estiloPadrao.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="{{ asset('js/jquery.mask.js') }}"></script>

<style>
  @media print {
    body * {
    visibility: hidden;
    }
  
    #printable, #printable * {
      visibility: visible;
    }
  }
</style>

<script>  
  $(document).ready(function(){
    $(".cpf").mask('000.000.000-00');

  $("#div_impressao").printThis();

  });

  function impressao(){    
    var printContents = document.getElementById('div_impressao').innerHTML;
     var originalContents = document.body.innerHTML;
     document.body.innerHTML = printContents;
     window.print();
     document.body.innerHTML = originalContents;    
  }
</script>

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

  <div class="card printable" id="div_impressao">
    <div class="card-body">

    @isset($linha_chegada)
    <h4> Relatório de Passageiros da linha: {{$linha_partida}} x {{ $linha_chegada}} </h4>
    @endisset

      <table class="table">
          <thead>
          <tr>
            <th scope="col">Nº</th>
            <th scope="col">Nome</th>
            <th scope="col">CPF</th>
            <th scope="col">Passagem</th>
            <th scope="col">Cidade de Partida</th>          
            <th scope="col">Data Partida <br> Hora Partida</th>                        
            <th scope="col">Cidade de Chegada</th>          
            <th scope="col">Data Chegada <br> Hora Chegada</th>                                  
          </tr>
          </thead>
        <tbody>                                            
              @foreach ($passagens as $passagem)
              <tr>
                <th scope="row"> {{ $passagem['num_assento'] }} </th>                  
                  <td> {{ $passagem['nome'] }} </td>
                  <td id="cpf"> {{ $passagem['cpf'] }} </td>                  
                  <td> {{ $passagem['codigo'] }} </td>                  
                  <td> {{ $passagem['cidade_partida'] }} </td>                  
                  <td> {{ $passagem['data_partida'] }} <br> {{ $passagem['horario_partida']}}</td>                  
                  <td> {{ $passagem['cidade_chegada'] }} </td>                  
                  <td> {{ $passagem['data_chegada'] }} <br> {{  $passagem['horario_chegada']}}</td>                  
              </tr>
              @endforeach               
        </tbody>
      </table>  
  </div>
</div>  
    <div class="d-flex" style="margin-top:2em;">
      <div class="mx-auto">
        <button class="botao botaoAmarelo" type="button" onClick="impressao()" >Imprimir</button>
      </div>
    </div>
  

    </div></div>
    
     
</div>

@endsection      