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
</head>
    
<body "cz-shortcut-listen="true">
        <div class="navbar mx-auto barraSuperior"> <!-- Header/NavBar-->
            <div class="container mx-auto" style="margin: 0px;">
                <div class="row flex-nowrap nomargin"> <!-- Linha -->
                    <div class="col-md-4"> <!-- Coluna da logo -->
                            <img class="logo" src="{{URL::asset('/imagens/logoBus.png')}}" />            
                    </div>
                    <div class="col-md-12"> <!-- Coluna de espaço -->                       
                    </div>
                    <div class="col-md-2 mr-sm-2 d-flex flex-column justify-content-center align-items-center"> <!-- Coluna das opções-->
                        @Auth
                        <div class="operacoesUsuario">            
                            <button type="button" class="botaoAzul">Sair</button>
                        </div>
                        @endAuth
                    </div>
                </div>
            </div>        
    </div>
        
    <div class="align-self-center" style="margin-bottom: 50px;">
        @yield('content')
    </div>
        
    <footer class="footer"> <!-- Footer/Rodape -->
    <div class="justify-content-center bottomBar"> 
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
