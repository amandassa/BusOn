@extends('app')

@section('title', 'Tela Inicial - ')
    
@section('content')
    <link href="/css/estiloInicio.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <div class="container">
        @yield('conteudoPadrao')
        <p class="textoPreto">Dashboard</p> 
        
        <div class="row d-flex justify-content-center"> <!--Botoes de seleção para tela inical do funcionario-->
            <a class="btn botaoAmarelo botaoSelecaoInicial" href="venderPassagens" role="button">
                <span class="material-icons" id="iconBotoesPrincipais">shopping_cart</span>
                Vender <br> Passagens
            </a>

            <a class="btn botaoAmarelo botaoSelecaoInicial" href="consultar_linhas" role="button">
                <span class="material-icons" id="iconBotoesPrincipais">book_online</span>
                Consultar <br> Linha
            </a>

            <a class="btn botaoAmarelo botaoSelecaoInicial" href="geraRelat" role="button">
                <span class="material-icons" id="iconBotoesPrincipais">library_books</span>
                Gerar <br> Relatorio
            </a>
           
            <a class="btn botaoAmarelo botaoSelecaoInicial" href="editarPerfilFuncionario" role="button">
                <span class="material-icons" id="iconBotoesPrincipais">person</span>
                Editar <br> Perfil
            </a>
            

            @yield('campoBotoes')
        </div>

        <p class="textoPreto">Estatísticas</p>

        @yield('campoRelatorios')
        
        <div class="row text-center"> <!-- Linha 1 -->
            <div class="quadro"> <!--Passagens vendidas no dia-->
                <div class="card-body">
                    <p class="textoNumeroAmarelo">51</p>
                    <p><b>Passagens vendidas por você hoje</b></p>
                </div>
            </div>

            <div class="quadro"> <!--Pesquisar linha-->
                <div class="card-body">
                    <div class="caixaPesquisa">
                        <input type="text" class="caixaTexto" id="buscarLinha" placeholder="Pesquisar linha">
                        <a href="#">
                            <span class="material-icons" id="iconPesquisa">search</span>
                        </a>
                    </div>
                    <p class="textoNumeroAzul"><b>70</b></p>
                    <p><b>Passagens vendidas para Jaguaquara X Feira de Santana</b></p>
                </div>
            </div>

            <div class="quadro"> <!--Passagens vendidas no mes-->
                <div class="card-body">
                    <p class="textoNumeroAmarelo">324</p>
                    <p><b>Passagens vendidas por você este mês</b></p>
                </div>
            </div>
        </div>

        <div class="row text-center"> <!-- Linha 2 -->
            <div class="quadro"> <!--Linha mais vendida-->
                <div class="card-body">
                <p class="textoCidade"><b>Feira de Santa <br> Jaguaquara</b></p>
                    <p><b>É a linha mais vendida</b></p>
                </div>
            </div>

            <div class="quadro"> <!--Passagens vendidas na semana-->
                <div class="card-body">
                    <p class="textoNumeroAmarelo"><b>126</b></p>
                    <p><b>Passagens vendidas por você esta semana</b></p>
                </div>
            </div>

            <div class="quadro"> <!--Linha menos vendida-->
                <div class="card-body">
                    <p class="textoCidade"><b>Salvador <br> Jacobina</b></p>
                    <p><b>É a linha menos vendida</b></p>
                </div>
            </div>
        </div>
    </div>

@endsection