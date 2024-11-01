<!DOCTYPE html>
<html lang="es"> <!-- Cambia el idioma a español -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión Personalizado</title>
    <link rel="stylesheet" href="{{ asset('css/custom-login.css') }}">
</head>

<body>
    <div class="main-container">
        <div class="login-content">
            <div class="login-container">
                <div class="login-header">
                    <h2>Iniciar sesión en tu cuenta</h2>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />

                        <!-- Mensaje de error para el campo de email -->
                        <x-input-error :messages="$errors->get('email')" class="mt-2 error-message" />
                    </div>

                    <div class="form-group">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />

                        <!-- Mensaje de error para el campo de contraseña -->
                        <x-input-error :messages="$errors->get('password')" class="mt-2 error-message" />
                    </div>

                    <button type="submit">Iniciar sesión</button> <!-- Traducción de "Log in" -->
                    <p class="register-link">
                        <a href="{{ route('register') }}">¿No tienes una cuenta? Regístrate</a> <!-- Traducción de "Don't have an account? Register" -->
                    </p>
                </form>
            </div>
            <div class="image-container">
                <img src="{{ asset('imagen/fondo3.webp') }}" alt="Descripción"> <!-- Traducción de "Description" -->
                <p>¡Acceso restringido. Inicia sesión para asegurar tu información y proteger el acceso a tu cuenta.</p> <!-- Texto de descripción -->
            </div>
        </div>
    </div>
    


</body>

</html>


</html>