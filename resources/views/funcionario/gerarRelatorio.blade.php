@extends('app')

@section('title', 'Gerar Relatório - ')
@section('content')
<link href="/css/estiloPadrao.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="{{ asset('js/jquery.mask.js') }}"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css"> 
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>

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
    $(window).on("load", function(){
      $(".cpf").mask('999.999.999-99') //máscara cpf
    });        

  $('#gerarRelatorio').DataTable( {
    select:{selector:'#btnSel'},
    searching: false,
    info:false, 
    bPaginate:false,
    language: 
        {
            zeroRecords: "Não há passagens para viagens hoje!!",
            infoEmpty: "Pesquise a passagem desejada no campo acima!",
        }
} );


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
    
    @if(count($passagens) == 0 )
        <div class="alert alert-warning alert-dismissable">
          Sem passagens registradas para a linha <b>{{$linha_partida}}</b> x <b> {{ $linha_chegada}} </b> na data <b>{{ date('d/m/Y', strtotime($data_partida))}} </b>!  
      </div>
    @endif
    @endisset    
    
      <table class="table text-center" id="gerarRelatorio">
          <thead>
          <tr>
            <th scope="col">Nº</th>
            <th scope="col">Nome</th>
            <th scope="col">CPF</th>
            <th scope="col">Passagem</th>
            <th scope="col">Partida</th>          
            <th scope="col">Data/Hora <br> Partida</th>                        
            <th scope="col">Destino</th>          
            <th scope="col ">Data/Hora <br> Destino</th>                                  
          </tr>
          </thead>
        <tbody>                                            
              @foreach ($passagens as $passagem)
              <tr>
                <th scope="row"> {{ $passagem['num_assento'] }} </th>                  
                  <td> {{ $passagem['nome'] }} </td>
                  <td> <p class="cpf">{{ $passagem['cpf'] }}</p> </td>                  
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
        <button class="botao botaoAmarelo" type="button" style="min-width: 100px;" onClick="impressao()" >Imprimir</button>
        <button type="button" class="botao" style="background-color: black; color: #F9C536; min-width: 100px;" id="btnCriarConta" onClick="window.location.href = '/';"> Voltar </button>
      </div>
    </div>
  

    </div></div>
    
     
</div>

@endsection      