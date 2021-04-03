<?php

namespace App\Http\Requests\Comment;

use App\Http\Requests\BaseRequest;

/**
 * App\Http\Requests\Comment\CommentCreateRequest
 *
 * @property string $title
 * @property string $text
 * @property bool $is_active
 * @property int $event_id
 */
class CommentCreateRequest extends BaseRequest implements CommentCreateInterface
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'title'     => 'required|string',
            'text'      => 'required|string',
            'is_active' => 'required|boolean',
            'event_id'  => 'required|numeric|exists:events,id',
        ];
    }

    public function getTitleValue(): string
    {
        return $this->title;
    }

    public function getContentValue(): string
    {
        return $this->text;
    }

    public function getIsActiveValue(): bool
    {
        return $this->is_active;
    }

    public function getEventIdValue(): int
    {
        return $this->event_id;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return parent::toArray();
    }
}
