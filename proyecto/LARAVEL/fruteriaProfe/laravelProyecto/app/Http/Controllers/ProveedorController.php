<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProveedorController extends Controller

{

   public function index() {
     // obtener todos los proveedores de la base de datos
    $proveedores = DB::table('proveedores')->get();

    return view('proveedor.index', [
        'proveedores'=> $proveedores
    ]);

   }


    public function create() {
        return view('proveedor.create');
    }

    public function salvar(Request $request) {

        /*
            si la validación falla, Laravel redirecciona automáticamente a la
            página anterior (normalmente el formulario) y almacena los mensajes
            de error en la variable $errors, que puedes usar en Blade para mostrar
            los errores al usuario.
            en el formulario debajo del input correspondiente:
            @error('nombre')
                <span style="color: red;">{{ $message }}</span>
            @enderror

            @error('email')
                <span style="color: red;">{{ $message }}</span>
            @enderror

            @error('telefono')
                <span style="color: red;">{{ $message }}</span>
            @enderror

        */
        $request->validate(
            [
                'nombre'=> 'required|string|max:100',
                'email' => 'required|email|unique:proovedores,email',
                'telefono'=>'nullable|string|max:15',
                'direccion' =>'nullable|string|max:255',
            ],
          /*   [
                'nombre.required' => 'El nombre del proveedor es obligatorio',
                'email.unique'=> 'El correo electrónico ya está registrado'
            ] */
        );

        /* RETORNA un valor booleano dependiendo si se ha insertado todo correctamente. */
        $fruta = DB::table('proveedores')->insert(array(
            'nombre'=>$request->input('nombre'),
            'email'=>$request->input('email'),
            'telefono'=>$request->input('telefono'),
            'direccion'=>$request->input('direccion'),
            'created_at'=>now(),
            'updated_at'=>now()
        ));

        return redirect()->action('\App\Http\Controllers\ProveedorController@index')
        ->with('status', 'Proveedor agregado correctamente');

    }
}
