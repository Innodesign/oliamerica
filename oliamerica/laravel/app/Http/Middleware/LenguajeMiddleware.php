<?php

namespace oliamerica\Http\Middleware;

use Closure;

class LenguajeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $lenguaje = \Session::get('lenguaje');
        if(isset($lenguaje)){
            \App::setLocale($lenguaje);
        }
        else{
            \App::setLocale('es');
        }
        return $next($request);
    }
}
