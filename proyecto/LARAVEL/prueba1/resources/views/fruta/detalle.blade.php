<h1>Detalle Fruta</h1>

<p>
    {{ $fruta->descripcion }}
</p>

<a href="{{ action('\App\Http\Controllers\FrutaController@borrar', ['id' => $fruta->id]) }}">Eliminar</a><br>

<a href="{{ action('\App\Http\Controllers\FrutaController@editar', ['id' => $fruta->id]) }}">Modificar</a>
