<?php

namespace App\Controllers;

use App\Models\Project;


class ProjectController extends CoreController
{
    public function projectList()
    {
        $allProjects = Project::findAll();

        $this->show('projectList', ['allProjects' => $allProjects]);
    }

}