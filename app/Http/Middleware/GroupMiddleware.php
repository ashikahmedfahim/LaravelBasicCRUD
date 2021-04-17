<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class GroupMiddleware
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
        echo ' hi from group middelware ';
        return $next($request);
    }
}
