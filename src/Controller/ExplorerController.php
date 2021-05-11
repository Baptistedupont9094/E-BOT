<?php

namespace App\Controller;

class ExplorerController extends AbstractController
{
    /**
     * List items
     */
    public function index(): string
    {
        return $this->twig->render('Explorer/index.html.twig');
    }
}
