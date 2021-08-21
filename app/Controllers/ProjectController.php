<?php

namespace App\Controllers;

use App\Models\Project;
use App\Models\Plan;



class ProjectController extends CoreController
{
    public function projectDisplayForm()
    {
        $this->show('project-add');
    }

    public function projectActionForm()
    {
        $newName = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
        $newSubtitle = filter_input(INPUT_POST, "subtitle", FILTER_SANITIZE_STRING);
        $newNbreDePlans = filter_input(INPUT_POST, "nbredeplans", FILTER_SANITIZE_STRING);

        $newProject = new Project();
        $newProject->setName($newName);
        $newProject->setSubtitle($newSubtitle);
        $newProject->setNbredeplans($newNbreDePlans);


        $newProject->save();
        
        $lastProjectId = $newProject->getId();
        // Je veux récupérer mon Project_id pour pouvoir
        // l'injecter dans la table Plan, en même temps
        // que je créé des nouveaux plans.
        


        $this->show('plans-add', [
            'id' => $$lastProjectId,
            'newProject' => $newProject
        ]);

    }

}