@extends('plantillas.plantilla')

@section('content')
<div class="tamaño">
<div class="container min-vh-100 d-flex justify-content-center align-items-center">
    <div class="row justify-content-center w-100">
        <div class="col-md-8">
            <div class="card color_fondo">
                <div class="logiin">
                <div class="card-header login_css">{{ __('Login') }}</div>
                <div class="card-body formulario_css">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                    
                        <div class="row mb-3">
                            
                            <label for="email" class="col-md-4 col-form-label text-md-end custom-labeel">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                               
                                <input id="email" type="email" class="form-control input-email @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end Password_c">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <input id="password" type="password" class="form-control input-pass  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    <button type="button" class="btn btn-outline-secondary eye" onclick="togglePassword('password')">👁️</button>
                                    </div>
                                    
                                    </div>
                                </div>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input checkbox-css" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label remember_css" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0 ">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary login_submit">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Script para alternar la visibilidad de la contraseña -->
<script>
    function togglePassword(id) {
        var passwordInput = document.getElementById(id);
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
        } else {
            passwordInput.type = "password";
        }
    }
</script>

@endsection

