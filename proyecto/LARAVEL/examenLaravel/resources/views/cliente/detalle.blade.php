@include('includes.header')

<section>
    <h1>Detalle del cliente {{ $cliente->nombre }}</h1><br>
    <p><b>Email: </b> {{ $cliente->email }}</p><br>
    <p><b>telefono: </b> {{ $cliente->telefono }}</p><br>
    <p><b>Dirección: </b> {{ $cliente->direccion }}</p><br>
    <p><b>Fecha de creación: </b> {{ $cliente->created_at }}</p><br>
    <p><b>Última actualización: </b> {{ $cliente->updated_at }}</p><br>
    <a href="{{ action('\App\Http\Controllers\ClienteController@index') }}">Volver al listado</a>
</section>


@include('includes.footer')
