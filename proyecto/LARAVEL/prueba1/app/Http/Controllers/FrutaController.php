<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrutaController extends Controller
{

    public function index()
    {
        /* conectar a la base de datos, acceder a la tabla, usar método get()
        para obtener todos los registros. */
        $frutas = DB::table('frutas')->get(); // get() devuelve un array de objeto.
        // carptea fruta y archivo index.php

        /* var_dump($frutas); */

        return view('fruta.index', [
            'frutas' => $frutas
        ]);
    }

    public function detalle($id)
    {
        $fruta = DB::table('frutas')
            ->where('id', '=', $id)
            // con first solo nos retorna un objeto con una sola fila.
            ->first();
        // get obtiene un array con todos los objetos.
        /* ->get(); */
        return view('fruta.detalle', [
            'fruta' => $fruta
        ]);
    }

    public function crear()
    {
        /* OJO: siempre que se trata de crear tenemos que traer los datos para llenar de un
        "FORMULARIO!!" */
        return view("fruta.crear");
    }

    // con el "Request" coge el post con los datos enviados desde un formulario en la vista y pasa por aquí
    public function salvar(Request $request) {
        // guardar datos del formulario de crear.blade.php
        $fruta = DB::table('frutas')->insert([
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('nombre'),
            'precio' => $request->input('precio'),
            'fecha' => date('Y-m-d')
        ]);
        // Esto seria lo mismo que hacer un header('Location: ') pero en Laravel.
        return redirect()->action('\App\Http\Controllers\FrutaController@index');
    }

    /* OJO: el $id se recoge del parametro pasado por la url que lo programamos previamente
    en las rutas de web.php */
    public function borrar($id){
        // el id viene por la url.
        $fruta = DB::table('frutas')->where('id','=',$id)->delete();
        // este te redirecciona a salvar y si quiero coge el estado y lo pinta, son las llamadas session flash
        // el with sirve como para dar informacion al usuario.
        // OJO: puedes coger esta session flash(with) con session() donde te rediriga.
        return redirect()->action('\App\Http\Controllers\FrutaController@index')->with('estado',
    'fruta borrada correctamente');
    }

    public function editar($id){
        /* esta funcion no esta editando, te va llevar a un formulario para editarlo ahí. */
        $fruta = DB::table('frutas')->where('id','=',$id)->first();
        var_dump($fruta);
        return view('fruta.crear',['fruta'=>$fruta]);
    }

    /* QUERY BUILDER: es una forma de llamar a la base de datos */
    public function actualizar(Request $request){
        $id = $request->input('id');
        $fruta = DB::table('frutas')->where('id','=',$id)->update([
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('nombre'),
            'precio' => $request->input('precio'),
            'fecha' => date('Y-m-d')
        ]);
        return redirect()->action('\App\Http\Controllers\FrutaController@index')->with('estado',
    'fruta actualizada correctamente');
    }
}
