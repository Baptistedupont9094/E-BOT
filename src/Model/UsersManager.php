<?php

namespace App\Model;

use PDO;

class UsersManager extends AbstractManager
{
    public const TABLE = 'users';

    public function selectOneByName(string $name): array
    {
        $statement = $this->pdo->prepare("SELECT * FROM " . static::TABLE . " WHERE name = :name");
        $statement->bindValue(":name", $name, PDO::PARAM_STR);
        $statement->execute();

        return $statement->fetch();
    }
}
