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
    
<body>
    <div class="navBar">                
        <nav-bar class="navBar">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                            <img class="logo" src="{{URL::asset('/imagens/logoBus.png')}}" />            
                    </div>
                    <div class="col-md-8">
                        
                    </div>
                    <div class="col-md d-flex flex-column justify-content-center align-items-center">
                        @Auth
                        <div class="operacoesUsuario">            
                            <button type="button" class="btn btn-info">Sair</button>
                        </div>
                        @endAuth
                    </div>
                </div>
            </div>
        </nav-bar>        
    </div>
        
    <div style="margin:2em;">
        @yield('content')
    </div>
        
    <footer class="bottomBar">
        <div class="container max-width" style="align-items: center;">
            <div class="row centralizador">        
                    <div class="col-md-2 logo d-flex flex-column justify-content-center align-items-center">
                        <img style="width:100%; height:100%;" src="{{URL::asset('/imagens/SertaoCode.png')}}" />
                    </div>
                    <div class="col-md-5 d-flex flex-column justify-content-center align-items-center">
                        <div class="rodape">
                            <label><b>BusOn</b> - Sistema de Compra e Venda de Passagens Online.</label>
                            <label>Avenida Transnordestina, S/N, Novo Horizonte. Feira de Santana-BA.</label>
                            <label><b>Desenvolvido por Sertão Code, 2021.</b></label>
                        </div>  
                    </div>
                    <div class="col-md-2 formasPagamento d-flex flex-column justify-content-center align-items-center">                        
                            <img style="width:100%; height:100%;" src="{{URL::asset('/imagens/pagamentos.png')}}" />
                    </div>
            </div>
        </div>                
        
    </footer>
</body>
