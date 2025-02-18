<h1>{{$titulo}}</h1>

{{-- con route accedemos a el router en especifico con el nombre que le pusimos,
en este caso estamos entrando a router con el 'as' que le pusimos. --}}
{{-- OJO: el segundo parametro es para pasar parametro en la url --}}
<a href="{{ route('detalle.pelicula', ['id'=>12]) }}">Otra forma de ir a detalle</a>
