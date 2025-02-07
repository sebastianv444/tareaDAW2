<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('/productos', function () {
    return view('welcome');
});

Route::get('/mostrar-fecha', function () {
    $titulo2 = "estoy mostrando la fecha";
    return view('mostrar-fecha',[
        'titulo' => $titulo2
    ]);
}); */

/* Para pasar parametros se usan {} */
/* Route::get('/series/{titulo}', function ($titulo = 'no hay serie seleccionada') { */
    /* OJO: este nombre que le pongamos en el view es el que va buscar en la carpeta de views  */
    /* return view('peliculas',[
        'titulo' => $titulo
    ]);
}); */

// Router galardonadas
/* Route::get('/galardonadas',function($titulo){
    $titulo = "Mad men";
    $director = "Hellen Hann";
    $anio = 2008;
    return view('galardonadas',[
        'titulo' => $titulo,
        'director' => $director,
        'año' => $anio
    ]);
}); */

/* Route::get('/productos/{producto}/{year}', function ($producto, $year = 2019) {
    if($year < 2000){
        abort(404); // retornar un error 404 por no cumplir la condición.
    }

    return view('productos',[
        'producto' => $producto,
        'year' => $year
    ]); */
    /* OJO: el where solo admite expresiones regulares. */
/* })->where([
    'producto' => '[a-zA-Z0-9]+'
]); */

/*
    [a-z]+ admite sólo letras en minúscula
    [A-Z]+ admite sólo letras en mayúscula
    [0-9]+ admite sólo numeros.

    Se pueden combinar:
    [a-zA-Z0-9]+
*/

/* Route::get('/listado-peliculas',function(){
    $titulo = "Listado de películas";
    $listado = ['el señor de los anillos', 'superman', 'batman'];
    //le pasamos esta ruta, ya que listado se encuentra dentro de la carpeta de peliculas
    return view('peliculas.listado',[
        'titulo' => $titulo,
        'listado' => $listado
    ]);
}); */

/*
    Crear diferentes rutas asociadas a series:
        - series/mostrar-lista
        - series/detalle/(titulo(parametro)/year (parametro)/director(opcional))
        - galardonadas/tematica(parametro)

        deben apuntar a vistas en la carpeta serie
        crear un array de pelícuas (solo títulos)

        En la plantilla según la url solicitada deberéis mostrar el listado de todas las
        películas, el detalle de una película. Las películas galardonadas según temática.

        Comprobaciones:
        Year es año (expresión regular con el where) y el año mayor que
*/

/* Route::get('/generica',function(){
    return view('generica');
}); */

// CON CONTROLADORES:
/* Como segundo parametro le hemos pasado la ruta para el controldor, y el @index es para
llamar al metodo de nuestro controlador. */
Route::get('/peliculas','App\Http\Controllers\PeliculaController@index');
