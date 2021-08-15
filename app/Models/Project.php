<?php

namespace App\Models;

use App\Utils\Database;
use PDO;

class Project extends CoreModel
{
    private $name;

    /**
     * Get the value of name
     */ 
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public static function findAll()
    {
        $sql= 'SELECT * FROM `project`';

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        
        return $pdoStatement->fetchAll(PDO::FETCH_CLASS, Project::class);

    }
}