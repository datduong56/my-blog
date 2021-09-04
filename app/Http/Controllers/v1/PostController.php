<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StorePostRequest;
use App\Repositories\Interface\PostInterface;
use App\Http\Resources\PostResource;

class PostController extends Controller
{
    protected $postRepository;

    public function __construct(PostInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    /**
     * @OA\Get(
     *  path="/api/v1/post",
     *  operationId="listPost",
     *  tags={"Post"},
     *  summary="Get list post",
     *  description="Return list of post",
     *  @OA\Response(
     *      response=200,
     *      description="Successful",
     *      @OA\JsonContent(ref="#/components/schemas/PostResource")
     *  )
     * )
     *
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->postRepository->getAll();
    }

    /**
     * @OA\Post(
     *  path="/api/v1/post",
     *  operationId="storePost",
     *  tags={"Post"},
     *  summary="Store a new post",
     *  description="Return a new post created",
     *  @OA\RequestBody(
     *      required=true,
     *      @OA\JsonContent(ref="#/components/schemas/StorePostRequest")
     *  ),
     *  @OA\Response(
     *      response=201,
     *      description="Store a new post successful",
     *      @OA\JsonContent(ref="#/components/schemas/Post")
     *  ),
     *  @OA\Response(
     *      response=400,
     *      description="Bad request"
     *  ),
     * )
     *
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        return $this->postRepository->create($request);
    }

    /**
     * @OA\Get(
     *  path="/api/v1/post/{postId}",
     *  operationId="getPostDetail",
     *  tags={"Post"},
     *  summary="Get post detail",
     *  description="Return post detail",
     *  @OA\Parameter(
     *      name="postId",
     *      required=true,
     *      in="path",
     *      @OA\Schema(type="integer")
     *  ),
     *  @OA\Response(
     *      response=200,
     *      description="Success",
     *      @OA\JsonContent(ref="#/components/schemas/Post")
     *  ),
     *  @OA\Response(
     *      response=404,
     *      description="Not found post"
     *  )
     * )
     *
     * Display the specified resource.
     *
     * @param  integer $postId
     * @return \Illuminate\Http\Response
     */
    public function show($postId)
    {
        return $this->postRepository->find($postId);
    }

    /**
     * @OA\Put(
     *  path="/api/v1/post/{postId}",
     *  operationId="updatePostDetail",
     *  tags={"Post"},
     *  summary="Update post detail",
     *  description="Return a updated post detail",
     *  @OA\Parameter(
     *      name="postId",
     *      required=true,
     *      in="path",
     *      @OA\Schema(type="integer")
     *  ),
     *  @OA\RequestBody(
     *      required=true,
     *      description="Updated user object",
     *      @OA\JsonContent(ref="#/components/schemas/StorePostRequest")
     *  ),
     *  @OA\Response(
     *      response=202,
     *      description="Updated post",
     *      @OA\JsonContent(ref="#/components/schemas/Post")
     *  ),
     *  @OA\Response(
     *      response=400,
     *      description="Bad request"
     *  ),
     *  @OA\Response(
     *      response=404,
     *      description="Not found post"
     *  )
     * )
     *
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request\StorePostRequest  $request
     * @param  integer $postId
     * @return \Illuminate\Http\Response
     */
    public function update($postId, StorePostRequest $request)
    {
        return $this->postRepository->update($request, $postId);
    }

    /**
     * @OA\Delete(
     *  path="/api/v1/post/{postId}",
     *  operationId="deletePost",
     *  tags={"Post"},
     *  summary="Delete post",
     *  description="Delete any post you want",
     *  @OA\Parameter(
     *      name="postId",
     *      description="Post id",
     *      required=true,
     *      in="path",
     *      @OA\Schema(type="integer")
     *  ),
     *  @OA\Response(
     *      response=204,
     *      description="Deleted post",
     *  ),
     *  @OA\Response(
     *      response=404,
     *      description="Not found post",
     *  )
     * )
     *
     * Remove the specified resource from storage.
     *
     * @param integer $idPost
     * @return \Illuminate\Http\Response
     */
    public function destroy($idPost)
    {
        return $this->postRepository->delete($idPost);
    }
}
