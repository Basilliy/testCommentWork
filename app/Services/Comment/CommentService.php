<?php

namespace App\Services\Comment;

use App\Http\Requests\Comment\CommentAllInterface;
use App\Http\Requests\Comment\CommentCreateInterface;
use App\Http\Requests\Comment\CommentDeleteInterface;
use App\Http\Requests\Comment\CommentInfoInterface;
use App\Http\Requests\Comment\CommentUpdateInterface;
use App\Repositories\Comment\CommentInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class CommentService
{
    protected CommentInterface $commentRepo;

    public function __construct(CommentInterface $commentRepo)
    {
        $this->commentRepo = $commentRepo;
    }

    /**
     * creates a item with the given data
     *
     * @param CommentCreateInterface $data
     * @return bool
     */
    public function save(CommentCreateInterface $data): bool
    {
        return $this->commentRepo->saveItem($data);
    }

    /**
     * @param CommentInfoInterface $data
     * @return Model
     */
    public function itemInfo(CommentInfoInterface $data): Model
    {
        return $this->commentRepo->getItem($data);
    }

    public function allItems(CommentAllInterface $data): Collection
    {
        return $this->commentRepo->getCommentList($data);
    }

    public function updateItem(CommentUpdateInterface $data): bool
    {
        return $this->commentRepo->updateItem($data);
    }

    public function deleteItem(CommentDeleteInterface $data): bool
    {
        return $this->commentRepo->deleteItem($data);
    }
}