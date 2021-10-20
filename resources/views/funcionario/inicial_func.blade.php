@extends('app')

@section('title', 'Tela Inicial - ')
    
@section('content')
    <link href="/css/estiloInicio.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <div class="container">
        @yield('conteudoPadrao')
        <div class="row">
            <p class="textoPreto">Dashboard</p> 
        </div>
        <div class="row" id="linhazinha"> <!--Botoes de seleção para tela inical do funcionario-->
            <a class="btn btn-secondary botaoSelecaoInicial" href="#" role="button">
                <span class="material-icons" id="iconBotoesPrincipais">shopping_cart</span>
                Vender <br> Passagens
            </a>

            <a class="btn btn-secondary botaoSelecaoInicial" href="#" role="button">
                <span class="material-icons" id="iconBotoesPrincipais">book_online</span>
                Consultar <br> Linha
            </a>

            <a class="btn btn-secondary botaoSelecaoInicial" href="#" role="button">
                <span class="material-icons" id="iconBotoesPrincipais">library_books</span>
                Gerar <br> Relatorio
            </a>

            <a class="btn btn-secondary botaoSelecaoInicial" href="#" role="button">
                <span class="material-icons" id="iconBotoesPrincipais">person</span>
                Editar <br> Perfil
            </a>

            @yield('campoBotoes')
        </div>
        <div class="row">
            <p class="textoPreto">Estatísticas</p>
        </div> 
        <div class="row text-center" id="linhazinha"> <!-- Linha 1 -->
            <div class="quadro"> <!--Passagens vendidas no dia-->
                <div class="card-body">
                    <p class="textoNumeroAmarelo">51</p>
                    <p><b>Passagens vendidas hoje</b></p>
                </div>
            </div>

            <div class="quadro"> <!--Passagens vendidas na semana-->
                <div class="card-body">
                    <p class="textoNumeroAzul"><b>126</b></p>
                    <p><b>Passagens vendidas essa semana</b></p>
                </div>
            </div>

            <div class="quadro"> <!--Passagens vendidas no mes-->
                <div class="card-body">
                    <p class="textoNumeroAmarelo">324</p>
                    <p><b>Passagens vendidas este mês</b></p>
                </div>
            </div>
        </div>

        <div class="row text-center" id="linhazinha"> <!-- Linha 2 -->
            <div class="quadro"> <!--Linha mais vendida-->
                <div class="card-body">
                <p class="textoCidade"><b>Feira de Santa <br> Jaguaquara</b></p>
                    <p><b>É a linha mais vendida</b></p>
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
                    <p class="textoNumeroAmarelo"><b>70</b></p>
                    <p><b>Passagens vendidas para Jaguaquara</b></p>
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