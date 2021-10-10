@extends('cliente/padrao/migalha')

<!--@@section ('alturaMinima','440px') PREENCHER QUANDO A PÁGINA ESTIVER PRONTA-->

@section ('noTitulo','Selecão - ')

@section('migalhaRetanguloSelecao', 'migalhaRetanguloAtiva')

@section('migalhaTrianguloSelecao', 'migalhaTrianguloAtiva')

@section('linkSelecao', 'linkDesativado')

@section('nosItensDeMenu')
    <a class="link itemMenu" href="{{URL::asset('/perfilCliente')}}">Editar Perfil</a>
    <a class="link itemMenu" href="#">Minhas Passagens</a>
@endsection

@section('abaixoDaMigalha')
    <div class="divisaoPrimaria">
        <h1 class="titulo">Selecionar Passagens</h1>
        <div class="cardBranco">
            <div class="divisaoEntrada">
                <label>EM CONSTRUÇÃO</label>
            </div>
        </div>
    </div>
@endsection