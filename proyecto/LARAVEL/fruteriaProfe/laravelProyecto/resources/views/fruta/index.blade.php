<h1>
    Listado de frutas
</h1>

<h3>
    <a href="{{ action('\App\Http\Controllers\FrutaController@crear') }}"> Crear fruta</a>
</h3>

@if(session('estado'))
<p style="background: green">
    {{ session('estado')}}
</p>
@endif

<ul>
    @foreach ($frutas as $fruta)
        <li>
            <a href="{{ action('\App\Http\Controllers\FrutaController@detalle', ['id'=>$fruta->id]) }}">

            {{ $fruta->nombre }}

             </a>

        </li>
    @endforeach
</ul>
