<?php

namespace App\Repositories\Interface;

use App\Http\Requests\Post\StorePostRequest;

interface PostInterface
{
    public function getAll();

    /**
     * @param integer $id
     */
    public function find($id);

    /**
     * @param integer $id
     */
    public function delete($id);

    /**
     * @param \App\Http\Requests\Post\StorePostRequest $request
     */
    public function create(StorePostRequest $request);

    /**
     * @param \App\Http\Requests\Post\StorePostRequest $request
     * @param integer $id
     */
    public function update(StorePostRequest $request, $id);
}
