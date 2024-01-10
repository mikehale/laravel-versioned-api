<?php

use App\Http\Controllers\Api\V1;
use App\Http\Controllers\Api\V2;
use App\Http\Middleware\ApiVersion;

/*
  |--------------------------------------------------------------------------
  | API Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register API routes for your application. These
  | routes are loaded by the RouteServiceProvider and all of them will
  | be assigned to the "api" middleware group. Make something great!
  |
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


# TODO switch to using header version

// +        Route::prefix('api')
// +            ->middleware('api')
// +            ->middleware('api.version:2')
// +            ->namespace($this->moduleNamespace)
// +            ->group(module_path('BlockStorage', '/Routes/apiV2.php'));

// Route::middleware('api.version:1')->group(function () {
//     Route::namespace(function ($versionNamespace) {
//         Route::get('posts', [$versionNamespace . '\PostController', 'index']);
//     });
// });
// Route::apiResource('posts', App\Http\Controllers\Api\V1\PostController::class)->only(['index']);
// Route::apiResource('posts', App\Http\Controllers\Api\V2\PostController::class)->only(['index']);

// Route::macro('tracked', function ($uri, $controller) {
//     Route::get($uri, $controller)->middleware('api');
// });

// Route::tracked('/dashboard', function(){
//     return "tracked dash";
// });

// Route::middleware(DynamicControllerMiddleware::class)->get('/dynamic-route', function ($request) {
//     return app()->call([App\Http\Controllers\Api\V1\PostController, 'index']);
// });


// Route::middleware('api.version:1')->group(function (Router $router): void {
//     Route::apiResource('posts', App\Http\Controllers\Api\V1\PostController::class)->only(['index']);
// });
// Route::middleware('api.version:2')->group(function () {
//     Route::apiResource('posts', App\Http\Controllers\Api\V2\PostController::class)->only(['index']);
// });

// Route::middleware('api')->group(function () {
//     Route::get('dynamic-route', function (Request $request) {
//         $version = $request->header('apiversion');

//         if ($version === '1') {
//             return 'Version 1 API';
//         } elseif ($version === '2') {
//             return 'Version 2 API';
//         }

//         return 'Unknown API version';
//     });
// });

// Route::group(['prefix' => 'test'], function (Router $router): void {
//     $version=1;
//     $route = $router->current();
//     print_r($route);
//         // $version = $request->header('apiversion');
//         // if ($version == '1') {
//         //     $router->apiResource('posts', App\Http\Controllers\Api\V1\PostController::class)->only(['index']);
//         // }
//         // elseif ($version == '2') {
//         //     $router->apiResource('posts', App\Http\Controllers\Api\V2\PostController::class)->>only(['index']);
//         // }
//     if ($version === '1') {
//         $router->apiResource('posts', 'App\\Http\\Controllers\\Api\\V1\\PostController')->only(['index']);
//     } elseif ($version === '2') {
//         // $router->apiResource('posts', App\Http\Controllers\Api\V2\PostController::class)->>only(['index']);
//     } else {
//         echo "Unknown";
//     }
// });

// Route::group([],function (Router $router) {
//     $version = $router->header('apiversion');
//     if ($version === '1') {
//         $router->get('posts', function() {
//             return 'postsv1';
//         });
//     } else {
//         $router->get('posts', function() {
//             return 'postsv2';
//         });
//     }
// });

// Route::name('v1.')->group(function () {
//     Route::get('/posts', function () {
//         return 'yo';
//     })->name('posts');
// });

// Route::name('v2.')->group(function () {
//     Route::get('/posts', function () {
//         return 'yo';
//     })->name('posts');
// });


if (ApiVersion::is(1)) {
    Route::apiResource('posts', V1\PostController::class)->only(['index']);
} else {
    Route::apiResource('posts', V2\PostController::class)->only(['index']);
}
