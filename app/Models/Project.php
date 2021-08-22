<?php

namespace App\Models;

use App\Utils\Database;
use PDO;

class Project extends CoreModel
{
    private $name;
    private $subtitle;
    private $nbredeplans;

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

    public static function findEverything($id)
    {
        $sql= 'SELECT * FROM `project`
        INNER JOIN `plan` ON `project`.`id` = `plan`.`project_id`
        WHERE `project`.`id`=' . $id['id'];
        
        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        return $pdoStatement->fetchAll(PDO::FETCH_CLASS, Project::class);
    }


    public static function find($id)
    {
        $pdo = Database::getPDO();

        $sql = 'SELECT * FROM `project` WHERE `id` =' . $id['id'];

        $pdoStatement = $pdo->query($sql);




        return $pdoStatement->fetchObject('App\Models\Project');
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

        $sql = 'INSERT INTO `project` (`name`, `subtitle`, `nbredeplans`)
        VALUES (
            :name,
            :subtitle,
            :nbredeplans
        )';

        $request = $pdo->prepare($sql);
                
        $insertedRows = $request->execute([
            ':name' => $this->getName(),
            ':subtitle' => $this->getSubtitle(),
            ':nbredeplans' => $this->getNbredeplans()

        ]);

        if ($insertedRows > 0) {
            $this->id = $pdo->lastInsertId();
            return true;
        }
        
        return false;
    }

    /**
     * Get the value of subtitle
     */ 
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * Set the value of subtitle
     *
     * @return  self
     */ 
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;

        return $this;
    }

    /**
     * Get the value of nbredeplans
     */ 
    public function getNbredeplans()
    {
        return $this->nbredeplans;
    }

    /**
     * Set the value of nbredeplans
     *
     * @return  self
     */ 
    public function setNbredeplans($nbredeplans)
    {
        $this->nbredeplans = $nbredeplans;

        return $this;
    }
}