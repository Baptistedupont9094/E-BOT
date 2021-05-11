<?php

namespace App\Controller;

class AccountController extends AbstractController
{
    /**
     * Page index
     */
    public function index(): string
    {
        return $this->twig->render('Account/index.html.twig');
    }
}
