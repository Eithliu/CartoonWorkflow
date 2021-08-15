<?php

namespace App\Models;


class CoreModel
{
    protected $id;

    /**
     * Get the value of id
     */ 
    public function getId(): int
    {
        return $this->id;
    }
}