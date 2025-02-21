<h1>{{ $titulo }}</h1>
{{-- con route accedemos a el router en especifico con el nombre que le pusimos,
en este caso estamos entrando a router con el 'as' que le pusimos. --}}
{{-- OJO: el segundo parametro es para pasar parametro en la url --}}
<a href="{{ action('\App\Http\Controllers\PeliculaController@detalle', ['id' => 12]) }}">Ir al detalle </a>
<br>
<a href=" {{ route('detalle.pelicula', ['id' => 12]) }}">Otra forma de ir a detalle </a>

{{--
    route(): Se utiliza para generar URLs basadas en las rutas nombradas definidas en tus
    archivos de rutas (web.php o api.php).
    action(): Se utiliza para generar URLs basadas en los métodos de los controladores.
    Es útil cuando quieres generar una URL para una acción específica de un controlador.
--}}
