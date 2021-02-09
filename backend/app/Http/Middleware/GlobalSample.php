<?php

namespace App\Http\Middleware;

use Closure;

class GlobalSample
{
    public function handle($request, Closure $next)
    {

        error_log("before GlobalSample\n", 3, __DIR__ . DIRECTORY_SEPARATOR  . "sample.log");

        $response = $next($request);

        error_log("after GlobalSample\n", 3, __DIR__ . DIRECTORY_SEPARATOR  . "sample.log");

        return $response;

    }
}