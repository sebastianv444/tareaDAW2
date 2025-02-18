{{-- CREANDO PLANTILLAS MAESTRAS CON BLADE --}}
{{-- OJO: esta es una base que usaremos en views/generica.blade.php --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Título - @yield('titulo')</title>
</head>

<body>

    <h3>Página maestra</h3>
    {{-- @show sirve para definirlo, y para usarlo se usa el @stop --}}
    @section('header')
        CABECERA DE LA WEB
    @show

    <hr>

    @yield('contenido')
    La diferencia que hay entre section y yield, es que section admite contenido
    predeterminado

    <hr>

    @section('footer')
        PIE DE PÁGINA
    @show

</body>

</html>
