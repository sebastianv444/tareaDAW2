<h1>Formulario en Laravel</h1>

<form action="{{ action('\App\Http\Controllers\PeliculaController@recibir')}}" method="POST">
    {{-- La siguiente linea de comandos es para evitar ataques por formularios, es una funcion
definida por laravel --}}
    {{ csrf_field() }}

    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="">

    <label for="email">Email:</label>
    <input type="text" name="email" id="">

    <input type="submit" value="Enviar">
</form>

{{-- Aprender SNIPPETS: que es un codigo ya preparado para usarlo, es como reutilizarlo para no repetir. --}}
