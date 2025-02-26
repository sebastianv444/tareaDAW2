<h1>formulario en Laravel</h1>

<!-- para evitar ataques csrf ponemos esto -->



<form action="{{ action('\App\Http\Controllers\PeliculaController@recibir') }}" method="POST">

    {{ csrf_field() }}

 <label for="nombre">Nombre</label>
 <input type="text" name="nombre"/>
 <label for="email">email</label>
 <input type="email" name="email"/>

 <input type="submit"  value="Enviar">

</form>
