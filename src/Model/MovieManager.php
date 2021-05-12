<?php

namespace App\Model;

class MovieManager extends AbstractManager
{
    public const TABLE = 'movie';

    public function getThreeRandom()
    {
        $query = "SELECT * FROM " . static::TABLE . " ORDER BY RAND() LIMIT 3";

        return $this->pdo->query($query)->fetchAll();
    }
}
