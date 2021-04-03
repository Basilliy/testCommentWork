<?php

namespace App\Http\Requests\Comment;

interface CommentCreateInterface
{
    public function getTitleValue(): string;

    public function getContentValue(): string;

    public function getIsActiveValue(): bool;

    public function getEventIdValue(): int;
}