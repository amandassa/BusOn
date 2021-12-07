@extends('app')

@section('title', 'Tela Inicial - ')
    
@section('content')
    <link href="/css/estiloInicio.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <div class="container">
        @yield('conteudoPadrao')
        <p class="textoPreto">Dashboard</p> 
        
        <div class="row d-flex justify-content-center"> <!--Botoes de seleção para tela inicial do funcionario-->
            <a class="btn botaoAmarelo botaoSelecaoInicial" href="venderPassagens" role="button">
                <span class="material-icons" id="iconBotoesPrincipais">shopping_cart</span>
                Vender <br> Passagens
            </a>

            <a class="btn botaoAmarelo botaoSelecaoInicial" href="consultar_linhas" role="button">
                <span class="material-icons" id="iconBotoesPrincipais">book_online</span>
                Consultar <br> Linha
            </a>

            <a class="btn botaoAmarelo botaoSelecaoInicial" href="gerarRelatorio" role="button">
                <span class="material-icons" id="iconBotoesPrincipais">library_books</span>
                Relatório <br> da Linha
            </a>
        
            @yield('campoBotoes')
        </div>

        <p class="textoPreto">Estatísticas</p>
        
        
        @yield('campoRelatorios')
        
        <div class="row text-center"> <!-- Linha 1 -->
            <div class="quadro"> <!--Passagens vendidas no dia-->
                <div class="card-body">
                    <p class="textoNumeroAmarelo"><b>{{$dados['qtd_vendas_hoje']}}</b></p>
                    <p><b>Passagens vendidas por você hoje</b></p>
                </div>
            </div>

            <div class="quadro"> <!--Pesquisar linha-->
                <div class="card-body">
                    <form method="POST" class="form" name="formEstatisticas" action="{{route('estatisticas')}}">
                        @csrf
                        <div class="caixaPesquisa">
                            <input type="number" min="1" class="caixaTexto" id="buscarLinha" name="buscarLinha" placeholder="Pesquisar vendas da linha">
                            <button style=" background-color: #ffffff00; border: 0px;">
                                <span class="material-icons" id="iconPesquisa">search</span>
                            </button>
                        </div>
                    </form>
                    @if($dados['cidade_partida'] == '' or $dados['cidade_chegada'] == '')
                        <p><b>Sem dados dessa linha.</b></p>
                    @else
                        <p class="textoNumeroAzul"><b>{{$dados['total_vendas']}}</b></p>
                        <p><b>Passagens vendidas para {{$dados['cidade_partida']}} x {{$dados['cidade_chegada']}}</b></p>
                    @endif
                </div>
            </div>

            <div class="quadro"> <!--Passagens vendidas no mes-->
                <div class="card-body">
                    <p class="textoNumeroAmarelo"><b>{{$dados['qtd_vendas_30dias']}}</b></p>
                    <p><b>Passagens vendidas por você nos últimos 30 dias</b></p>
                </div>
            </div>
        </div>

        <div class="row text-center"> <!-- Linha 2 -->
            <div class="quadro"> <!--Linha mais vendida-->
                <div class="card-body">
                    @if($dados['linha_mais_vendida_partida'] == '' or $dados['linha_mais_vendida_chegada'] == '')
                        <p><b>Não há linha mais vendida.</b></p>
                    @else
                        <p class="textoCidade"><b>{{$dados['linha_mais_vendida_partida']}} <br> {{$dados['linha_mais_vendida_chegada']}}</b></p>
                        <p><b>É a linha mais vendida com o total de {{$dados['total_mais_vendida']}} passagens</b></p>
                    @endif
                </div>
            </div>

            <div class="quadro"> <!--Passagens vendidas na semana-->
                <div class="card-body">
                    <p class="textoNumeroAmarelo"><b>{{$dados['qtd_vendas_7dias']}}</b></p>
                    <p><b>Passagens vendidas por você nos últimos 7 dias</b></p>
                </div>
            </div>

            <div class="quadro"> <!--Linha menos vendida-->
                <div class="card-body">
                    @if($dados['linha_menos_vendida_partida'] == '' or $dados['linha_menos_vendida_chegada'] == '')
                        <p><b>Não há linha menos vendida.</b></p>
                    @else
                        <p class="textoCidade"><b>{{$dados['linha_menos_vendida_partida']}} <br> {{$dados['linha_menos_vendida_chegada']}}</b></p>
                        <p><b>É a linha menos vendida com o total de {{$dados['total_menos_vendida']}} passagens</b></p>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection