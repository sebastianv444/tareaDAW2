<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Titulo - @yield('titulo')</title>
</head>
<body>

<h3>Página maestra </h3>

@section('header')
    CABECERA DE LA WEB
@show

<hr>

@yield('contenido')
<br>
La diferencia que hay entre section yield es que section admite contenido predeterminado

<hr>


@section('footer')
    pie de página
@show




</body>
</html>
