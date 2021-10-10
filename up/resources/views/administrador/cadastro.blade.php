@extends('padraoCadastroUsuario')

@section ('alturaMinima','440px')

@section('naDivisaoDireitaDaBarraSuperior')
<!--MENU DE OPÇÕES-->
<i class="fa fa-user botao menu" style="font-size:18px;color:black">
    <label for="nomeUsuario" class="legenda">Olá, Cláudio</label>
    <div class="itensMenu">
        <a class="link itemMenu" href="/perfilAdministrador">Editar Perfil</a>
        <a class="link itemMenu" href="#">Vender Passagens</a>
        <a class="link itemMenu" href="#">Consultar Linhas</a>
        <a class="link itemMenu" href="#">Gerar Relatórios</a>
        <a class="link itemMenu" href="#">Gerenciar Usuários</a>
        <a class="link itemMenu" href="#">Verificar Log de Registros</a>
    </div>
</i>
<!--BOTÃO DE HOME-->
<i class="fa fa-home botao" style="font-size:38px;color:black"></i>
<button class="botao botaoSecundario" name="sairConta" value="sairConta" id="sairConta">Sair</button> <!--BOTÃO DE SAIR-->   
@endsection