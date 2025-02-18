{{-- RECUERDA!! en las rutas no se usa el "/" se usa el "." --}}
@include('includes.header')

<h1><?= $titulo?></h1>
<h2><?= $listado[0]?></h2>

<!-- esto es para interpolar el codigo y lo ejecute: -->
{{ $titulo }}

<!-- lo siguiente es un comentario: -->
{{-- $titulo --}}

{{-- uso de if en una sola línea con blade: --}}
{{$director ?? 'no tenemos director'}}
<h3>{{$director ?? 'no tenemos director'}}</h3>

<hr>

<!-- Estructuras de control con blade: -->
<h1>Estructuras de control:</h1>
<h2>CONDICIONALES</h2>

@if($titulo)
    <h4>El título existe y es: {{$titulo}}</h4>
@else
    <h4>El título no existe</h4>
@endif

@if($titulo && count($listado) >= 5)
    <h4>El título existe y el listado es mayot o igual 5</h4>
@elseif($titulo)
    <h4>El título es: $titulo pero el listado es menor que 6</h4>
@else
    <h4>La condición no se ha cumplido</h4>
@endif

<h2>2.- BUCLES</h2>
<h2>2.1 - For</h2>

@for($i=0; $i < 20; $i++)
    el número es: {{ $i }} <br/>
@endfor

<h4>2.2 - while</h4>
<?php $contador = 1 ?>

@while($contador < 30)
    @if($contador % 2 == 0);
        NÚMERO PAR: {{$contador}} <br/>
    @endif
    {{-- OJO: las variables solo se modifican en etiquetas php --}}
    <?php $contador++ ?>
@endwhile

<h4>2.2 - foreach</h4>

@foreach($listado as $pelicula)
    <strong>{{$pelicula}}</strong><br/>
@endforeach

@include ('includes.footer')