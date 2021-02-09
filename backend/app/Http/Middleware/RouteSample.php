<?php

namespace App\Http\Middleware;

use Closure;

class RouteSample
{
    public function handle($request, Closure $next)
    {

        error_log("before RouteSample\n", 3, __DIR__ . DIRECTORY_SEPARATOR  . "sample.log");

        $response = $next($request);

        error_log("after RouteSample\n", 3, __DIR__ . DIRECTORY_SEPARATOR  . "sample.log");

        return $response;

    }
}