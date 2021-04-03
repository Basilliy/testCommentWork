<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Comment\CommentAllRequest;
use App\Http\Requests\Comment\CommentCreateRequest;
use App\Http\Requests\Comment\CommentDeleteRequest;
use App\Http\Requests\Comment\CommentInfoRequest;
use App\Http\Requests\Comment\CommentUpdateRequest;
use App\Services\Comment\CommentFacade;
use Illuminate\Http\JsonResponse;

class CommentsController extends BaseController
{
    public function addComment(CommentCreateRequest $request): JsonResponse
    {
        return $this->success(['status' =>  CommentFacade::save($request)]);
    }

    public function deleteComment(CommentDeleteRequest $request): JsonResponse
    {
        return $this->success(['status' => CommentFacade::deleteItem($request)]);
    }

    public function updateComment(CommentUpdateRequest $request): JsonResponse
    {
        return $this->success(['status' => CommentFacade::updateItem($request)]);
    }

    public function getComment(CommentInfoRequest $request): JsonResponse
    {
        return $this->success(CommentFacade::itemInfo($request));
    }

    public function getAll(CommentAllRequest $request): JsonResponse
    {
        return$this->success(CommentFacade::allItems($request));
    }
}
