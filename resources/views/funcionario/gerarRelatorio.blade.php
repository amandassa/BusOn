@extends('app')

@section('title', 'Gera Relatório - ')
@section('content')
<div class="container">
    <h4 class="titulo">Relatório de passageiros por linha</h4> 
    
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

    {{ $clientes->links('funcionario.gerarRelatorio', ['clientes' => $clientes]) }}

    <button class="btn btn-primary" type="button">Imprimir</button></div></div>
    
     
</div>

@endsection      