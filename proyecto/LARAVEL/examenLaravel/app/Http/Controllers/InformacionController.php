<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class InformacionController extends Controller
{
    public function index(){
        $clientes = DB::table('clientes')->get();
        $proveedores = DB::table('proveedores')->get();

        return view('informacion.index', [
            'proveedores'=> $proveedores,
            'clientes' => $clientes
        ]);
    }

    public function telefono(){
        $clientes = DB::table('clientes')->get();
        $proveedores = DB::table('proveedores')->get();

        return view('informacion.admin', [
            'proveedores'=> $proveedores,
            'clientes' => $clientes
        ]);
    }

    public function denegado(){
        return view('informacion.denegado');
    }
}
