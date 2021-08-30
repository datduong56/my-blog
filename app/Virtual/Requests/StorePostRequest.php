<?php

namespace App\Virtual\Requests;

/**
 * @OA\Schema(
 *  title="StorePostRequest",
 *  description="Store post request body data",
 *  required={"title", "summary", "content"},
 *  @OA\Xml(name="StorePostRequest")
 * )
 */

class StorePostRequest
{
  /**
   * @OA\Property(example="A nice post title")
   *
   * @var string
   */
    public $title;

  /**
   * @OA\Property(example="This is new summary on post")
   *
   * @var string
   */
    public $summary;

  /**
   * @OA\Property(example="This is nice post content")
   *
   * @var string
   */
    public $content;

  /**
   * @OA\Property(example="https://via.placeholder.com/1080x1080.png/000055?text=cats+voluptate")
   *
   * @var string
   */
    private $thumbnail;
}
