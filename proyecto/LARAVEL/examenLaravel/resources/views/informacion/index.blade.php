@include('includes.header')

<section>
    <table>
        <tr>
            <th>Nombre: </th>
            <th>Email: </th>
        </tr>
    @foreach ($clientes as $cliente)
        <tr>
            <td><a href="{{ action('\App\Http\Controllers\ClienteController@detalle',[$cliente->id]) }}">{{ $cliente->nombre }}</a></td>
            <td>{{ $cliente->email }}</td>
        </tr>
    @endforeach
    </table><br><br>
    <table>
        <tr>
            <th>Nombre: </th>
            <th>Email: </th>
        </tr>
    @foreach ($proveedores as $proveedor)
        <tr>
            <td><a href="{{ action('\App\Http\Controllers\ProveedorController@detalle', [$proveedor->id]) }}">{{ $proveedor->nombre }}</a></td>
            <td>{{ $proveedor->email }}</td>
        </tr>
    @endforeach
    </table>
</section>


@include('includes.footer')
