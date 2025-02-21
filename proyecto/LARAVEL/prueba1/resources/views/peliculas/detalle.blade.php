<h1>Detalle de películas</h1>

{{-- esto es para decirle que se vaya a un lugar en especifico con blade --}}
{{-- OJO!!: aca yo le puedo pasar los parametros que quiera y los puedo
capturar en mi metodo pasandole un parametro en el metodo sin el request --}}
<a href="{{ action('App\Http\Controllers\PeliculaController@index') }}">Ir al listado</a><br>
{{-- el route de web.php es cundo a lo que le estas dirigiendo es a una ruta
y no a un controlador --}}
<a href="{{ route('detalle.pelicula', ['id'=>12]) }}">Otra forma de ir a detalle</a>
