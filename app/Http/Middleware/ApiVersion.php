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

}
