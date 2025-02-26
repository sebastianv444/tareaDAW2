<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestCliente
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $nombre = $request->route('nombre');
        $telefono = $request->route('telefono');

        $cliente = DB::table('clientes')->where('nombre','=',$nombre)->where('telefono','=',$telefono)->first();

        if($cliente->nombre !== $nombre || $cliente->telefono !== $telefono){
            return redirect('/datosDenegados');
        }

        $request->merge(['cliente' => $cliente]);

        return $next($request);
    }
}
