@include('includes.header')

<h1><?= $titulo ?></h1>
<h2><?= $listado[0]?></h2>

{{ $titulo }}

{{-- $titulo --}}

{{-- uso de if en una sola línea --}}
<br>Con php <br>
<?= isset($director) ? $director : 'no hay director' ?>
<br>
Con Blade <br>
<h3>{{$director ?? 'no tenemos director'}}</h3>
<hr>
<h1>Estructuras de control</h1>

<h2>1.- CONDICIONALES</h2>
<h4>1.1- If </h4>

@if($titulo)
    <h4>El título existe y es: {{$titulo}}</h4>
@else
    <h4>El título no existe</h4>
@endif

@if($titulo && count($listado) >= 5)
    <h4>El título existe y el listado es mayor o igual  5</h4>
@elseif($titulo)
    <h4>El título es:  {{$titulo}} pero el listado es menor que 6</h4>
@else
    <h4>La condición no se ha cumplido</h4>
@endif

<h2>2.- BUCLES</h2>
<h4>2.1- For </h4>

@for($i=0; $i < 20; $i++)
    el número es: {{ $i }} <br/>
@endfor

<h4>2.2- While </h4>

<?php $contador = 1 ?>

@while($contador < 30 )
    @if($contador % 2 == 0)
        NÚMERO PAR: {{$contador}} <br/>
    @endif

    <?php $contador++; ?>
@endwhile

<h4>2.3- Foreach </h4>

@foreach($listado as $pelicula)
    <strong>{{$pelicula}}</strong><br/>
@endforeach


Hello, @{{ name }}.

@include('includes.footer')