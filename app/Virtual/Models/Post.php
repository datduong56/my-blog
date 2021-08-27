<?php

namespace App\Virtual\Models;

/**
 * @OA\Schema(
 *  title="Post",
 *  description="Post model",
 *  @OA\Xml(name="Post")
 * )
 */
class Post
{

  /**
   * @OA\Property(
   *  type="number",
   *  format="int64",
   *  example=1
   * )
   *
   * @var bigInteger
   */
    private $id;

  /**
   * @OA\Property(
   *  example="A nice post"
   * )
   *
   * @var string
   */
    public $title;

  /**
   * @OA\Property(
   *  example="This is a content of post"
   * )
   *
   * @var string
   */
    public $content;

  /**
   * @OA\Property(
   *  example="2021-08-26T14:24:23.000000Z",
   *  format="date-time",
   *  type="string"
   * )
   *
   * @var timestampsTz
   */
    private $created_at;

  /**
   * @OA\Property(
   *  example="2021-08-26T14:24:23.000000Z",
   *  format="date-time",
   *  type="string"
   * )
   *
   * @var timestampsTz
   */
    private $updated_at;

  /**
   * @OA\Property(
   *  example="https://via.placeholder.com/1080x1080.png/000055?text=cats+voluptate",
   *  type="string"
   * )
   *
   * @var string
   */
    private $thumbnail;

  /**
   * @OA\Property(
   *  example="This is a summary post"
   * )
   *
   * @var string
   */
    public $summary;
}
