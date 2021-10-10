<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/estiloPaginas.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Darker+Grotesque:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <title>@yield('noTitulo')BusOn</title>
</head>
<body>
<div class="pagina" style="min-width:@yield('larguraMinima')">
    <!--BARRA SUPERIOR-->
    <div class="barraSuperior barra">
        <div class="divisaoEsquerda">
            <div class="divisaoIcone">
                <img class="iconeLogoTipo" src="/assets/img/iconeProduto.png">
            </div>
            <div class="divisaoNome">
                <label class="nomeCentral nome" for="name">BusOn</label>
            </div>
        </div>
        <div class="divisaoCentral">
            <!--PREENCHE A DIVISAO CENTRAL DA BARRA SUPERIOR-->
            @yield('naDivisaoCentralDaBarraSuperior')
        </div>
        <div class="divisaoDireita">
            <!--PREENCHE A DIVISAO DIREITA DA BARRA SUPERIOR-->
            @yield('naDivisaoDireitaDaBarraSuperior')
        </div>
    </div>
    <!--BARRA CENTRAL-->
    <div class="barraCentral barra" style="min-height:@yield('alturaMinima')">
        <!--PREENCHE A BARRA CENTRAL-->
        @yield('naBarraCentral')
    </div>
    <!--BARRA INFERIOR-->
    <div class="barraInferior barra">
        <div class="divisaoEsquerda">
            <div class="divisaoIcone">
                <img class="iconeLogoTipo" src="/assets/img/iconeEmpresa.png">
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
            <img class="iconeCartao" src="/assets/img/cartaoVisa.png">
            <img class="iconeCartao" src="/assets/img/cartaoMasterCard.png">
            <img class="iconeCartao" src="/assets/img/cartaoAmericanExpress.png">
            <img class="iconeCartao" src="/assets/img/cartaoDiscover.png">
        </div>
    </div>
</div>
</body>
</html>