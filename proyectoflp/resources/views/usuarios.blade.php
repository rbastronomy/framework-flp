<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if($nombreusuario)
        <h1>bienvenido a la pagina de usuarios</h1>
        <h2>perfil de: {{$nombreusuario}}</h2>
    @else
    <h1>Pagina de usuarios</h1>
    <h2>busque su usuario</h2>
    @endif

<h3>{{$fecha}}</h3>
</body>
</html>
