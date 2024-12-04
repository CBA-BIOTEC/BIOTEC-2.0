@extends('plantillas.plantilla')

@section('content')
<div class="container-fluid min-vh-100 d-flex justify-content-center align-items-center">
    <div class="row w-100 justify-content-center">
        <!-- Columna central más estrecha -->
        <div class="col-lg-4 col-md-6 col-sm-8">
            <div class="card shadow-sm color_fondo" style="margin-top: auto; margin-bottom: auto;">
                <!-- Encabezado con color personalizado -->
                <div class="card-header text-center" style="background-color: #88c663; color: #fff;">
                    <h4 class="mb-0">{{ __('Login') }}</h4>
                </div>
                <div class="card-body color_fondo">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <!-- Campo de Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label mt-5">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                                   name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <div class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                        
                        <!-- Campo de Contraseña -->
                        <div class="mb-3">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <div class="input-group">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                                       name="password" required autocomplete="current-password">
                                <button type="button" class="btn btn-outline-secondary" onclick="togglePassword('password')">
                                    👁️
                                </button>
                            </div>
                            @error('password')
                                <div class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>

                        <!-- Checkbox "Remember Me" -->
                        <div class="mb-3 form-check text-center">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>

                        <!-- Botón de envío -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary login_submit w-100">
                                {{ __('Login') }}
                            </button>
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
        const passwordInput = document.getElementById(id);
        passwordInput.type = passwordInput.type === "password" ? "text" : "password";
    }
</script>
@endsection





