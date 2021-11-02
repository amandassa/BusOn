@extends('app')

@section('content')
    <div class="container" style="flex-grow: 3;">
    <div class="row justify-content-center">
        <div class="col-sm-6"> <h5>Login</h5>
            <div class="card" style="d-flex p-2">

                <div class="card-body justify-content-center" style="align-contents:center;">
                    <form method="POST" action="{{ route('funcionarioLogin') }}"
                    enctype="multipart/form-data" class="form">
                        @csrf <div class="form-group row justify-content-center align-items-center">
                            <label for="email" class="col-md-8 col-form-label
                            text-md-left">{{ __('Email:') }}</label><br>

                            <div class="col-md-8 input-group"> <div
                            class="input-group-prepend"> <span
                            class="input-group-text"> <i class="fas
                            fa-user"></i> </span>
                              </div>

                                <input id="email" type="email"
                                class="form-control @error('email') is-invalid
                                @enderror" name="email" value="{{ old('email')
                                }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
                                class="form-control @error('password')
                                is-invalid @enderror" name="senha" required
                                autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    <div class="form-group row justify-content-center align-items-center" style="margin-left:0.5em; margin-bottom:0;">
                        <div class="col-md-8 input-group">
                        <input class="form-check-input" type="checkbox"
                                name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember"> {{ __('Lembrar') }}</label>
                        </div>
                        </div>

                    <div class="form-group row justify-content-center align-items-center" style="margin-bottom:0;">
                        <div class="col-md-8 input-group">
                            <a href="{{ route('password.request')}}" style="color:#1C5576;">
                                                {{ __('Esqueceu a sua senha?') }}</a>
                    </div></div>

                    <div class="form-group row justify-content-center align-items-center" style="margin-bottom:0;">
                        <div class="col-md-8 input-group">
                            </a>
                            <a href="{{ route('register') }}"style="margin-top: 2px; color:#1C5576;">
                                                {{ __(' Cadastrar-se') }}
                            </a>
                    </div></div>
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
