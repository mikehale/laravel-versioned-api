<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CustomMiddleware
{
    public function handle($request, Closure $next, $param1, $param2)
    {

        print("param1: ".$param1."\n");
        print("param2: ".$param2."\n");

        return $next($request);
    }
}
