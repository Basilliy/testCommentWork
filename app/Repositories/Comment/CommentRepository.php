<?php

namespace App\Repositories\Comment;

use App\Http\Requests\Comment\CommentAllInterface;
use App\Http\Requests\Comment\CommentCreateInterface;
use App\Http\Requests\Comment\CommentDeleteInterface;
use App\Http\Requests\Comment\CommentInfoInterface;
use App\Http\Requests\Comment\CommentUpdateInterface;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CommentRepository implements CommentInterface
{
    protected Comment $model;

    public function __construct(Comment $item)
    {
        $this->model = $item;
    }

    /**
     * creates a new comment with the given data
     *
     * @param CommentCreateInterface $data
     * @return bool
     */
    public function saveItem(CommentCreateInterface $data): bool
    {
        try {
            $this->model->create([
                'title'     => $data->getTitleValue(),
                'content'   => $data->getContentValue(),
                'is_active' => $data->getIsActiveValue(),
                'event_id'  => $data->getEventIdValue(),
            ]);

            return true;
        } catch (\Exception $exception) {
            return false;
        }
    }

    public function getItem(CommentInfoInterface $data): Model
    {
        return $this->model->find($data->getCommentId());
    }

    public function getCommentList(CommentAllInterface $data): Collection
    {
        return $this->model->all();
    }

    public function updateItem(CommentUpdateInterface $data): bool
    {
        return $this->model->where('id', $data->getCommentId())->update([
            "is_active" => ( $this->model->find($data->getCommentId())->is_active ? false : true )
        ]);
    }

    public function deleteItem(CommentDeleteInterface $data): bool
    {
        return $this->model->where('id', $data->getCommentId())->delete();
    }
}