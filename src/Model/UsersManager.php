<?php

namespace App\Model;

use Exception;
use PDO;

class UsersManager extends AbstractManager
{
    public const TABLE = 'users';

    public function selectOneByName(string $name): array
    {
        $statement = $this->pdo->prepare("SELECT * FROM " . static::TABLE . " WHERE name = :name");
        $statement->bindValue(":name", $name, PDO::PARAM_STR);
        $statement->execute();
        $result = $statement->fetch();
        
        if ($result) {
            return $result; 
        } else {
            throw new Exception("Ce rover n'est pas encore sur Mars");
        }
    }
}
