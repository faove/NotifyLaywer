<?php

namespace App\Http\Middleware;

use Closure;

class Cors
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
        return next($request)
        // Establecemos la cabecera CORS para permitir el origen de solicitud desde localhost
        ->header('Access-Control-Allow-Origin', '*');
        // $response = $next($request);

        // $response->headers->set('Access-Control-Allow-Origin', '*');
        // $response->headers->set('Access-Control-Allow-Methods', 'GET, POST, PATCH, PUT, DELETE, OPTIONS, HEAD');
        // $response->headers->set('Access-Control-Allow-Headers',
        //     'Content-Type, Accept, Authorization, X-Requested-With, Application');

        // return $response;
        // return $next($request);
    }
}
