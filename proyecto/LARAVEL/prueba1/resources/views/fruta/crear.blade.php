@if(isset($futa) && is_object($fruta))
    <h1>Ediar Fruta</h1>
@else
    <h1> Insertar Fruta </h1>
@endif

<form action="{{
isset($fruta) ? action('\App\Http\Controllers\FrutaController@actualizar')
: action('\App\Http\Controllers\FrutaController@salvar')
}}"
 method="POST">

    {{ csrf_field() }}

    {{-- IMPORTANTE!!!: solo mandar datos que sean necesarios!!! nunaca mandeis cosas
    que no vais a necesitar, ya que el input:hidden solo se usa cuando vas a necesitar datos
    necesarios para enviar a algun controlador, ya que luego estos datos se procesan en el
    json y si envias datos de mas al json y la vas a liar con esto en el front-end --}}

    @if(isset($futa) && is_object($fruta))
        <input type="hidden" name="id" value="{{ old('id',$fruta->id) }}">
    @endif

    <label for="nombre">Nombre:</label>
    {{-- esto del old() es para poner como valor en caso exita la $futa, de lo contrario pone ''  --}}
    <input type="text" name="nombre" id="" value="{{ old('nombre',$fruta->nombre ?? '') }}">

    <label for="descripcion">Descripcion:</label>
    <input type="text" name="descripcion" id="" value="{{ old('descripcion',$fruta->descripcion ?? '') }}">

    <label for="precio">Precio:</label>
    <input type="text" name="precio" id="" value="{{old('precio',$fruta->precio ?? 0) }}">

    <input type="submit" value="Enviar">
</form>
