<?php

namespace App\Virtual\Resources;

/**
 * @OA\Schema(
 *  title="PostResource",
 *  description="Post resource",
 *  @OA\Xml(name="PostResource")
 * )
 */
class PostResource
{
  /**
   * @OA\Property(title="data")
   *
   * @var \App\Virtual\Models\Post[]
   */
  private $data;
}
