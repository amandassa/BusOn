@extends('padraoAcesso')

@section ('alturaMinima','312px')

@section('noCardBranco')
    <div class="divisaoAcesso">
        <label>Não tem cadastro?</label>
        <a class="link" href="{{URL::asset('/cadastroCliente')}}">Cadastre sua conta</a>
    </div>
    <div class="divisaoAcesso">
        <label>Esqueceu sua senha?</label>
        <a class="link" href="{{URL::asset('/recuperacaoCliente')}}">Recupere seu acesso</a>
    </div>
@endsection