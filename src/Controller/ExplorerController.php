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

    public function index()
    {
        $movieManager = new MovieManager();
        $movies = $movieManager->selectAll();
        $moviesCarousel = $movieManager->getThreeRandom();

        if ((new AuthService())->isLogged()) {
            $sessionName = $_SESSION['user']['name'];
        } else {
            $sessionName = "";
        }

        return $this->twig->render('Explorer/index.html.twig', [
            'movies' => $movies,
            'moviesCarousel' => $moviesCarousel,
            "sessionName" => $sessionName
        ]);
    }

    public function search()
    {
        $results = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!empty($_POST)) {
                $search = $_POST['searchbar'];
                $movieManager = new MovieManager();
                $results = $movieManager->search($search);
            }
        }

        if ((new AuthService())->isLogged()) {
            $sessionName = $_SESSION['user']['name'];
        } else {
            $sessionName = "";
        }

        return $this->twig->render('Explorer/search.html.twig', [
            'results' => $results,
            "sessionName" => $sessionName
        ]);
    }
}
