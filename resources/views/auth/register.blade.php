@extends('app')

@section('title', 'Cadastre-se - ')
    

@section('content')
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
    <div class="container">
        <div class="row">
            <div class="col"> 
                <h5 class="texto">Cadastre-se</h5>
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="entradaNome">{{ __('Name') }}/label>
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
                            <div class="form-group camposMenores">
                                <label for="entradaCPF">{{ __('CPF') }}</label>
                                <input oninput="mascara(this, 'cpf')" id="entradaCPF" type="text" class="form-control 
                                @error('cpf') is-invalid
                                @enderror" name="cpf" value="{{ old('cpf') }}"
                                required autocomplete="name" autofocus  name="customer['cpf']">
                            </div>
                            <div class="form-group camposMenores">
                                <label for="entradaSenha">Senha</label>
                                <input type="password" class="form-control 
                                @error('senha') is-invalid
                                @enderror" name="senha" required
                                autocomplete="new-password" id="entradaSenha">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group camposMenores">
                                <label for="entradaConfirmarSenha">Confirmação de senha</label>
                                <input type="password" class="form-control" id="entradaConfirmarSenha">
                            </div>

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
    </div>



@endsection