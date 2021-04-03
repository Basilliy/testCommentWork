<?php

namespace App\Http\Requests\Comment;

use App\Http\Requests\BaseRequest;

class CommentAllRequest extends BaseRequest implements CommentAllInterface
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            //
        ];
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return parent::toArray();
    }
}
