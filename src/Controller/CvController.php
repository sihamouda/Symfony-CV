<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CvController extends AbstractController
{
    #[Route(
        '/cv/{lastName}/{firstName}/{age}/{section}/{_locale?en}',
        name: 'app_cv',
        requirements: [
            '_locale' => 'en|fr',
            'age' => '\b([0-9]|[1-9][0-9])\b',
            'section' => 'rt|gl'
        ]
    )]
    public function index($lastName, $firstName, $age, $section): Response
    {
        return $this->render('cv/index.html.twig', [
            'lastName' => $lastName,
            'firstName' => $firstName,
            'age' => $age,
            'section' => $section,
        ]);
    }
}
