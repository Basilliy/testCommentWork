<?php

namespace App\Http\Requests\Comment;

use App\Http\Requests\BaseRequest;

/**
 * App\Http\Requests\Comment\CommentUpdateRequest
 *
 * @property int $comment_id
 */
class CommentUpdateRequest extends BaseRequest implements CommentUpdateInterface
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'comment_id' => 'required|numeric|exists:comments,id'
        ];
    }

    public function getCommentId(): int
    {
        return $this->comment_id;
    }
}
