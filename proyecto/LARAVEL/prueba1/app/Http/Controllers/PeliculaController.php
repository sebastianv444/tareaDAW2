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
}
