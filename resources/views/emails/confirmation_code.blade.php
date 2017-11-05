<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset=""utf-8">
</head>
<body>

    <h2>Hola {{ $name }}, bienvenido</h2>
    <p>Por favor confirme su correo electronico</p>
    <p>Para ello simplemente debes hacer click en el siguiente enlace:</p>

    <a href="{{ url('register/verify/' . $confirmation_code) }}">
        Click aqui para confirmar
    </a>

</body>

</html>