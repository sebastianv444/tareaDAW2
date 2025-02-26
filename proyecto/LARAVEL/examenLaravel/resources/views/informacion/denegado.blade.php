@include('includes.header')

    <section>
        <h1>Acceso Denegado</h1>
        <p>no eres usuario admin!!.</p><br><br>
        <a href="{{ action('\App\Http\Controllers\InformacionController@index') }}">volver al Listado</a>
    </section>

@include('includes.footer')
