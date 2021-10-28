@extends('app')

@section('content')    
<div class="container" style="flex-grow: 3;">
    <div class="row justify-content-center">
        <div class="col-sm-6">
        <h5>Login</h5>
            <div class="card" style="d-flex p-2">                

                <div class="card-body" style="justify-content:center;">
                    <form method="POST" action="{{ route('clienteLogin') }}" enctype="multipart/form-data" class="form">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email:') }}</label>

                            <div class="col-md-8 input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text">
                            <i class="fas fa-user"></i>                                  
                            </span>
                              </div>                                 
                                
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha: ') }}</label>
    
                            <div class="col-md-8 input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text">
                            <i class="fas fa-key"></i>                                  
                            </span>
                              </div>
                                <input id="senha" type="password" class="form-control @error('password') is-invalid @enderror" name="senha" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Lembrar') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn botaoAmarelo">
                                    {{ __('Entrar') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Esqueceu a sua senha?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
