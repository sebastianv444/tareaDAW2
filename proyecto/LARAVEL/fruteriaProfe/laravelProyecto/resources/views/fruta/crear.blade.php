@if(isset($fruta) && is_object($fruta))
    <h1>Editar fruta</h1>
@else
    <h1> Insertar fruta </h1>
@endif

<form action="{{
 isset($fruta) ?  action('\App\Http\Controllers\FrutaController@actualizar')
 : action('\App\Http\Controllers\FrutaController@salvar')
  }}"

  method="POST">

    {{csrf_field()}}

    @if(isset($fruta) && is_object($fruta))
        <input type="hidden" name="id" value="{{old('id', $fruta->id)}}">
    @endif

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" value= " {{ old('nombre', $fruta->nombre ?? '')}}" />

    <label for="descripcion">descripcion</label>
    <input type="text" name="descripcion" value= " {{ old('descripcion', $fruta->descripcion ?? '')}}" />

    <label for="precio">precio</label>
    <input type="number" name="precio" value= "{{ old('precio', $fruta->precio ?? 0 )}}" />

    <input type="submit" value="guardar" />

</form>
