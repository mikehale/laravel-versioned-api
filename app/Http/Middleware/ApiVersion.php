<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Request as RequestFacade;

class ApiVersion
{

    public static function is($version) {
        return RequestFacade::header('apiversion') == $version;
    }

    public function handle($request, Closure $next, $version)
    {
        // $route = $request->route();
        // $actions = $route->getAction();
        // print_r($actions);

        // $acceptValue = $request->header('ApiVersion');
        // $request->route()->setParameter('version', $version);
        // $request->route()->setParameter('versionNamespace', 'App\Http\Controllers\Api\V' . $version);

        // print("version: ". $version . "\n");
        // print("accept: ". $acceptValue . "\n");

        return $next($request);
        // if ($version === $acceptValue) {
        //     return $next($request);
        // }

        // return new Response('Not Found', 404);

    }
}
