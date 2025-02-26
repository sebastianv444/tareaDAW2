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

    public function detalle($id){
        $proveedor = DB::table('proveedores')->where('id','=',$id)->first();

        return view('proveedor.detalle', [
            'proveedor'=> $proveedor
        ]);
    }
}
