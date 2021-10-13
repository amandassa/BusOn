@extends('app')

@section('title', 'Tela Inicial - ')
    
@section('content')
    <link href="/css/estiloInicio.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <div class="container">
        <div class="row" id="linhazinha3">
            <p class="textoPreto">Dashboard</p> 
        </div>
        <div class="row" id="linhazinha"> <!--Botoes de seleção para tela inical do funcionario-->
            <button type="button" class="btn botaoSelecaoInicial">
                <span class="material-icons">shopping_cart</span>
                Vender Passagens
            </button>

            <button type="button" class="btn botaoSelecaoInicial">
                <span class="material-icons">book_online</span>
                Consultar Linha
            </button>

            <button type="button" class="btn botaoSelecaoInicial">
                <span class="material-icons">library_books</span>
                Gerar Relatorio
            </button>

            <button type="button" class="btn botaoSelecaoInicial">
                <span class="material-icons">people_alt</span>
                Gerenciar Usuários
            </button>

            <button type="button" class="btn botaoSelecaoInicial">
                <span class="material-icons">description</span>
                Verificar Logs
            </button>

            <button type="button" class="btn botaoSelecaoInicial">
                <span class="material-icons">person</span>
                Editar <br> Perfil
            </button>
        </div>
        <div class="row" id="linhazinha3">
            <p class="textoPreto">Estatisticas</p>
        </div> 
        <div class="row text-center" id="linhazinha"> <!-- Linha 1 -->
            <div class="card"> <!--Passagens vendidas no dia-->
                <div class="card-body">
                    <p class="textoNumeroAmarelo">51</p>
                    <p><b>Passagens vendidas hoje</b></p>
                </div>
            </div>

            <div class="card"> <!--Passagens vendidas na semana-->
                <div class="card-body">
                    <p class="textoNumeroAzul"><b>126</b></p>
                    <p><b>Passagens vendidas essa semana</b></p>
                </div>
            </div>

            <div class="card"> <!--Passagens vendidas no mes-->
                <div class="card-body">
                    <p class="textoNumeroAmarelo">324</p>
                    <p><b>Passagens vendidas este mês</b></p>
                </div>
            </div>
        </div>

        <div class="row text-center" id="linhazinha"> <!-- Linha 2 -->
            <div class="card"> <!--Linha mais vendida-->
                <div class="card-body">
                <p class="textoCidade"><b>Feira de Santa <br> Jaguaquara</b></p>
                    <p><b>É a linha mais vendida</b></p>
                </div>
            </div>


            <div class="card"> <!--Pesquisar linha-->
                <div class="card-body">
                    <div class="search-box">
                        <input type="text" class="search-text" id="buscarLinha" placeholder="Pesquisar linha">
                        <a href="#">
                            <span class="material-icons">search</span>
                        </a>
                    </div>
                    <p class="textoNumeroAmarelo"><b>70</b></p>
                    <p><b>Passagens vendidas para Jaguaquara</b></p>
                </div>
            </div>

            <div class="card"> <!--Linha menos vendida-->
                <div class="card-body">
                    <p class="textoCidade"><b>Salvador <br> Jacobiana</b></p>
                    <p><b>É a linha menos vendida</b></p>
                </div>
            </div>
        </div>
    </div>

@endsection