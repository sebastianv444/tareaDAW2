@include('includes.header')

<section>
    <h1>Detalle del proveedor {{ $proveedor->nombre }}</h1><br>
    <p><b>Email: </b> {{ $proveedor->email }}</p><br>
    <p><b>telefono: </b> {{ $proveedor->telefono }}</p><br>
    <p><b>Dirección: </b> {{ $proveedor->direccion }}</p><br>
    <p><b>Fecha de creación: </b> {{ $proveedor->created_at }}</p><br>
    <p><b>Última actualización: </b> {{ $proveedor->updated_at }}</p><br>
    <a href="{{ action('\App\Http\Controllers\ProveedorController@index') }}">Volver al listado</a>
</section>


@include('includes.footer')
