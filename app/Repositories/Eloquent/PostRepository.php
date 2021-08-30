<?php

namespace App\Repositories\Eloquent;

use App\Http\Requests\Post\StorePostRequest;
use App\Models\Post;
use App\Repositories\Interface\PostInterface;
use Symfony\Component\HttpFoundation\Response;

class PostRepository implements PostInterface
{
    public function getAll()
    {
        return Post::all();
    }

    public function find($id)
    {
        $post = Post::find($id);
        if (is_null($post)) {
            return response()->json(['message' => 'Not found post'], Response::HTTP_NOT_FOUND);
        }
        return $post;
    }

    public function delete($id)
    {
        $post = Post::find($id);
        if (is_null($post)) {
            return response()->json(['message' => 'Not found post'], Response::HTTP_NOT_FOUND);
        }
        $post->delete();
        return response('', Response::HTTP_NO_CONTENT);
    }

    public function create(StorePostRequest $request)
    {
        $post = Post::create($request->validated());
        return $post;
    }
}
