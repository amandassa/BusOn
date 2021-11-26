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
                                <label for="entradaNome">Nome Completo</label>
                                <input type="name" class="form-control" id="entradaNome">
                            </div>
                            <div class="form-group">
                                <label for="entradaEmail">Email</label>
                                <input type="email" class="form-control" id="entradaEmail">
                            </div>
                            <div class="form-group camposMenores">
                                <label for="entradacpf">cpf</label>
                                <input oninput="mascara(this, 'cpf')" id="entradacpf" type="text" class="form-control" autocomplete="on" name="customer['cpf']">
                            </div>
                            <div class="form-group camposMenores">
                                <label for="entradaSenha">Senha</label>
                                <input type="password" class="form-control" id="entradaSenha">
                            </div>
                            <div class="form-group camposMenores">
                                <label for="entradaConfirmarSenha">Confirmação de senha</label>
                                <input type="password" class="form-control" id="entradaConfirmarSenha">
                            </div>
                        </form>
                    </div>
                        <div class="btnCC">
                            <button type="button" class="botao botaoAmarelo" id="botaoCC"> <span><i class="fas fa-check-circle"></i></span>   Criar Conta</button>
                        </div>
                        <div class="linkAC">
                            <p>Já tem cadastro? <a href={{route('home')}}>Acesse sua conta</a></p> 
                        </div>
                    </div>
                    
                </div>
            </div>
           
    </div>
        
        

        
    </div>


@endsection