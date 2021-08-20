<?php

namespace App\Models;

use App\Utils\Database;
use PDO;

class Project extends CoreModel
{
    private $name;
    private $description;

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

    public static function find($id)
    {
        $pdo = Database::getPDO();


        $sql = 'SELECT * FROM `project` WHERE `id` = :id';

        $pdoStatement = $pdo->prepare($sql);
        $request = $pdoStatement->execute([
            ':id' => $id
        ]);



        return $request->fetchObject('App\Models\Project');
    }

    public static function findAll()
    {
        global $router;
        $sql= 'SELECT * FROM `project`';

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        
        return $pdoStatement->fetchAll(PDO::FETCH_CLASS, Project::class);

    }

    public function update()
    {

    }

    public function insert()
    {
        $pdo = Database::getPDO();

        $sql = 'INSERT INTO `project` (`name`, `description`)
        VALUES (
            :name,
            :description
        )';

        $request = $pdo->prepare($sql);
                
        $insertedRows = $request->execute([
            ':name' => $this->getName(),
            ':description' => $this->getDescription()

        ]);

        if ($insertedRows > 0) {
            $this->id = $pdo->lastInsertId();
            return true;
        }
        
        return false;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}