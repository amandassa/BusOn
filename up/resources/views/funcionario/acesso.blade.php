@extends('padraoAcesso')

@section ('alturaMinima','288px')

@section('noCardBranco')
    <div class="divisaoAcesso">
        <label>Esqueceu sua senha?</label>
        <a class="link" href="{{URL::asset('/recuperacaoFuncionario')}}">Recupere seu acesso</a>
    </div>
@endsection