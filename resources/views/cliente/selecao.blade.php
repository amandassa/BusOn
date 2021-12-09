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



    <div class="row justify-content-center col-10" style="margin-top:2em;">                
        <h5>Seleção de Passagem!</h5>        
    </div>

    <div class="row justify-content-center">
        @isset($erros)
            @if(count($erros) > 0)    
            <div class="col-6 alert alert-danger alert-dismissable" style="margin:10px;">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                <ul>                
                    @foreach ($erros as $erro)
                    <li>{{ $erro }}</li>
                    @endforeach
                </ul>        
            </div>        
            @endif
        @endisset        
    </div>
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">            
                <div class="card-body">                
                    @if($linhas == null)
                        <p class="text-center">Não encontramos a rota selecionada!</p>
                    @else
                        <table class="table table-hover tabela" style="text-align: center">
                            <thead>
                                <tr>
                                    <th scope="col">Partida</th>
                                    <th scope="col">Destino</th>
                                    <th scope="col">Data|Hora<br>Partida</th>
                                    <th scope="col">Data|Hora<br>Destino</th>
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
                                    <td> {{$linha['data_partida']}} <br> {{$linha['hora_partida']}}</td>
                                    <td> {{$linha['data_chegada']}} <br> {{$linha['hora_chegada']}} </td>
                                    <td> R$ {{$linha['preco']}} </td>
                                    @if ($linha['tipo'] == 1 )
                                        <td> Direta </td>
                                    @else
                                        <td> Comum </td>
                                    @endif
                                    
                                    <td>
                                    <a type="button" class="btn botao botaoAmarelo" href="{{route('pagamento', ['linha' => $linha])}}">Selecionar</a>    
                                    </td>
                                </tr>
                            @endforeach          
                            </tbody>
                        </table>
                    @endif                       
                </div>
                </div>
                </div>
            </div>   
        </div>
        </div>  
    </div>

    @isset($erros)
        <div class="row justify-content-center"    >
            <button type="button" class="botao botaoAmarelo" style="background-color: black; color: #F9C536;" id="btnCriarConta" onClick="window.location.href = '/';"> Voltar </button>             
        </div>
    @endisset   
                 
    

@endsection

