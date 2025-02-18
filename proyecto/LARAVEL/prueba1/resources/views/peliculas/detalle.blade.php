<h1>Detalle de películas</h1>

{{-- esto es para decirle que se vaya a un ligar en especifico con blade --}}
<a href="{{ action('App\Http\Controllers\PeliculaController@index') }}">Ir al listado</a><br>
<a href="{{ route('detalle.pelicula', ['id'=>12]) }}">Otra forma de ir a detalle</a>
