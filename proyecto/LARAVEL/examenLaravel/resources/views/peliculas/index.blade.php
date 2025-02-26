<h1>{{$titulo}}</h1>

<a href="{{ action('\App\Http\Controllers\PeliculaController@detalle') }}">Ir al detalle </a>
<br>
<a href=" {{ route('detalle.pelicula', ['id'=> 12]) }}">Otra forma de ir a detalle </a>
