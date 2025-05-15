<!DOCTYPE html>
<html>

<head>
    <title>Login - ByteQuest</title>
</head>

<body>
    <h2>Iniciar sesión</h2>
    <form method="POST" action="/login">
        @csrf
        <label>Correo:</label><br>
        <input type="email" name="correo" value="{{ old('correo') }}"><br><br>

        <label>Contraseña:</label><br>
        <input type="password" name="password"><br><br>

        <button type="submit">Entrar</button>
    </form>
    @if ($errors->any())
    <div>
        <strong>{{ $errors->first() }}</strong>
    </div>
    @endif
    <br>
    <a href="/register">¿No tienes cuenta? Regístrate aquí</a>

</body>

</html>