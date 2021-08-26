<?php

namespace App\Repositories\Eloquent;

use App\Models\Post;
use App\Repositories\Interface\PostInterface;

class PostRepository implements PostInterface
{
    public function getAll()
    {
        return Post::all();
    }

    public function find($id)
    {
        return Post::find($id);
    }
}
