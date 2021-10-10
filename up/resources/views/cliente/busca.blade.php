@extends('cliente/padrao/migalha')

@section ('alturaMinima','326px')

@section ('noTitulo','Busca - ')

@section('migalhaRetanguloBusca', 'migalhaRetanguloAtiva')

@section('migalhaTrianguloBusca', 'migalhaTrianguloAtiva')

@section('linkBusca', 'linkDesativado')

@section('nosItensDeMenu')
    <a class="link itemMenu" href="{{URL::asset('/perfilCliente')}}">Editar Perfil</a>
    <a class="link itemMenu" href="#">Minhas Passagens</a>
@endsection

@section('abaixoDaMigalha')
    <div class="divisaoPrimaria">
        <h1 class="titulo">Buscar Passagens</h1>
        <div class="cardBranco">
            <div class="divisaoEntrada">
                <label class="legenda" for="cidadePartida">Qual é sua cidade de partida?</label>
                <input class="entradaTexto" type="text" name="cidadePartida" id="cidadePartida">
            </div>
            <div class="divisaoEntrada">
                <label class="legenda" for="cidadeDestino">Qual é sua cidade de destino?</label>
                <input class="entradaTexto" type="text" name="cidadeDestino" id="cidadeDestino">
            </div>
            <div class="divisaoEntrada">
                <label class="legenda" for="cidadeDestino">Quando pretende realizar sua viagem?</label>
                <input class="entradaTexto" type="date" name=dataPartida id=dataPartida>
            </div>        
            <div class="divisaoControle">
                <button class="botao botaoPrimario" name="buscarLinhas" value="buscarLinhas" id="buscarLinhas">Buscar</button>
            </div>
        </div>
    </div>
@endsection