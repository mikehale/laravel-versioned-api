<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\V1\ApiController;

class PostController extends ApiController
{
    /**
     * @OA\Get(
     *     path="/api/posts",
     *     tags={"Post"},
     *     @OA\Response(response="200", description="list posts")
     * )
     */
    public function index()
    {
        return '{"message": "some posts"}';
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
