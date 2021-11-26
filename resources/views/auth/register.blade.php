@extends('app')

@section('title', 'Cadastre-se - ')
<!-- Máscara do cpf-->
<script>function mascara(i,t){
   
    var v = i.value;
    
    if(isNaN(v[v.length-1])){
       i.value = v.substring(0, v.length-1);
       return;
    }
    
    if(t == "cpf"){
       i.setAttribute("maxlength", "14");
       if (v.length == 3 || v.length == 7) i.value += ".";
       if (v.length == 11) i.value += "-";
    }

 }</script> 



<link href="/css/estiloAcessoUsuario.css" rel="stylesheet">

@section('content') <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h5><b>Cadastre-se</b></h5> <div class="card">

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <!-- Campo do nome-->
                        <div class="form-group">
                            <label for="entradaNome">{{ __('Nome') }}</label>
                            <input type="name" id="entradaNome" class="form-control  
                            @error('nome') is-invalid @enderror" name="nome"
                            value="{{ old('nome') }}" required
                            autocomplete="nome" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!-- Campo do email-->
                        <div class="form-group">
                            <label for="entradaEmail">{{ __('Email: ') }}</label>
                            <input type="email" class="form-control 
                            @error('email') is-invalid
                            @enderror" name="email" value="{{ old('email')
                            }}" required autocomplete="email" id="entradaEmail">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!-- Campo do cpf-->
                        <div class="form-group camposMenores">
                            <label for="entradacpf">{{ __('cpf') }}</label>
                            <input oninput="mascara(this, 'cpf')" id="entradacpf" type="text" class="form-control 
                            @error('cpf') is-invalid
                            @enderror" name="cpf" value="{{ old('cpf') }}"
                            required autocomplete="name" autofocus  name="customer['cpf']">
                        </div>
                        <!-- Campo da senha-->
                        <div class="form-group camposMenores">
                            <label for="password">Senha</label>
                            <input id="senha" type="password"
                            class="form-control @error('senha') is-invalid
                            @enderror" name="senha" required
                            autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!-- Campo da confirmação de senha-->
                        <div class="form-group camposMenores">
                            <label for="senha-confirm">Confirmar
                            Senha</label>
                            <input id="senha-confirm" type="password"
                            class="form-control" name="senha_confirmation"
                            required autocomplete="new-password">
                        </div>
                        <br>
                        <div class="btnCC">
                                <button type="submit" class="botao botaoAmarelo" id="botaoCC"> <span><i class="fas fa-check-circle"></i></span>   {{
                                    __('Criar Conta') }}</button>
                        </div>
                        <div class="linkAC">
                            <p>Já tem cadastro? <a href={{route('login')}}>Acesse sua conta</a></p> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> @endsection