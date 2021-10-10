@extends('padraoCadastroUsuario')

@section ('alturaMinima','460px')

@section('noCardBranco')
    <div class="divisaoAcesso">
        <label>Já tem cadastro?</label>
        <a class="link" href="{{URL::asset('/acessoCliente')}}">Acesse sua conta</a>
    </div>
@endsection