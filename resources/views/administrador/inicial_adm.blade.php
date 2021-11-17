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

        <div class="quadro"> <!--Pesquisar linha-->
            <div class="card-body">
                <div class="caixaPesquisa">
                    <input type="text" class="caixaTexto" id="buscarLinhaHoje" placeholder="Pesquisar linha">
                    <a href="#">
                        <span class="material-icons" id="iconPesquisa">search</span>
                    </a>
                </div>
                <p class="textoNumeroAzul"><b>25</b></p>
                <p><b>Passagens vendidas para Jaguaquara X Salvador hoje</b></p>
            </div>
        </div>

        <div class="quadro" > <!--Passagens vendidas na semana-->
            <div class="card-body">
                <p class="textoNumeroAmarelo"><b>600</b></p>
                <p><b>Passagens vendidas hoje</b></p>
            </div>
        </div>

        <div class="quadro"> <!--Passagens vendidas na semana-->
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