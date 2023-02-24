<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
    #[Route('/movies', name: 'movies')]
    public function index(): Response
    {
        $movies = ["Avengers", "ABC", "Rock", "paper"];
        return $this->render('movies/index.html.twig', array(
            'movies' => $movies
        ));
    }
}
