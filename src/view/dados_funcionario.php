<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/padrao.css">
    <link rel="stylesheet" href="./assets/css/dados_funcionario.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Darker+Grotesque:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <title>Meus Dados</title>
</head>
<body>
<div class="pagina">
        <div class="barraSuperior barra"> <!--BARRA SUPERIOR-->
            <div class="divisaoEsquerda">
                <div class="divisaoIcone">
                    <img class="iconeLogoTipo" src="./assets/img/iconeProduto.png">
                </div>
                <div class="divisaoNome">
                    <label class="nomeCentral nome" for="name">BusOn</label>
                </div>
            </div>
            <div class="divisaoCentral">
            </div>
            <div class="divisaoDireita">
                <i class="fa fa-user botao menu" style="font-size:18px;color:black"> <!--MENU DE OPÇÕES-->
                    <label for="nomeUsuario" class="legenda">Olá, Cláudio</label>
                    <div class="itensMenu">
                        <a class="link itemMenu" href="#">Vender Passagens</a>
                        <a class="link itemMenu" href="#">Consultar Linhas</a>
                        <a class="link itemMenu" href="#">Gerar Relatórios</a>
                    </div>
                </i>
                <i class="fa fa-mail-reply botao" style="font-size:32px;color:black"></i> <!--BOTÃO DE GOBACK-->
                <i class="fa fa-home botao" style="font-size:38px;color:black"></i> <!--BOTÃO DE HOME-->
                <button class="botao botaoSecundario" name="sairConta" value="sairConta" id="sairConta">Sair</button> <!--BOTÃO DE SAIR-->
            </div>
        </div>
        <div class="barraCentral barra"> <!--BARRA CENTRAL-->
            <div class="divisaoPrimaria">
                <h1 class="titulo">Meus Dados</h1>
                <div class="divisaoBase">
                    <div class="divisaoEntrada">
                        <label class="legenda" for="nomeCompleto">Nome:</label>
                        <input class="entradaTexto" type="text" name="nomeCompleto" id="nomeCompleto">
                    </div>
                    <div class="divisaoEntrada">
                        <label class="legenda" for="email">E-mail:</label>
                        <input class="entradaTexto" type="email" name="email" id="email">
                    </div>
                    <div class="divisaoEntrada">
                        <label class="legenda" for="cpf">CPF:</label>
                        <input class="entradaTexto entradaTextoDesativado" type="text" name="cpf">
                    </div>
                    <div class="divisaoEntrada">
                        <label class="legenda" for="matricula">Matricula:</label>
                        <input class="entradaTexto entradaTextoDesativado" type="text" name="matricula">
                    </div>
                    <div class="divisaoEntrada">
                        <label class="legenda" for="senha">Senha:</label>
                        <input class="entradaTexto" type="password" name="senha" id="senha">
                    </div>
                    <div class="divisaoEntrada">
                        <label class="legenda" for="confirmacaoSenha">Confirmação de senha:</label>
                        <input class="entradaTexto" type="password" name="confirmacaoSenha" id="confirmacaoSenha">
                    </div>
                    <div class="divisaoControle">
                        <button class="botao botaoPrimario" name="salvarDados" value="salvarDados" id="salvarDados">Salvar dados</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="barraInferior barra"> <!--BARRA INFERIOR-->
            <div class="divisaoEsquerda">
                <div class="divisaoIcone">
                    <img class="iconeLogoTipo" src="./assets/img/iconeEmpresa.png">
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
                <img class="iconeCartao" src="./assets/img/cartaoVisa.png">
                <img class="iconeCartao" src="./assets/img/cartaoMasterCard.png">
                <img class="iconeCartao" src="./assets/img/cartaoAmericanExpress.png">
                <img class="iconeCartao" src="./assets/img/cartaoDiscover.png">
            </div>
        </div>
    </div>
</body>
</html>