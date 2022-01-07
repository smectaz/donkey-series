<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProgramController extends AbstractController
{
    #[Route(
        '/program/{page}',
        methods:['GET'],
        requirements:['page' => '\d+'],
        name: 'program'
        )]

    public function show(int $page): Response
    {
        return $this->render('program/show.html.twig', [
            'page' => $page,
        ]);
    }
}
