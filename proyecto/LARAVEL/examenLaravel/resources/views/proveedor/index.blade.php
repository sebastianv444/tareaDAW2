@include('includes.header')

<section>
    <h1>Listado de proveedores </h1><br>

    <h3>
        <a href= "{{ action('\App\Http\Controllers\ProveedorController@create') }}"> Crear proveedor </a>
    </h3><br>

    <ul>
        @foreach ($proveedores as $proveedor)
            <li><a href="{{ action('\App\Http\Controllers\ProveedorController@detalle', [$proveedor->id]) }}">{{ $proveedor->nombre }}</a> - {{ $proveedor->email }}</li>
        @endforeach
    </ul>
</section>

@include('includes.footer')
