@extends('funcionario.inicial_func')

@section('conteudoPadrao')


@section('campoBotoes')
        <a class="btn botaoAmarelo botaoSelecaoInicial" href="gerenciaUsuarios" role="button">
            <span class="material-icons" id="iconBotoesPrincipais">people_alt</span>
            Gerenciar Usuários
        </a>

        <a class="btn botaoAmarelo botaoSelecaoInicial" href="verificarLogs" role="button">
            <span class="material-icons" id="iconBotoesPrincipais">description</span>
            Verificar <br> Logs
        </a>

        <a class="btn botaoAmarelo botaoSelecaoInicial" href="adicionarLinha" role="button">
                <span class="material-icons" id="iconBotoesPrincipais">add</span>
                Cadastrar <br> Linha
            </a>
@endsection


@section('campoRelatorios')
    <div class="row text-center">

        <div class="quadro"> <!--Passagens vendidas na para uma linha hoje-->
            <div class="card-body">
                <form method="POST" class="form" action="{{route('estatisticas')}}">
                    @csrf
                    <div class="caixaPesquisa">
                        <input type="number" class="caixaTexto" name="buscarLinhaHoje" placeholder="Pesquisar vendas da linha hoje">
                        <a>
                            <span class="material-icons" id="iconPesquisa">search</span>
                        </a>
                    </div>
                </form>
                @if($dados['cidade_partida_vendas_linha'] == '' or $dados['cidade_chegada_vendas_linha'] == '')
                    <p><b>Sem dados dessa linha.</b></p>
                @else
                    <p class="textoNumeroAzul"><b>{{$dados['total_vendas_linha']}}</b></p>
                    <p><b>Passagens vendidas para {{$dados['cidade_partida_vendas_linha']}} X {{$dados['cidade_chegada_vendas_linha']}} hoje</b></p>
                @endif
            </div>
        </div>

        <div class="quadro" > <!--Passagens vendidas no total hoje-->
            <div class="card-body">
                <p class="textoNumeroAmarelo"><b>{{$dados['passagens_vendidas_total']}}</b></p>
                <p><b>Passagens vendidas hoje</b></p>
            </div>
        </div>

        <div class="quadro"> <!--Total de clientes que acessaram o sistema em determinado dia-->
            <div class="card-body">
                <div class="caixaPesquisa">
                    <input type="date" class="caixaTexto" id="buscarAcessos">
                    <a href="#">
                        <span class="material-icons" id="iconPesquisa">search</span>
                    </a>
                </div>
                <p class="textoNumeroAzul"><b>1557</b></p>
                <p><b>Clientes acessaram o sistema no dia 25/10/2021</b></p>
            </div>
        </div>
    </div>
@endsection

@endsection