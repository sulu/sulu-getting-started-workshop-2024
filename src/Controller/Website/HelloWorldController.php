<?php

declare(strict_types=1);

namespace App\Controller\Website;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HelloWorldController extends AbstractController
{
    #[Route('/hello-world')]
    public function helloWorld()
    {
        return $this->render('hello-world.html.twig');
    }
}
