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

        $newProject = new Project();
        $newProject->setName($newName);

        $newProject->save();
        
        $lastProjectId = $newProject->getId();
        $newPlans = new Plan();
        $newPlans->setProject_id($lastProjectId);
        
        $newPlans->save();
        global $router;
        header('location: ' . $router->generate('plan-planDisplayForm'));
        exit();
        
        
    }

}