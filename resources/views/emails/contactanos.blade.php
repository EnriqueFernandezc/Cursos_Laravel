<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- <img src="{{ asset('')}}" alt="Logo" style="height: 4em"> --}}
    <h2>Nuevo mensaje desde el formulario de contacto de Cursos</h2>
    <hr>
    <p>Hola,</p>

    <p><strong>{{$name}}</strong> con email <strong>{{$email}}</strong> ha comentado: </p>
    <p>{{$description}}</p>

    {{-- $contacto es la variable que guarda los datos del formulario contactanos en el construct de ContactanosMailable.php --}}
    {{-- <p><strong>Nombre: </strong>{{$contacto['name']}}</p> 
    <p><strong>Correo: </strong>{{$contacto['correo']}}</p>
    <p><strong>Mensaje: </strong>{{$contacto['mensaje']}}</p> --}}
</body>
</html>