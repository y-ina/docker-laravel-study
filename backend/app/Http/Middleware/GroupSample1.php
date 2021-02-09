<?php

namespace App\Http\Middleware;

use Closure;

class GroupSample1
{
    public function handle($request, Closure $next)
    {

        error_log("before GroupSample1\n", 3, __DIR__ . DIRECTORY_SEPARATOR  . "sample.log");

        $response = $next($request);

        error_log("after GroupSample1\n", 3, __DIR__ . DIRECTORY_SEPARATOR  . "sample.log");

        return $response;

    }
}