<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/* OJO: no estamos usando modelos, ya que eso es cuando vamos a usar eloquent, y para este
examen usaremos eloquent. */
class ProveedorController extends Controller
{

    public function index(){
        // obtiene todos los proveedores de la base de datos
        $proveedores = DB::table('proveedores')->get(); // get() devuelve un array de objeto.

        return view('proveedor.index',[
            'proveedores' => $proveedores
        ]);
    }

    public function create(){
        return view('proveedor.create');
    }

    // el Request es lo que nos viene del formulario con el POST
    public function salvar(Request $request){
        // validate es una funcion especifica para validar formularios del request.
        $request->validate(
            [
                // le decimos que es requerido y de tipo string y un maximo de 100 caracteres
                'nombre' => 'required|string|max:100',
                // le decimos si el campo email es unico en la tabla proovedores
                'email'=> 'required|email|unique:proovedores,email',
                'telefono' => 'nullable|string|max:15',
                'direccion' => 'nullable|string|max:255'
            ],
            // este otro array es para manejar los errores
        /* [
                'nombre.required' => 'El nombre del proovedor es obligatorio',
                'email.unique' => 'El correo electrónico ya está registrado'
            ] */
        );

        $fruta = DB::table('proveedores')->insert([
            'nombre' => $request->input('nombre'),
            'email' => $request->input('email'),
            'telefono' => $request->input('telefono'),
            'direccion' => $request->input('direccion'),
            'created_at' => now(),
            'updated_at' => now()

        ]);

        // Esto seria lo mismo que hacer un header('Location: ') pero en Laravel.
        // El with() es una session flash solo sirve pa mandar info, no es obligatorio
        return redirect()->action('\App\Http\Controllers\ProovedorController@index')
        ->with('status','Proveedor agregado correctamente');
    }
}
