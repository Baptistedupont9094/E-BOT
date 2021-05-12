<?php

namespace App\Controller;

use App\Model\UsersManager;
use Exception;

class HomeController extends AbstractController
{
    /**
     * Display home page
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function index()
    {
        $error = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!empty($_POST)) {
                if (!empty($_POST['name'])) {
                    $name = $_POST['name'];
                    $userManager = new UsersManager();
                    try {
                        $user = $userManager->selectOneByName($name);
                    } catch (Exception $e) {
                        $error = $e->getMessage();
                        $user = [];
                    }
                    if (!empty($user) && $name === $user['name']) {
                        $_SESSION['user'] = $user;
                        header('Location: /explorer');
                    }
                } else {
                    $error = "Please enter a correct rover name";
                }
            }
        }

        return $this->twig->render('Home/index.html.twig', [
            'error' => $error,
        ]);
    }
}
