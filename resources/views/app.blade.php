<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') BusOn</title>
    <link href="/css/app.css" rel="stylesheet">    
    <link href="https://fonts.googleapis.com/css2?family=Darker+Grotesque:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/css/estiloPadrao.css')}}">
    <link rel="stylesheet" href="/css/estiloMigalha.css">
    <link rel="stylesheet" href="/css/estiloComponentes.css">
    <script src="/js/app.js"></script>    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="/js/redimensionar.js"></script>    
</head>
    
<body "cz-shortcut-listen="true">
        <nav class="navbar mx-auto"> <!-- Header/NavBar-->
            <div class="container mx-auto" style="margin: 0px;">
                <div class="row flex-nowrap nomargin"> <!-- Linha -->
                    <div class="col-sm-4"> <!-- Coluna da logo -->
                            <a href="{{ route('home')}}"><img class="logo" src="{{URL::asset('/imagens/logoBus.png')}}" /></a>
                    </div>
                    <div class="col-md-8"> <!-- Coluna de espaço -->                       
                    </div>
                    <div class="col-md-6 d-flex flex-column justify-content-center align-items-center" style="text-align: right; vertical-align: middle;"> <!-- Coluna das opções-->
                        @if (auth('funcionario')->user() || auth('cliente')->user())
                            <div class="dropdown">
                                @if (auth('funcionario')->user())  <!-- Autenticado como funcionário-->
                                    <i class="fas fa-user dropbtn"> </i> Olá, {{auth('funcionario')->user()->nome}} <i class="fa fa-caret-down"></i>
                                    <div class="dropdown-content" style="text-align: left">
                                        <a href="#";>Meus Dados</a>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit()">Sair</a>
                                    </div>
                                @else <!-- Autenticado como cliente-->
                                    <i class="fas fa-user dropbtn"> </i> Olá, {{auth('cliente')->user()->nome}} <i class="fa fa-caret-down"></i>
                                                                
                                    <div class="dropdown-content" style="text-align: left">
                                    <a href="">Minhas Passagens</a>
                                    <a href="{{route('perfilCliente')}}">Meus Dados</a>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit()">Sair</a>
                                    </div>
                            </div>
                          @endif 
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>         
                        @endif
                    </div>
                </div>
            </div>            
    </nav>
    
    <section>
    <div class="align-self-center conteudo">
        <div class="divCentral">
            @hasSection('usaMigalha')
            <div class="divMigalha">
                <lu class="migalha migalhaRetangulo @yield('estiloMigalha1')">
                    <lu class="migalha migalhaTriangulo @yield('estiloMigalhaT1')" style="border-color: transparent transparent transparent #F5F5F5;"> </lu>
                    <a class="link @yield('linkM1')" href="@yield('rotaMigalha1')" > @yield('nomeMigalha1') </a>
                </lu>
                <lu class="migalha migalhaRetangulo @yield('estiloMigalha2')">
                    <lu class="migalha migalhaTriangulo @yield('estiloMigalhaT2')"></lu>
                    <a class="link @yield('linkM2')" href="@yield('rotaMigalha2')"> @yield('nomeMigalha2') </a>
                </lu>
                <lu class="migalha migalhaRetangulo @yield('estiloMigalha3')">
                    <lu class="migalha migalhaTriangulo @yield('estiloMigalhaT3')"></lu>
                    <a class="link @yield('linkM3')" href="@yield('rotaMigalha3')"> @yield('nomeMigalha3') </a>
                </lu>
                @hasSection('usaQuarta')
                <lu class="migalha migalhaRetangulo @yield('migalhaRetanguloConfirmacao')">
                    <lu class="migalha migalhaTriangulo @yield('migalhaTrianguloPagamento')"></lu>
                    <a class="link @yield('linkM4')" href="@yield('rotaMigalha4')"> @yield('nomeMigalha4') </a>
                </lu>
                @endif              
                <lu class="migalha migalhaTriangulo @yield('estiloMigalhaUltimo')"></lu>            
            </div>
            @endif
            @yield('content')
            </div>
    </div>
     </section>    
        
    <footer class="fixar-rodape"> <!-- Footer/Rodape -->
    <div class="justify-content-center navbar bottomBar"> 
        <div class="container" style="margin:0px; padding:0px;">
            <div class="row justify-content-center">  <!-- Linha -->
                    <div class="col-md-2 logo d-flex flex-column justify-content-center align-items-center"> <!-- Coluna da logo -->
                        <img style="width:100%; height:100%;" src="{{URL::asset('/imagens/SertaoCode.png')}}" />
                    </div>
                    <div class="col-md-5 d-flex flex-column justify-content-center align-items-center"> <!-- Coluna das informacoes do roape -->
                        <div class="rodape">
                            <label><b>BusOn</b> - Sistema de Compra e Venda de Passagens Online.</label>
                            <label>Avenida Transnordestina, S/N, Novo Horizonte. Feira de Santana-BA.</label>
                            <label><b>Desenvolvido por Sertão Code, 2021.</b></label>
                        </div>  
                    </div>
                    <div class="col-md-2 formasPagamento d-flex flex-column justify-content-center align-items-center"> <!-- Coluna das formas de pagamento -->
                            <img style="width:100%; height:100%;" src="{{URL::asset('/imagens/pagamentos.png')}}" />
                    </div>
            </div>
        </div>
    
    </div>
    </footer>
</body>
