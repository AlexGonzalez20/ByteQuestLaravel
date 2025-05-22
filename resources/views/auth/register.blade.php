<!DOCTYPE html>
<html>

<head>
    <title>Registro - ByteQuest</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    @vite('resources/css/register.css')


</head>

<body>
    <div class="container">
        <div class="header">
            <header>
                <h2>Registrarse</h2>
            </header>
        </div>
        <div class="content-table">
            @if ($errors->any())
                <div style="color:red;">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="formulario">

            <div class="card-form">
                <form method="POST" action="/register">
                    @csrf
                    <label for="correo">Correo:</label>
                    <input type="email" name="correo" placeholder="Correo" required><br>
                    <label for="password">Contraseña:</label>
                    <input type="password" name="password" placeholder="Contraseña" required><br>
                    <label for="password_confirmation">Confirmar Contraseña:</label>
                    <input type="password" name="password_confirmation" required placeholder="Confirmar Contraseña"><br>
                    <button type="submit">Registrarse</button>
                </form>
                <br>
                <a href="/login">¿Ya tienes cuenta? Inicia sesión</a>
            </div>
        </div>
    </div>
</body>

</html>