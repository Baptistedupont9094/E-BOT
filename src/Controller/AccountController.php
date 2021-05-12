<?php

namespace App\Controller;

use App\Model\UsersManager;
use App\Service\AuthService;

class AccountController extends AbstractController
{
    public function __construct()
    {
        parent::__construct();
        (new AuthService())->checkSession();
    }

    public function index(): string
    {
        $usersManager = new UsersManager();
        $users = $usersManager->selectAll();

        return $this->twig->render('Account/index.html.twig', [
            'session' => $_SESSION['user'],
            'users' => $users
        ]);
    }
}
