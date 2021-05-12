<?php

namespace App\Controller;

use App\Service\AuthService;
use App\Model\MovieManager;

class ExplorerController extends AbstractController
{
    public function __construct()
    {
        parent::__construct();
        (new AuthService())->checkSession();
    }

    public function index()
    {
        return $this->twig->render('Explorer/index.html.twig');
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

        return $this->twig->render('Explorer/search.html.twig', [
            'results' => $results
        ]);
    }
}
