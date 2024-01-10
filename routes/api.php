<?php

use App\Http\Controllers\Api\V1;
use App\Http\Controllers\Api\V2;

class ApiVersion
{
    public static function is($version) {
        return str_contains(
            "application/vnd.example+json; version=$version",
            Illuminate\Support\Facades\Request::header('Accept')
        );
    }

}

if (ApiVersion::is(1)) {
    Route::get('posts', [V1\PostController::class, 'index'])->name('posts.v1');
} else {
    Route::get('posts', [V2\PostController::class, 'index'])->name('posts.v2');
}
