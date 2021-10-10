@extends('padraoPerfil')

@section('alturaMinima', '498px')

@section('nosItensDeMenu')
    <a class="link itemMenu" href="#">Vender Passagens</a>
    <a class="link itemMenu" href="#">Consultar Linhas</a>
    <a class="link itemMenu" href="#">Gerar Relatórios</a>
    <a class="link itemMenu" href="/cadastroFuncionario">Cadastrar Funcionário</a>
    <a class="link itemMenu" href="#">Gerenciar Usuários</a>
    <a class="link itemMenu" href="#">Verificar Log de Registros</a>
@endsection

@section('naDivisaoEntrada')
    <label class="legenda" for="matricula">Matricula:</label>
    <input class="entradaTexto entradaTextoDesativado" type="text" name="matricula">
@endsection