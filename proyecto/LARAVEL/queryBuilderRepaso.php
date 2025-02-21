<?php

use Illuminate\Support\Facades\DB;

/* INSERTAR EN UNA TABLA */

/* Si deseas obtener el id del registro insertado, deberías usar el método 
insertGetId(), es nos retorna un numero entero en representacion al id de 
la fila insertada */
$frutaId = DB::table('frutas')->insertGetId([
    'nombre'      => $request->input('nombre'),
    'descripcion' => $request->input('descripcion'),
    'precio'      => $request->input('precio'),
    'fecha'       => date('Y-m-d')
]);

/* INSERTAR EN UNA TABLA */


/* ACTUALIZAR EN UNA TABLA */

$id = $request->input('id');
/* RETORNA un número entero que indica la cantidad de filas actualizadas.  */
$fruta = DB::table('frutas')->where('id','=',$id)->update(array(
    'nombre'=>$request->input('nombre'),
    'descripcion'=>$request->input('descripcion'),
    'precio'=>$request->input('precio'),
    'fecha'=>date('Y-m-d')
));

/* ACTUALIZAR EN UNA TABLA */


/* ELIMINAR EN UNA TABLA */

/* El método delete() retorna un número entero que indica cuántas filas
fueron eliminadas. */
$fruta = DB::table('frutas')->where('id', '=', $id)->delete();

/* ELIMINAR EN UNA TABLA */


/* OBTENER DE UNA TABLA */

/* get() Retorna una colección de objetos, donde cada objeto representa una fila 
de la tabla frutas. */
/* 
para recorrer esto puedes usar un foreach en la vista:
    
    foreach ($frutas as $fruta) {
    echo "Nombre: " . $fruta->nombre . " - Precio: " . $fruta->precio . "<br>";
    }

IMPORTANTE!!: recuerda pasarle seguido de una coma en el view esta coleccion de objetos.
return view('fruta.index',[
            'frutas'=>$frutas
        ]);
*/
$frutas = DB::table('frutas')->get();

/*
    no es necesario recorrerlo con un foreach ya que se obtiene un único objeto,
    no una colección. Con first() obtienes la primera fila que cumple la condición
    y la puedes utilizar directamente
*/
$fruta = DB::table('frutas')
    ->where('id', '=', $id)
    ->first();  // seleccionamos una sola fila con first()

/* OBTENER DE UNA TABLA */


/* INNER JOIN */

/* $frutas: guarda un coleccion de objetos con todos las filas que retorna esta consulta */
$frutas = DB::table('frutas')
    ->join('categorias', 'frutas.categoria_id', '=', 'categorias.id')
    ->select('frutas.*', 'categorias.nombre as categoria_nombre')
    ->get();

/* este select() → Selecciona todos los campos de frutas (frutas.*) y el campo nombre 
de categorias, renombrándolo como categoria_nombre. */

/* INNER JOIN */