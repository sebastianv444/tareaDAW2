@include('includes.header')

<section>
    <table>
        <tr>
            <th>Nombre: </th>
            <th>Email: </th>
            <th>Telefono: </th>
        </tr>
    @foreach ($clientes as $cliente)
        <tr>
            <td><a href="{{ action('\App\Http\Controllers\ClienteController@detalle',[$cliente->id]) }}">{{ $cliente->nombre }}</a></td>
            <td>{{ $cliente->email }}</td>
            <td>{{ $cliente->telefono }}</td>
        </tr>
    @endforeach
    </table><br><br>
    <table>
        <tr>
            <th>Nombre: </th>
            <th>Email: </th>
            <th>Telefono: </th>
        </tr>
    @foreach ($proveedores as $proveedor)
        <tr>
            <td><a href="{{ action('\App\Http\Controllers\ProveedorController@detalle', [$proveedor->id]) }}">{{ $proveedor->nombre }}</a></td>
            <td>{{ $proveedor->email }}</td>
            <td>{{ $proveedor->telefono }}</td>
        </tr>
    @endforeach
    </table>
</section>


@include('includes.footer')
