<?php

namespace App\Repositories\Interface;

use App\Http\Requests\Post\StorePostRequest;

interface PostInterface
{
    public function getAll();

    public function find($id);

    public function delete($id);

    /**
     * @param \App\Http\Requests\Post\StorePostRequest $request
     */
    public function create(StorePostRequest $request);
}
