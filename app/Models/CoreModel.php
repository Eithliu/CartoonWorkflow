<?php

namespace App\Models;


abstract class CoreModel
{
    protected $id;

    /**
     * Get the value of id
     */ 
    public function getId(): ?int
    {
        return $this->id;
    }

    protected abstract function insert();
    protected abstract function update();


    public function save()
    {
        if(null !== $this->getId() && $this->getId() > 0) {

            $this->update();

        } else {

            $this->insert();
        }

    }
}