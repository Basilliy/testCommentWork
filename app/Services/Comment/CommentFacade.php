<?php

namespace App\Services\Comment;

use App\Http\Requests\Comment\CommentAllInterface;
use App\Http\Requests\Comment\CommentCreateInterface;
use App\Http\Requests\Comment\CommentDeleteInterface;
use App\Http\Requests\Comment\CommentInfoInterface;
use App\Http\Requests\Comment\CommentUpdateInterface;
use Illuminate\Support\Facades\Facade;

/**
 * App\Models\BalanceUsed
 *
 * @method static save(CommentCreateInterface $data)
 * @method static itemInfo(CommentInfoInterface $data)
 * @method static allItems(CommentAllInterface $data)
 * @method static updateItem(CommentUpdateInterface $data)
 * @method static deleteItem(CommentDeleteInterface $data)
 */
class CommentFacade extends Facade
{
    protected static function getFacadeAccessor() { return 'commentService'; }
}
