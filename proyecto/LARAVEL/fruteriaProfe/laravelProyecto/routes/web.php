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

// // Route::get('/productos', function () {
// //     return view('productos');
// // });

// Route::get('/mostrar-fecha', function() {
//    /*  echo "<h1>hora actual</h1>";
//     echo date('d-m-Y');
//     echo "<br>"; */
//     $titulo2 = "estoy mostrando la fecha";
//     return view('mostrar-fecha',array(
//         'titulo'=> $titulo2
//     ));
// });


//    // paso de parámetros. La función debe recoger dichos parámetros
//    Route::get('/peliculas/{titulo}', function ($titulo) {
//     return view('peliculas', array(
//         'titulo'=> $titulo
//     ));
// });

//    // paso de parámetros opcionales. La función debe recoger dichos parámetros
//    Route::get('/series/{titulo?}', function ($titulo='no hay serie seleccionada') {
//     return view('peliculas', array(
//         'titulo'=> $titulo
//     ));
// });

// Route::get('/series/{premiadas}/{titulo?}', function ($premiadas, $titulo='no hay serie seleccionada') {
//     return view('premiadas', array(
//         'premiadas'=> $premiadas,
//         'titulo'=> $titulo
//     ));
// });


// // router galardonadas
// Route::get('/galardonadas', function ($titulo) {
//     $titulo = "Mad men";
//     $director = "Hellen Hann";
//     $anio = 2008;
//     return view('galardonadas', array(
//         'titulo'=> $titulo,
//         'director'=>$director,
//         'anio'=> $anio
//     ));
// });

// Route::get('/productos/{producto}/{year?}', function ($producto, $year=2019) {

//     if($year < 2000) {
//         abort(404); // retornar un error 404 por no cumplir la condición
//     }

//     return view('productos', [
//         'producto'=> $producto,
//         'year' => $year
//     ]);
// })->where(array(
//     'producto'=> '[a-zA-Z0-9]+'
// ));

// /*
// [a-z]+  admite sólo letras en minúscula
// [A-Z]+ admite sólo letras en mayúscula
// [0-9]+ admite sólo números
// Se pueden combinar:
// [a-zA-Z0-9]+

// */

// Route::get('/listado-peliculas', function() {
//     $titulo = "Listado de películas";
//     $listado = array('el señor de los anillos', 'superman', 'batman');

//     return view('peliculas.listado', [
//         'titulo'=> $titulo,
//         'listado'=> $listado
//     ]);
// });


/*
Crear diferentes rutas asociadas a series:
    -series/mostrar-lista
    - series/detalle (/titulo(parametro)/year(parametro)/director (opcional))
    - galardonadas/tematica(parametro)

    deben apuntar a vistas en la carpeta serie
    crear un array de películas (solo títulos)

    En la plantilla según la url solicitada deberéis mostrar el listado de todas las películas,
    el detalle de una película
    Las películas galardonadas según temática

    Comprobaciones:
    Year es año (expresión regular con el where) y el año mayor que 1887

*/

/* Route::get('/generica', function() {
    return view('generica');
}); */

Route::get('/peliculas','\App\Http\Controllers\PeliculaController@index');

/* Route::resource() en Laravel está diseñado para mapear automáticamente las rutas
a los métodos estándar de un controlador de recursos: index, create, store, show,
edit, update y destroy. Si agregas más métodos al controlador, no los va a reconocer
automáticamente como rutas de recurso. */
/* RECUERDA!!: esto se accede /public/usuario/nombreDelMetodo(index, create, store, show,
edit, update y destroy) */
Route::resource('usuario', '\App\Http\Controllers\UsuarioController');

Route::get('/detalle/{year?}',[
   'middleware'=>'testyear',
   'uses'=> '\App\Http\Controllers\PeliculaController@detalle',
   'as'=> 'detalle.pelicula'
]);

Route::get('/redirigir', '\App\Http\Controllers\PeliculaController@redirigir');


Route::get('/formulario', '\App\Http\Controllers\PeliculaController@formulario');

// Formulario es método POST
Route::post('/recibir', '\App\Http\Controllers\PeliculaController@recibir');

// con group utilizamos un prefijo de frutas (opcional, simplemente por comodidad)
Route::group(['prefix'=>'frutas'], function() {
    Route::get('','\App\Http\Controllers\FrutaController@index');
    Route::get('index','\App\Http\Controllers\FrutaController@index');
    Route::get('detalle/{id}','\App\Http\Controllers\FrutaController@detalle');
    Route::get('crear','\App\Http\Controllers\FrutaController@crear');
    Route::post('salvar','\App\Http\Controllers\FrutaController@salvar');
    Route::get('borrar/{id}','\App\Http\Controllers\FrutaController@borrar');
    Route::get('editar/{id}','\App\Http\Controllers\FrutaController@irAFormularioEditar');
    Route::post('actualizar','\App\Http\Controllers\FrutaController@actualizar');
});
