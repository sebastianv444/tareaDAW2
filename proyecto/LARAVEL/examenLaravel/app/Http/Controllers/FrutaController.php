<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrutaController extends Controller
{
    public function index() {
        // conectar a la bas de datos, acceder a la tabla, usar método get() para obtener todos los registros
        $frutas = DB::table('frutas')->get(); // get() devuelve un array de objeto

        // var_dump($frutas);
        // die();

        return view('fruta.index',[
            'frutas'=>$frutas
        ]);
    }

    public function detalle($id) {
        // https://laravel.com/docs/8.x/queries#introduction
        $fruta = DB::table('frutas')
            ->where('id', '=', $id)
            ->first();  // seleccionamos una sola fila con first()


            return view('fruta.detalle',[
                'fruta'=>$fruta
            ]);
    }

    public function crear() {
        return view('fruta.crear');
    }

    public function salvar(Request $request) {
        // guardar datos formulario crear.blade
        $fruta = DB::table('frutas')->insert(array(
            'nombre'=>$request->input('nombre'),
            'descripcion'=>$request->input('descripcion'),
            'precio'=>$request->input('precio'),
            'fecha'=>date('Y-m-d')
        ));

        return redirect()->action('\App\Http\Controllers\FrutaController@index');

    }

    public function borrar($id) {
        // el id nos viene por la url
        $fruta = DB::table('frutas')->where('id', '=', $id)->delete();
        // con with pasamos una sesión flash
        // https://laravel.com/docs/8.x/redirects#redirecting-with-flashed-session-data
        return redirect()->action('\App\Http\Controllers\FrutaController@index')->with('estado', 'fruta borrada correctamente');
    }

    public function irAFormularioEditar($id) {
        $fruta = DB::table('frutas')->where('id', '=', $id)->first();
        var_dump($fruta);
        return view('fruta.crear', ['fruta'=>$fruta]);
    }

    public function actualizar(Request $request) {
        $id = $request->input('id');
        $fruta = DB::table('frutas')->where('id',$id)->update(array(
            'nombre'=>$request->input('nombre'),
            'descripcion'=>$request->input('descripcion'),
            'precio'=>$request->input('precio'),
            'fecha'=>date('Y-m-d')
        ));
        return redirect()->action('\App\Http\Controllers\FrutaController@index')->with('estado', 'fruta ACTUALIZADA correctamente');
    }

}
