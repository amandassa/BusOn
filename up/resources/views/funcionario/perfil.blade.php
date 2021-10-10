@extends('padraoPerfil')

@section('alturaMinima', '498px')

@section('nosItensDeMenu')
    <a class="link itemMenu" href="#">Vender Passagens</a>
    <a class="link itemMenu" href="#">Consultar Linhas</a>
    <a class="link itemMenu" href="#">Gerar Relatórios</a>
@endsection

@section('naDivisaoEntrada')
    <label class="legenda" for="matricula">Matricula:</label>
    <input class="entradaTexto entradaTextoDesativado" type="text" name="matricula">
@endsection