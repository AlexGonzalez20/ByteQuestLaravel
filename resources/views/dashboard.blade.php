<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - ByteQuest</title>
</head>
<body>
    <h1>Bienvenido a ByteQuest</h1>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Cerrar sesión</button>
    </form>
</body>
</html>
