@extends('app')

@section('content')
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
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
    <div class="container" style="flex-grow: 3;">    
    <div class="row justify-content-center">                
        <div class="col-sm-6"> 
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
            @if (session('success'))
                <div class="alert alert-success alert-dismissable">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <ul>
                        <li><strong>{{session ('success')}}</strong></li>
                    </ul>
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger alert-dismissable">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <ul>
                        <li><strong>{{session ('error')}}</strong></li>
                    </ul>
                </div>
            @endif
    
    
        
        <h5>Login {{ isset($url) ? "- " . ucwords($url) : ""}}</h5>
            <div class="card" style="d-flex p-2">                
                <div class="card-body justify-content-center" style="align-contents:center;">
                @isset($url)
                    <form method="POST" action="{{ route('funcionarioLogin') }}"
                    enctype="multipart/form-data" class="form needs-validation" novalidate>                    
                @else
                    <form method="POST" action="{{ route('clienteLogin') }}"
                    enctype="multipart/form-data" class="form needs-validation" novalidate>                    
                @endisset                                
                        @csrf <div class="form-group row justify-content-center align-items-center">
                            <label for="email" class="col-md-8 col-form-label
                            text-md-left">{{ __('Email:') }}</label><br>

                            <div class="col-md-8 input-group"> <div
                            class="input-group-prepend"> <span
                            class="input-group-text"> <i class="fas
                            fa-user"></i> </span>
                              </div>
                                <input id="email" type="email"
                                class="form-control" name="email" value="{{ old('email')
                                }}" autocomplete="email" required>
                                <div class="invalid-feedback" style="font-size: small">
                                    Informe um email válido para realizar o login!
                                  </div>
                            </div>
                        </div>

                        <div class="form-group row justify-content-center align-items-center">
                            <label for="password" class="col-md-8 col-form-label
                            text-md-left">{{ __('Senha: ') }}</label>

                            <div class="col-md-8 input-group"> <div
                            class="input-group-prepend"> <span
                            class="input-group-text"> <i class="fas fa-key"></i>
                            </span>
                              </div>
                                <input id="senha" type="password"
                                class="form-control" name="senha" required
                                autocomplete="current-password"  pattern=".{6,}">
                                <div class="invalid-feedback" style="font-size: small">
                                    Informe uma senha de no mínimo 6 dígitos!
                                  </div>
                                
                            </div>
                        </div>
                    <div class="form-group row justify-content-center align-items-center" style="margin-left:0.5em; margin-bottom:0;">                        
                        </div>

                    <div class="form-group row justify-content-center align-items-center" style="margin-bottom:0;">
                        <div class="col-md-8 input-group">
                            @php
                                $endereco = explode("/", $_SERVER["REQUEST_URI"]);     
                                if(sizeof($endereco)== 3) {     
                                   $rota = "recuperarAcessoFuncionarioView";
                                }
                                else { 
                                    $rota = "recuperarAcessoClienteView";
                                }
                            @endphp
                            <a href="{{ route($rota)}}" style="color:#1C5576;">
                                                {{ __('Esqueceu a sua senha?') }}</a>
                    </div></div>
                        <!-- Controla o aparecimento do campo 'Cadastra-se'-->
                    @empty($url) 
                        <div class="form-group row justify-content-center align-items-center" style="margin-bottom:0;">
                            <div class="col-md-8 input-group">
                                </a>
                                <a href="{{ route('register') }}"style="margin-top: 2px; color:#1C5576;">
                                                    {{ __(' Cadastrar-se') }}
                                </a>
                        </div></div>
                     @endempty       
                        </div>
                    

                        <div class="form-group row">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn botaoAmarelo" style="margin-top:1em; min-width:200px; min-height:40px; margin-botom:2em;">
                                    {{ __('Entrar') }}
                                </button>

                                @if (Route::has('password.request'))

                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> @endsection
