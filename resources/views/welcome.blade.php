<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>WELCOME</H1>
    <a href="/contacto">contactame</a><br>
    <a href="{{route("contacto")}}">contacto (ruta con nombre)</a><br>
    <a href="http://laraprimerospasos.test/contacto">contactame</a><br>
    ID {{$user->id}}<br>
    NOMBRE {{$user->name}}<BR>
    
</body>
</html>