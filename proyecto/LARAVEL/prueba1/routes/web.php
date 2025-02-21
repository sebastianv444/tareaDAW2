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
Route::get('/peliculas', '\App\Http\Controllers\PeliculaController@index');

/*El resource para que nos permita acceder a todos los metodos de este controlador,
para acceder a sus metodos en la url de la web tenemos que poner "/" y el nombre de el metodo.*/
Route::resource('/usuario', '\App\Http\Controllers\UsuarioController');

/* el /{year?} es para indicar que es opcional */
Route::get("/detalle/{year?}", [
    // los middlewere son un filtro:
    'middleware' => 'testYear',
    /* Si el año no es 2019 o es null, redirige a /peliculas. Si el año es 2019, llama
        a $next($request) en el middleware para pasar la solicitud al siguiente middleware
        o al controlador. */
    'uses' => '\App\Http\Controllers\PeliculaController@detalle',
    /* con este as le damos un abreviado a "/detalle/{year}" para poder usarla en
    el lugar en el que te redirija este controlador PeliculaController@detalle */
    'as' => "detalle.pelicula"
]);

Route::get('/redirigir', '\App\Http\Controllers\PeliculaController@redirigir');


// Formulario es método POST
/* OJO le pusimos get, ya que no vamos a mostrar algo directamente, sino que vamos a tratar esto
con un controller. */
Route::get('/formulario', '\App\Http\Controllers\PeliculaController@formulario');

Route::post('/recibir', '\App\Http\Controllers\PeliculaController@recibir');

// con group utilizamos un prefijo de frutas (opcional, simplement por comodidad).
Route::group(['prefix' => 'frutas'], function () {
    Route::get('/', '\App\Http\Controllers\FrutaController@index');
    Route::get('index', '\App\Http\Controllers\FrutaController@index');
    Route::get('detalle/{id}', '\App\Http\Controllers\FrutaController@detalle');
    Route::get('crear', '\App\Http\Controllers\FrutaController@crear');
    Route::post('salvar', '\App\Http\Controllers\FrutaController@salvar');
    Route::get('borrar/{id}', '\App\Http\Controllers\FrutaController@borrar');
    Route::post('editar/{id}', '\App\Http\Controllers\FrutaController@editar');
    Route::post('actualizar', '\App\Http\Controllers\FrutaController@actualizar');
});

Route::resource('/ok', "\App\Http\Controllers\ProveedorController");
