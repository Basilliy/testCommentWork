<?php

namespace App\Repositories\Comment;

use App\Http\Requests\Comment\CommentAllInterface;
use App\Http\Requests\Comment\CommentCreateInterface;
use App\Http\Requests\Comment\CommentDeleteInterface;
use App\Http\Requests\Comment\CommentInfoInterface;
use App\Http\Requests\Comment\CommentUpdateInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface CommentInterface
{
    public function saveItem(CommentCreateInterface $data): bool;

    public function getItem(CommentInfoInterface $data): Model;

    public function getCommentList(CommentAllInterface $data): Collection;

    public function updateItem(CommentUpdateInterface $data): bool;

    public function deleteItem(CommentDeleteInterface $data): bool;
}