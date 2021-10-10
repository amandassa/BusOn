@extends('padraoPreLogin')

@section('naDivisaoDireitaDaBarraSuperior')
<!--MENU DE OPÇÕES-->
<i class="fa fa-user botao menu" style="font-size:18px;color:black">
    <label for="nomeUsuario" class="legenda">Olá, Cláudio</label>
    <div class="itensMenu">
        @yield('nosItensDeMenu')
    </div>
</i>
<!--BOTÃO DE HOME-->
<i class="fa fa-home botao" style="font-size:38px;color:black"></i>
<button class="botao botaoSecundario" name="sairConta" value="sairConta" id="sairConta">Sair</button> <!--BOTÃO DE SAIR-->   
@endsection