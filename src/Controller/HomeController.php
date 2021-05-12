<?php

namespace App\Controller;

use App\Model\UsersManager;

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
                $name = $_POST['name'];
                $userManager = new UsersManager();
                $user = $userManager->selectOneByName($name);

                if (!empty($user) && $name === $user['name']) {
                    $_SESSION['user'] = $user;
                    header('Location: /explorer');
                } else {
                    $error = "Ce rover n'est pas encore sur Mars";
                }
            }
        }

        return $this->twig->render('Home/index.html.twig', [
            'error' => $error,
        ]);
    }
}
