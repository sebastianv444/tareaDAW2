<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    public function index(){
        $titulo = "mis peliculas favoritas";
        return view('peliculas.index',[
            'titulo' => $titulo
        ]);
    }

    public function detalle($vista = null){
        return view('peliculas.detalle');
    }

    public function redirigir(){
        // tres formas distintas de redirigir

        // 1. return redirect()->action('\App\Http\Controllers\PeliculaController@detalle');
        // 2. return redirect()->route('detalle.pelicula');
        return redirect('/peliculas');
    }

    public function formulario(){

        return view('peliculas.formulario');
    }

    public function recibir(Request $request){
        //con request podemos recoger los datos por post, pues accede a la petición http
        $nombre = $request->input('nombre'); // input limpia el valor que nos llega(Seguridad)
        $email = $request->input('email');

        return "el nombre es: $nombre y el email es: $email";
    }

}
