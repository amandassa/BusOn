@extends('funcionario.inicial_func')

@section('conteudoPadrao')

@section('campoBotoes')
    <a class="btn btn-secondary botaoSelecaoInicial" href="#" role="button">
        <span class="material-icons" id="iconBotoesPrincipais">people_alt</span>
        Gerenciar Usuários
    </a>

    <a class="btn btn-secondary botaoSelecaoInicial" href="verificarLogs" role="button">
        <span class="material-icons" id="iconBotoesPrincipais">description</span>
        Verificar <br> Logs
    </a>
    
@endsection