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

    public function planDisplayForm($id)
    {

        $project = Project::find($id);
        $projects = Project::findAll();


        $this->show('plans-add', [
            'project' => $project,
            'projects' => $projects
        ]);

    }

    public function planActionForm($id)
    {
        $projectChosen = $id['id'];
        $newDuree = filter_input(INPUT_POST, "duree", FILTER_SANITIZE_STRING);
        $newImage_number = filter_input(INPUT_POST, "image_number", FILTER_SANITIZE_STRING);;
        $newNumero = $newImage_number;
        $newDescription = filter_input(INPUT_POST, "description", FILTER_SANITIZE_STRING);
        
        $plansToSend = [
            'duree' => intval($newDuree),
            'numero' => intval($newImage_number),
            'image_number' => intval($newImage_number),
            'description' => $newDescription,
            'project_id' => intval($projectChosen)
        ];
        

        foreach ($plansToSend as $newPlan) {

            $newPlan = new Plan();
            $newPlan->setDuree($plansToSend['duree']);
            $newPlan->setNumero($plansToSend['numero']);
            $newPlan->setImage_number($plansToSend['numero']);
            $newPlan->setDescription($plansToSend['description']);
            $newPlan->setProject_id($plansToSend['project_id']);
        
        }
        
        $newPlan->insert();

        $this->show('plan-list', ['id' => $id]);

    }



}