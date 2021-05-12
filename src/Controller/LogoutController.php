<?php



namespace App\Controller;

class LogoutController extends AbstractController
{

    public function index()
    {
        // On supprime la session
        session_destroy();
        // On redirige vers la racine du site
        header('Location: /');
    }
}