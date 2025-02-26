@include('includes.header')

<section>
    <form action="{{ action('\App\Http\Controllers\ClienteController@salvar') }}" method="POST">

        {{ csrf_field() }}

        <label for="nombre">nombre: </label>
        <input type="text" name="nombre" id="nombre"><br><br>
        @error('nombre')
            <span style="color: red;">{{ $message }}mal</span>
        @enderror

        <label for="email">email: </label>
        <input type="email" name="email" id="email"><br><br>
        @error('email')
            <span style="color: red;">{{ $message }}mal</span>
        @enderror

        <label for="telefono">telefono: </label>
        <input type="text" name="telefono" id="telefono"><br><br>
        @error('telefono')
            <span style="color: red;">{{ $message }}mal</span>
        @enderror

        <label for="direccion">direccion: </label>
        <input type="text" name="direccion" id="direccion"><br><br>
        @error('direccion')
            <span style="color: red;">{{ $message }}mal</span>
        @enderror

        <input type="submit" value="guardar">
    </form>
</section>

@include('includes.footer')
