<?php

namespace App\Controllers;

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

    public static function findAll()
    {
        $sql= 'SELECT * FROM `project`
        INNER JOIN `plan` ON `project`.`id` = `plan`.`project_id`
        ';

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        
        return $pdoStatement->fetchAll(PDO::FETCH_CLASS, Plan::class);
    }

    public static function find($id)
    {
        $sql='SELECT *, `plan`.`id` as `planId` FROM `project`
        INNER JOIN `plan` ON `project`.`id` = `plan`.`project_id`
        WHERE `plan`.`id` =' . $id;

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);

        return $pdoStatement->fetchObject(Plan::class);
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
    public function getNumero(): int
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
}