<?php

namespace App\UI\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController
{
    #[Route('//')]
    public function homepageAction(): Response
    {
        return new JsonResponse('homepage');
    }
}