<?php

namespace App\Blog\Application\Handler;

use App\Blog\Application\Command\CreatePostCommand;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
class CreatePostHandler
{
    public function __invoke(CreatePostCommand $command)
    {
        var_dump('create post');
    }
}