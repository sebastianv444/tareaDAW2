<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TestAdmin
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
        $admin = $request->route('admin');

        if(is_null($admin) || $admin != 'admin') {
            return redirect('/denegado');
        }
        return $next($request);
    }
}
