<?php

namespace App\Controllers;

use App\Models\Plan;
use App\Models\Project;

class PlanController extends CoreController
{
    public function planList($id)
    {
        $project = Project::find($id);
        $allPlans = Plan::findEverything($id);

        
        $this->show('plan-list', [
            'allPlans' => $allPlans,
            'project' => $project
        ]);
    }
    
    public function planById($id)
    {
        $planInfos = Plan::find($id);
        $projects = Project::findAll();
        
        
        // ça affiche le bon nom de projet quand on 
        // affiche la liste de plans.
        // Mais, dans la page de détails d'un plan
        // ça utilise l'id du plan pour aller chercher l'id
        // du projet, du coup, ça renvoie pas au bon endroit.
        
        $planProjectId = $planInfos->getProject_id();
        
        foreach ($projects as $project) {
                $projectId = $project->getId();
            
                if ($projectId === $planProjectId) {
                       $project;
                    }
                
                }
                
        $project = Project::find($id);

        $this->show('plan-detail', [
            'planInfos' => $planInfos,
            'project' => $project,
        ]);
    }

    public function planDisplayForm()
    {
        $plansInfos = Plan::findAll();

        $this->show('plans-add', [
            'planInfos' => $plansInfos
        ]);

    }

    public function planActionForm($lastProjectId)
    {

        $newDuree = filter_input(INPUT_POST, "duree", FILTER_SANITIZE_STRING);
        $newNumero = filter_input(INPUT_POST, "numero", FILTER_SANITIZE_STRING);
        $newImage_number = filter_input(INPUT_POST, "image_number", FILTER_SANITIZE_STRING);
        $newDescription = filter_input(INPUT_POST, "description", FILTER_SANITIZE_STRING);
        $newProject_id = $lastProjectId;

        $plansToSend = [
            'duree' => $newDuree,
            'numero' => $newNumero,
            'imagenbre' => $newImage_number,
            'description' => $newDescription,
            'project_id' => $newProject_id
        ];


        foreach ($plansToSend as $newPlan) {

            $newPlan = new Plan();
            $newPlan->setDuree($newDuree);
            $newPlan->setNumero($newNumero);
            $newPlan->setImage_number($newImage_number);
            $newPlan->setDescription($newDescription);
            $newPlan->setProject_id($newProject_id);
        
            $newPlan->insert();
        }



        

    }

    public function planDisplayFormAll($projectId)
    {
        $projectInfos = Project::find($projectId);

        $this->show('plans-add', [
            "projectInfos" => $projectInfos
        ]);
    }


}