<?php

namespace App\Controller;

use App\Model\MovieManager;
use App\Service\AuthService;

class ExplorerController extends AbstractController
{
    public function __construct()
    {
        parent::__construct();
        (new AuthService())->checkSession();
    }

    public function index(): string
    {
        $movieManager = new MovieManager();
        $movies = $movieManager->selectAll();
        $moviesCarousel = $movieManager->getThreeRandom();

        return $this->twig->render('Explorer/index.html.twig', [
            'movies' => $movies,
            'moviesCarousel' => $moviesCarousel
        ]);
    }
}
