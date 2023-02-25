<?php

namespace App\Controller;

use App\Entity\Movie;
use App\Repository\MovieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{

    private $em;
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    #[Route('/movies', name: 'movies')]
    public function index(): Response
    {
        //findAll() - SELECT * FROM TABLENAME;
        //find() - SELECT * FROM TABLENAME WHERE CONDITIONS;
        //findBy - SELECT * FROM TABLENAME ORDER BY ASC/DESC;
        //findOneBy - SELECT * FROM TABLENAME WHERE CONDITIONS ORDER BY ASC/DESC;
        //count() - SELECT COUNT() FROM TABLENAME WHERE CONDITIONS;

        $repository = $this->em->getRepository(Movie::class);

        $movies = $repository->getClassName();

        dd($movies);
        return $this->render('index.html.twig');
    }

}
