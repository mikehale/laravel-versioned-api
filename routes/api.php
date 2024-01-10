<?php

use App\Http\Controllers\Api\V1;
use App\Http\Controllers\Api\V2;

class ApiVersion
{
    public static function is($version) {
        return Illuminate\Support\Facades\Request::header('apiversion') == $version;
    }

}

if (ApiVersion::is(1)) {
    Route::apiResource('posts', V1\PostController::class)->only(['index']);
} else {
    Route::apiResource('posts', V2\PostController::class)->only(['index']);
}
