@include('includes.header')

<section>
    <h1>Listado de Clientes</h1><br>

    <h3>
        <a href= "{{ action('\App\Http\Controllers\ClienteController@create') }}"> Crear cliente </a>
    </h3><br>

    <ul>
        @foreach ($clientes as $cliente)
            <li>
                <a href="{{ action('\App\Http\Controllers\ClienteController@detalle', [$cliente->id]) }}">{{ $cliente->nombre }}</a>
            </li>
        @endforeach
    </ul>
</section>

@include('includes.footer')
