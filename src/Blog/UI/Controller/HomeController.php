<?php

namespace App\Blog\UI\Controller;

use App\Blog\Application\Command\CreatePostCommand;
use App\Blog\Infrastructure\Controller\ControllerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;

class HomeController implements ControllerInterface
{
    public function __construct(
        private readonly MessageBusInterface $bus
    )
    {
    }

    #[Route('//')]
    public function homepageAction(): Response
    {

        return new JsonResponse('homepage');
    }
}