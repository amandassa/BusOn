@extends('padraoRecuperacao')

@section('noCardBranco')
    <div class="divisaoAcesso">
        <label>Recordou sua senha?</label>
        <a class="link" href="{{URL::asset('/acessoFuncionario')}}">Tente acessar sua conta</a>
    </div>
@endsection