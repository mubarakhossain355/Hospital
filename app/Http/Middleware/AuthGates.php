<?php

namespace App\Http\Middleware;

use Closure;

class AuthGates
{
    public function handle($request, Closure $next)
    {

        return $next($request);
    }
}
