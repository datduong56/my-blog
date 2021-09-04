<?php

namespace App\Repositories\Eloquent;

use App\Http\Requests\Post\StorePostRequest;
use App\Http\Resources\PostResource;
use App\Models\Post;
use App\Repositories\Interface\PostInterface;
use Symfony\Component\HttpFoundation\Response;

class PostRepository implements PostInterface
{
    private function notFoundResponse($message = 'Not found post')
    {
        return response()->json(['message' => $message], Response::HTTP_NOT_FOUND);
    }

    public function getAll()
    {
        return new PostResource(Post::all());
    }

    public function find($id)
    {
        $post = Post::find($id);
        if (is_null($post)) {
            return $this->notFoundResponse();
        }
        return response()->json($post, Response::HTTP_OK);
    }

    public function delete($id)
    {
        $post = Post::find($id);
        if (is_null($post)) {
            return $this->notFoundResponse();
        }
        $post->delete();
        return response('', Response::HTTP_NO_CONTENT);
    }

    public function create(StorePostRequest $request)
    {
        $post = Post::create($request->validated());
        return response()->json($post, Response::HTTP_CREATED);
    }

    public function update(StorePostRequest $request, $id)
    {
        $post = Post::find($id);
        if (is_null($post)) {
            return $this->notFoundResponse();
        }
        $post->update($request->validated());
        return response()->json($post, Response::HTTP_ACCEPTED);
    }
}
