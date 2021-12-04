@extends('app')

@section('title', 'Selecionar Passagem - ')

@section('content')

    @section('usaMigalha', TRUE)
    @section('nomeMigalha1', 'Seleção de Passagem')
    @section('rotaMigalha1') {{ route('selecao') }} @endsection
    @section('nomeMigalha2', 'Pagamento')
    @section('rotaMigalha2') {{ route('pagamento') }} @endsection
    @section('nomeMigalha3', 'Confirmação')
    @section('linkM1', 'ativado')
    @section('estiloMigalha1', 'migalhaRetanguloAtiva')
    @section('estiloMigalhaT1', 'migalhaTrianguloAtiva')
    <link href="/css/estiloSelecao.css" rel="stylesheet">



    <div class="container" id="cont">
        <h5>Seleção de Passagem!</h5>
        
        <div class="card">
            <div class="card-body">
                @if($linhas == null)
                    <p class="text-center">Não encontramos a rota selecionada!</p>
                @else
                    <table class="table table-hover tabela" style="text-align: center">
                        <thead>
                            <tr>
                                <th scope="col">Origem</th>
                                <th scope="col">Destino</th>
                                <th scope="col">Data de partida <br> Horario de partida</th>
                                <th scope="col">Data de chegada <br> Horario de chegada</th>
                                <th scope="col">Preço</th>
                                <th scope="col">Tipo</th>
                                <th data-orderable="false" scope="col"></th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach ($linhas as $linha)
                            <tr>
                                <td> {{ $linha['partida']}} </td>
                                <td> {{ $linha['destino']}} </td>
                                <td> {{$linha['data_partida']}} <br> {{$linha['horario_partida']}}</td>
                                <td> {{$linha['data_chegada']}} <br> {{$linha['horario_chegada']}} </td>
                                <td> R$ {{$linha['preco']}} </td>
                                @if ($linha['tipo'] == 1 )
                                    <td> Direta </td>
                                @else
                                    <td> Comum </td>
                                @endif
                                
                                <td><button type="button" class="btn btn-info" id="btnSel">
                                <a href="{{route('pagamento',['linha' => $linha])}}"></a>    
                                Selecionar</button></td>
                            </tr>
                        @endforeach          
                        </tbody>
                    </table>
                @endif                       
            </div>
            </div>
        </div>     
    </div>
                
                 
    

@endsection

