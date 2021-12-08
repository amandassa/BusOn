@extends('app')

@section('title', 'Cadastre-se - ')

<link href="/css/estiloAcessoUsuario.css" rel="stylesheet">

@section('content') 
<script type="text/javascript" src="{{ asset('js/jquery.mask.js') }}"></script> 
<script> 
    $("#entradacpf").mask('999.999.999-99'); //máscara cpf
    
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
            });
        }, false);
        })();
</script> 

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            @if ($errors->any()) 
            <div class="alert alert-danger alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <ul>
                    @foreach($errors->all() as $error)
                        <li><strong>{{ $error }}</strong></li>
                    @endforeach
                </ul>
            </div>
            @endif
            <h5>Cadastre-se</h5> <div class="card">
                <div class="card-body">
                    <form method="POST" id="myForm" action="{{ route('register') }}" class="form needs-validation" novalidate 
                    oninput='senha_confirmation.setCustomValidity(senha_confirmation.value != senha.value ? "Senhas não coincidem!" : "")'>
                        @csrf
                        <!-- Campo do nome-->
                        <div class="form-group">
                            <label for="entradaNome">{{ __('Nome') }}</label>
                            <input type="name" id="entradaNome" class="form-control" name="nome"
                            value="{{ old('nome') }}" required
                            autocomplete="nome" autofocus>
                            <div class="invalid-feedback" style="font-size: small">
                                Informe um nome para realizar o cadastro!
                            </div>
                        </div>
                        <!-- Campo do email-->
                        <div class="form-group">
                            <label for="entradaEmail">{{ __('Email: ') }}</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email')
                            }}" required autocomplete="email" id="entradaEmail">
                            <div class="invalid-feedback" style="font-size: small">
                                Informe um email válido!
                            </div>
                        </div>
                        <!-- Campo do cpf-->
                        <div class="form-group camposMenores">
                            <label for="entradacpf">{{ __('CPF') }}</label>
                            <input id="entradacpf" type="text" class="form-control" name="cpf" value="{{ old('cpf') }}"
                            required autofocus pattern=".{14,}">
                            <div class="invalid-feedback" style="font-size: small">
                                Informe um CPF válido!
                            </div>
                        </div>
                        <!-- Campo da senha-->
                        <div class="form-group camposMenores">
                            <label for="password">Senha</label>
                            <input id="senha" type="password"
                            class="form-control" name="senha" required
                            autocomplete="new-password" pattern=".{6,}">
                            <div class="invalid-feedback" style="font-size: small">
                                Informe uma senha de no mínimo 6 dígitos!
                            </div>
                        </div>
                        <!-- Campo da confirmação de senha-->
                        <div class="form-group camposMenores">
                            <label for="senha-confirm">Confirmar
                            Senha</label>
                            <input id="senha-confirm" type="password"
                            class="form-control" name="senha_confirmation"
                            autocomplete="new-password" required>
                            <div class="invalid-feedback" style="font-size: small">
                                Senhas não coincidem!
                            </div>
                        </div>
                        <br>
                        <div class="btnCC">
                                <button type="submit" class="botao botaoAmarelo" id="botaoCC"> <span><i class="fas fa-check-circle"></i></span>   {{
                                    __('Criar Conta') }}</button>
                        </div>
                        <div class="linkAC">
                            <p>Já tem cadastro? <a href="{{route('login')}}">Acesse sua conta</a></p> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> @endsection