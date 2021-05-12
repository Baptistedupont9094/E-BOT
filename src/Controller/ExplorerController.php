<?php

namespace App\Controller;

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
        return $this->twig->render('Explorer/index.html.twig');
    }
}
