<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    public function index() {
        // obtener todos los proveedores de la base de datos
       $clientes = DB::table('clientes')->get();

       return view('cliente.index', [
           'clientes'=> $clientes
       ]);

      }


       public function create() {
           return view('cliente.create');
       }

       public function salvar(Request $request) {

           $clientes = DB::table('clientes')->insert(array(
               'nombre'=>$request->input('nombre'),
               'email'=>$request->input('email'),
               'telefono'=>$request->input('telefono'),
               'direccion'=>$request->input('direccion'),
               'created_at'=>now(),
               'updated_at'=>now()
           ));

           return redirect()->action('\App\Http\Controllers\ClienteController@index')
           ->with('status', 'Proveedor agregado correctamente');

       }

       public function detalle($id){
           $cliente = DB::table('clientes')->where('id','=',$id)->first();

           return view('cliente.detalle', [
               'cliente'=> $cliente
           ]);
       }

       public function detalleEnEspecifico($cliente){
        return view('cliente.detalle', [
            'cliente'=> $cliente
        ]);
       }
}
