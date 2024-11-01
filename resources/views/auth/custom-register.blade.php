<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Cuenta</title>
    <link rel="stylesheet" href="{{ asset('css/custom-register.css') }}">
</head>

<body>
    <div class="main-container">
        <div class="register-content">
            <div class="register-container">
                <div class="register-header">
                    <h2>Crear una cuenta</h2>
                </div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <input type="text" id="name" name="name" placeholder="Nombre completo" required autofocus>
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" name="email" placeholder="Correo electrónico" required>
                    </div>
                    <div class="form-group">
                        <input type="password" id="password" name="password" placeholder="Contraseña" required>
                    </div>
                    <div class="form-group">
                        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirmar contraseña" required>
                    </div>
                    <button type="submit">Registrarse</button>
                    <p class="login-link">
                        <a href="{{ route('login') }}">¿Ya tienes una cuenta? Inicia sesión</a>
                    </p>
                </form>
            </div>
            <div class="image-container">
                <img src="{{ asset('imagen/imagen7.gif') }}" alt="Descripción de la imagen">
                <p>¡Bienvenido! Crea una cuenta y únete a nuestra comunidad para disfrutar de contenido exclusivo.</p>
            </div>
        </div>
    </div>
</body>

</html>
