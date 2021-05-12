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

        if ((new AuthService())->isLogged()) {
            $session = $_SESSION['user'];
            $sessionName = $_SESSION['user']['name'];
        } else {
            $sessionName = "";
            $session = [];
        }

        return $this->twig->render('Account/index.html.twig', [
            'session' => $session,
            'users' => $users,
            'sessionName' => $sessionName
        ]);
    }
}
