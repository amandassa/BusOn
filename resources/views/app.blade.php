<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') BusOn</title>
    <link href="/css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Darker+Grotesque:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/css/estilos.css')}}">
</head>
    
    
<body>
    <div class="paginaAcessoCliente pagina">
        <div class="barraSuperior"> <!--BARRA SUPERIOR-->
            <div class="divisaoEsquerda">
                <div class="divisaoIcone">
                    <img class="icone" src="{{URL::asset('/imagens/iconeProduto.png')}}">
                </div>
                <div class="divisaoNome">
                    <label class="nomeCentral nome" for="name">BusOn</label>
                </div>
            </div>
            <div class="divisaoCentral">
            </div>
            <div class="divisaoDireita">
            </div>
        </div>
        
        <div style="padding:10em;">
        @yield('content')
        </div>
        
        <div class="barraInferior"> <!--BARRA INFERIOR-->
            <div class="divisaoEsquerda">
                <div class="divisaoIcone">
                    <img class="icone" src="{{URL::asset('/imagens/iconeEmpresa.png')}}">
                </div>
                <div class="divisaoNome">
                    <label class="nomeSuperior nome" for="name">SERTÃO</label>
                    <label class="nomeInferior nome" for="name">C O D E</label>
                </div>
            </div>
            <div class="divisaoCentral">
                <label><b>BusOn</b> - Sistema de Compra e Venda de Passagens Online.</label>
                <label>Avenida Transnordestina, S/N, Novo Horizonte. Feira de Santana-BA.</label>
                <label><b>Desenvolvido por Sertão Code, 2021.</b></label>
            </div>
            <div class="divisaoDireita">
                <img class="iconeCartao" src="{{URL::asset('/imagens/cartaoVisa.png')}}">
                <img class="iconeCartao" src="{{URL::asset('/imagens/cartaoMasterCard.png')}}">
                <img class="iconeCartao" src="{{URL::asset('/imagens/cartaoAmericanExpress.png')}}">
                <img class="iconeCartao" src="{{URL::asset('/imagens/cartaoDiscover.png')}}">
            </div>
        </div>
    </div>
</body>
