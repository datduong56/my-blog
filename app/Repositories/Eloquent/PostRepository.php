<?php

namespace App\Repositories\Eloquent;

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
}
