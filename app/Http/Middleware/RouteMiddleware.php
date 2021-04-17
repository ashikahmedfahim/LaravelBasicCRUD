<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RouteMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        echo 'Hi from Router middleware ';
        return $next($request);
    }
}
