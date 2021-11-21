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
            <th scope="col">Código</th>
            <th scope="col">Nome</th>
            <th scope="col">CPF</th>
            <th scope="col">Data</th>          
          </tr>
          </thead>
        <tbody>        
              @php $count = 0; @endphp                
              @foreach ($clientes as $cliente)
              <tr>
                <th scope="row">{{ $count }}</th>
                  <td> {{ $cliente->nome }} </td>
                  <td> {{ $cliente->CPF }} </td>
                  <td> {{ $cliente->nome }} </td>
                  @php $count = $count + 1; @endphp
              </tr>
              @endforeach                        
        </tbody>
      </table>  
  </div>
</div>  
    <div class="d-flex">
      <div class="mx-auto">
        {{ $clientes->links() }}
      </div>
    </div>
  

    <button class="btn btn-primary" type="button">Imprimir</button></div></div>
    
     
</div>

@endsection      