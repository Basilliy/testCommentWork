<?php

namespace App\Http\Requests\Comment;

use App\Http\Requests\BaseRequest;

/**
 * App\Http\Requests\Comment\CommentInfoRequest
 *
 * @property int $comment_id
 */
class CommentInfoRequest extends BaseRequest implements CommentInfoInterface
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

    public function validationData(): array
    {

        $this->merge([
            'comment_id' => $this->route('comment')
        ]);

        return $this->all();
    }

    public function getCommentId(): int
    {
        return $this->comment_id;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return parent::toArray();
    }
}
