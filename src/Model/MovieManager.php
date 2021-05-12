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
    
    public function search(string $item): array
    {
        $query = '
        SELECT t.*, name FROM ' . static::TABLE . ' t 
        WHERE t.name LIKE "%' . $item . '%"
        ';

        return $this->pdo->query($query)->fetchAll(\PDO::FETCH_ASSOC);
    }
}
