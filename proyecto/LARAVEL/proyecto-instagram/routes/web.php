<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    // me va dar todo lo de el Modelo 'image' como objeto
    // esto es un array de objetos
/*     $images = App\Models\Image::all();

    foreach ($images as $image) { */
        /* var_dump($image); */
/*         echo $image->image_path . "<br>";
        echo $image->description . "<br>"; */

        // el ORM de eloquent trata el metodo de la clase images como una propiedad.
        /* var_dump($image->user); */
/*
        echo $image->user->name . ' ' . $image->user->surname . '<br>';
        // datos del usuario que ha creado la imagen.

        if (count($image->comments) >= 1) {
            echo "<h4>Comentarios</h4>";
            foreach ($image->comments as $comment) {
                echo $comment->content . "<br>";
                echo "comentario hecho por: " . $comment->user->name . "<br>";
            }
        }
    }

    die(); */

    return view('welcome');
});

// El auth se importa con use, ya que de lo contrario da un error.
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* IMPORTANTE!!: usar middleware porque eso puntua mucho en el examen */
