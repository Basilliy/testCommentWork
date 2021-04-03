<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Http\Requests\Comment\CommentCreateRequest
 *
 * @property string $title
 * @property string $content
 * @property bool $is_active
 */
class Comment extends Model
{
    protected $table = 'comments';

    protected $fillable = [
        'title',
        'content',
        'is_active',
        'event_id'
    ];

    public $timestamps = false;
}
