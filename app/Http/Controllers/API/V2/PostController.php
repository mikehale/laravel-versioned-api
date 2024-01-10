<?php

namespace App\Http\Controllers\Api\V2;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\V2\ApiController;

class PostController extends ApiController
{
    /**
     * @OA\Get(
     *     path="/api/posts",
     *     tags={"Post"},
     *     @OA\Response(response="200", description="list v2 posts")
     * )
     */
    public function index()
    {
        return '{"message": "some v2 posts"}';
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show(string $id)
    {
    }

    public function edit(string $id)
    {
    }

    public function update(Request $request, string $id)
    {
    }

    public function destroy(string $id)
    {
    }
}
