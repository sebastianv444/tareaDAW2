<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrutaController extends Controller
{
/*      route(): Se utiliza para generar URLs basadas en las rutas nombradas definidas en tus
        archivos de rutas (web.php o api.php).

        action(): Se utiliza para generar URLs basadas en los métodos de los controladores.
        Es útil cuando quieres generar una URL para una acción específica de un controlador.
 */
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
        /*
            no es necesario recorrerlo con un foreach ya que se obtiene un único objeto,
            no una colección. Con first() obtienes la primera fila que cumple la condición
            y la puedes utilizar directamente
        */
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
        /* RETORNA un valor booleano dependiendo si se ha insertado todo correctamente. */
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

        /* El método delete() retorna un número entero que indica cuántas filas
        fueron eliminadas. */
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
        /* RETORNA un número entero que indica la cantidad de filas actualizadas.  */
        $fruta = DB::table('frutas')->where('id','=',$id)->update(array(
            'nombre'=>$request->input('nombre'),
            'descripcion'=>$request->input('descripcion'),
            'precio'=>$request->input('precio'),
            'fecha'=>date('Y-m-d')
        ));
        return redirect()->action('\App\Http\Controllers\FrutaController@index')->with('estado', 'fruta ACTUALIZADA correctamente');
    }

}
