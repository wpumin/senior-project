<?php

namespace App\Http\Middleware;

use Closure;
use Exception;
use LogicException;

class PermissionMiddleware
{

    public function handle($request, Closure $next)
    {

        dd($request->path());

        return $next($request);
    }
}
