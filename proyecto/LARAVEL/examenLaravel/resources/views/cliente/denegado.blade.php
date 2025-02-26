@include('includes.header')

    <section>
        <h1>Error!!:</h1>
        <p>Los datos ingresados no existen.</p><br><br>
        <a href="{{ action('\App\Http\Controllers\ClienteController@index') }}">volver al Listado</a>
    </section>

@include('includes.footer')
