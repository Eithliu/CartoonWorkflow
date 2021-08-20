<?php

namespace App\Models;

use App\Models\CoreModel;
use App\Utils\Database;
use PDO;

class Plan extends CoreModel
{
    private $duree;
    private $numero;
    private $image_number;
    private $description;
    private $project_id;
    private $nombredeplans;

    public static function findEverything($id)
    {
        $sql= 'SELECT * FROM `plan`
        INNER JOIN `project` ON `project`.`id` = `plan`.`project_id`
        WHERE `project`.`id` = :id
        ';

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->prepare($sql);
        $request = $pdoStatement->execute([
            ':id' => $id
        ]);
        
        return $pdoStatement->fetchObject(Plan::class);
    }

    public static function findAll()
    {
        $sql= 'SELECT * FROM `project`
        INNER JOIN `plan` ON `project`.`id` = `plan`.`project_id`
        ';

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->prepare($sql);
        $request = $pdoStatement->execute();
        
        return $pdoStatement->fetchAll(PDO::FETCH_CLASS, Plan::class);
    }

    public static function find($id)
    {
        $pdo = Database::getPDO();

        $sql='SELECT *, `plan`.`id` as `planId` 
        FROM `project`
        INNER JOIN `plan`
        ON `project`.`id` = `plan`.`project_id`
        WHERE `plan`.`id` = :id';

        $pdoStatement = $pdo->prepare($sql);
        $result = $pdoStatement->execute([
            ':id' => $id
        ]);

        return $result->fetchObject(Plan::class);
    }

    public function insert()
    {

    }

    public function update()
    {

    }

    /**
     * Get the value of duree
     */ 
    public function getDuree(): int
    {
        return $this->duree;
    }

    /**
     * Set the value of duree
     *
     * @return  self
     */ 
    public function setDuree(int $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get the value of numero
     */ 
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     *
     * @return  self
     */ 
    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of image_number
     */ 
    public function getImage_number(): int
    {
        return $this->image_number;
    }

    /**
     * Set the value of image_number
     *
     * @return  self
     */ 
    public function setImage_number(int $image_number): self
    {
        $this->image_number = $image_number;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription(?string $description): ?self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of project_id
     */ 
    public function getProject_id(): int
    {
        return $this->project_id;
    }

    /**
     * Set the value of project_id
     *
     * @return  self
     */ 
    public function setProject_id(int $project_id): self
    {
        $this->project_id = $project_id;

        return $this;
    }

    /**
     * Get the value of nombredeplans
     */ 
    public function getNombredeplans()
    {
        return $this->nombredeplans;
    }

    /**
     * Set the value of nombredeplans
     *
     * @return  self
     */ 
    public function setNombredeplans($nombredeplans)
    {
        $this->nombredeplans = $nombredeplans;

        return $this;
    }
}