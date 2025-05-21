<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    {{-- Esto es lo importante: --}}
    @vite('resources/css/login.css')

</head>
<body>
    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <label for="correo">Correo:</label>
            <input type="email" name="correo" id="correo" required>

            <label for="password">Contraseña:</label>
            <input type="password" name="password" id="password" required>

            <button type="submit">Ingresar</button>
        </form>
    </div>
</body>
</html>
