<h1>Detalle fruta </h1>

<p>
    {{ $fruta->descripcion }}
</p>

<a href="{{ action('\App\Http\Controllers\FrutaController@borrar', ['id'=>$fruta->id]) }}">Eliminar </a>
<br>

<a href="{{ action('\App\Http\Controllers\FrutaController@irAFormularioEditar', ['id'=>$fruta->id]) }}">Modificar </a>
