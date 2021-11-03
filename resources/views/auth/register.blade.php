@extends('app')

@section('content') <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h5><b>Registro</b></h5> <div class="card">

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Campo do nome --> <div class="form-group row">
                                
                            <label for="name" class="col-md-4 col-form-label
                            text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="nome" type="text" class="form-control
                                @error('nome') is-invalid @enderror" name="nome"
                                value="{{ old('nome') }}" required
                                autocomplete="nome" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <!-- Campo do email --> <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label
                            text-md-right">{{ __('Email: ') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email"
                                class="form-control @error('email') is-invalid
                                @enderror" name="email" value="{{ old('email')
                                }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <!-- Campo do CPF --> <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label
                        text-md-right">{{ __('CPF') }}</label>
                            
                            <div class="col-md-4"> <input id="cpf" type="text"
                            class="form-control @error('cpf') is-invalid
                            @enderror" name="cpf" value="{{ old('cpf') }}"
                            required autocomplete="name" autofocus> </div>
                                
                        </div>
                    

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label
                            text-md-right">Senha</label>

                            <div class="col-md-4">
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
                        </div>

                        <div class="form-group row">
                            <label for="senha-confirm" class="col-md-4
                            col-form-label text-md-right">Confirmar
                            Senha</label>

                            <div class="col-md-4">
                                <input id="senha-confirm" type="password"
                                class="form-control" name="senha_confirmation"
                                required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col">
                                <center><button type="submit" class="botao
                                botaoAmarelo" style="margin-top:1em; min-height:
                                40px; min-width:150px;">
                                    <i class="fas fa-check-circle"></i> {{
                                    __('Criar Conta') }}
                                </button> <br><label
                                style="padding-top:10px;">Já tem cadastro? <a
                                href="{{route('login')}}">Acesse sua
                                conta.</a></label> </center>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> @endsection