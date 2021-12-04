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
        <div class="row justify-content-center" id="coluna">
            <div class="col-md" id="centralizado">
                <div class="card" id="cards">
                    <div class="card-body" id="cb">
                        @if($linhas == null)
                            <p class="text-center">Não encontramos a rota selecionada!</p>
                        @else
                            <table class="table table-hover tabela" style="text-align: center">
                                <thead>
                                    <tr>
                                        <th scope="col">Código</th>
                                        <th scope="col">Origem</th>
                                        <th scope="col">Destino</th>
                                        <th scope="col">Preço</th>
                                        <th scope="col">Tipo</th>
                                        <th data-orderable="false" scope="col"></th>
                                    </tr>
                                </thead>
                            <tbody>
                                @foreach ($linhas as $linha)
                                    <tr>
                                        <th scope="row">{{ $linha['codigo']}}</th>
                                        <td> {{ $linha['partida']}} </td>
                                        <td> {{ $linha['destino']}} </td>
                                        <td> R$ {{$linha['preco']}} </td>
                                        @if ($linha['tipo'] == 1 )
                                            <td> Direta </td>
                                        @else
                                            <td> Comum </td>
                                        @endif
                                        <td><button type="button" class="btn btn-info" id="btnSel">Selecionar</button></td>
                                    </tr>
                                @endforeach          
                             </tbody>
                            </table>
                        @endif                       
                    </div>
                  </div>
                </div>
                
                <!--div class="btn" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group mr-2" role="group" aria-label="First group">
                      <button type="button" class="btn btn-secondary"><<</button>
                      <button type="button" class="btn btn-secondary">1</button>
                      <button type="button" class="btn btn-secondary">2</button>
                      <button type="button" class="btn btn-secondary">3</button>
                      <button type="button" class="btn btn-secondary">4</button>
                      <button type="button" class="btn btn-secondary">>></button>
                </div-->
            </div>
        </div>             
    </div>
                
                 
    

@endsection

