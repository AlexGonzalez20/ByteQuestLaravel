<!DOCTYPE html>
<html>
<head>
    <title>Registro - ByteQuest</title>
</head>
<body>
    <h2>Registrarse</h2>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="/register">
        @csrf
        <label for="correo">Correo:</label>
        <input type="email" name="correo" required><br>

        <label for="password">Contraseña:</label>
        <input type="password" name="password" required><br>

        <label for="password_confirmation">Confirmar Contraseña:</label>
        <input type="password" name="password_confirmation" required><br>

        <button type="submit">Registrarse</button>
    </form>

    <br>
    <a href="/login">¿Ya tienes cuenta? Inicia sesión</a>
</body>
</html>
