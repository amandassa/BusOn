@extends('padraoPosLogin')

<link rel="stylesheet" href="/assets/css/estiloPaginaMigalha.css">
@section('naBarraCentral')
    <div class="divisaoSuperior">
        <lu class="migalha migalhaRetangulo @yield('migalhaRetanguloBusca')">
            <lu class="migalha migalhaTriangulo @yield('migalhaRetanguloBusca')" style="border-color: transparent transparent transparent #F5F5F5"></lu>
            <a class="link @yield('linkBusca')" href="{{URL::asset('/buscaCliente')}}">Busca</a>
        </lu>
        <lu class="migalha migalhaRetangulo @yield('migalhaRetanguloSelecao')">
            <lu class="migalha migalhaTriangulo @yield('migalhaTrianguloBusca')"></lu>
            <a class="link @yield('linkSelecao')" href="{{URL::asset('/selecaoCliente')}}">Seleção</a>
        </lu>
        <lu class="migalha migalhaRetangulo @yield('migalhaRetanguloPagamento')">
            <lu class="migalha migalhaTriangulo @yield('migalhaTrianguloSelecao')"></lu>
            <a class="link @yield('linkPagamento')" href="{{URL::asset('/pagamentoCliente')}}">Pagamanto</a>
        </lu>
        <lu class="migalha migalhaRetangulo @yield('migalhaRetanguloConfirmacao')">
            <lu class="migalha migalhaTriangulo @yield('migalhaTrianguloPagamento')"></lu>
            <a class="link @yield('linkConfirmacao')" href="{{URL::asset('/confirmacaoCliente')}}">Confirmação</a>
        </lu>
        <lu class="migalha migalhaTriangulo @yield('migalhaTrianguloConfirmacao')"></lu>
    </div>
    <div class="divisaoInferior">
        @yield('abaixoDaMigalha')
    </div>
@endsection