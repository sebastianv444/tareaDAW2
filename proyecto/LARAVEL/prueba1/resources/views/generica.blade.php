{{-- Para usar plantillas master tenemos que usar los siquiente: --}}
@extends('layouts/master')

{{-- para consumir un yield definido en el master.blade: --}}
@section('titulo','Primera página')

@section('header')
 @parent()
 <h3>hola que tal</h3>
 @stop

{{-- @stop sirve para usarlo, y para definirlo se usa el @show --}}
@section('contenido',)

<h3>Página generica</h3>

@stop
