<?php

namespace App\Repositories\Interface;

interface PostInterface
{
    public function getAll();

    public function find($id);
}
