<?php

namespace App\Controllers;

use App\Models\Project;

class MainController extends CoreController
{
    function home()
    {
      
        $allProjects = Project::findAll();
        

        $this->show('home', ['allProjects' => $allProjects]);
    }
}




