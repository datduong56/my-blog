<?php

namespace App\Repositories\Eloquent;

use App\Models\Post;

class PostRepository
{
    public function getAll()
    {
        return Post::orderBy('views_count', 'desc')->all();
    }

    public function find($id)
    {
        return Post::firstOrFail(['hash_id' => $id]);
    }
}
