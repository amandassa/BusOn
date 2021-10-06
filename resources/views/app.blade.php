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
        <div class="divLogo" >
            <img class="logo" src="{{URL::asset('/imagens/BusOn.png')}}" />            
        </div>
        
        <div style="width:70%;"></div>
            
        <div class="operacoesUsuario">            
            <button type="button" class="btn btn-info">Sair</button>
        </div>
    </div>
        
    <div style="padding:2em;margin:2em;">
        @yield('content')
    </div>
        
    <div id="bottomBar" class="footer navbar-fixed-bottom bottomBar">
        <div class="logoSertao"></div>
        <div class="rodape">
            <label><b>BusOn</b> - Sistema de Compra e Venda de Passagens Online.</label>
            <label>Avenida Transnordestina, S/N, Novo Horizonte. Feira de Santana-BA.</label>
            <label><b>Desenvolvido por Sertão Code, 2021.</b></label>
        </div>
        <div class="formasPagamento"></div>                
    </div>
</body>
