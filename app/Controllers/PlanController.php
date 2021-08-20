<?php

namespace App\Controllers;

use App\Models\Plan;
use App\Models\Project;

class PlanController extends CoreController
{
    public function planList($id)
    {
        // J'ai besoin de récupérer l'id dernier projet créé
        // pour ensuite l'utiliser dans l'argument de mon findAll
        // et ainsi .. rien du tout, parce que j'ai besoin du nom du projet
        $allPlans = Plan::findEverything($id);

        $this->show('plan-list', [
            'allPlans' => $allPlans
        ]);
    }

    public function planById($id)
    {
        $planInfos = Plan::find($id);

        $this->show('plan-detail', [
            'planInfos' => $planInfos
        ]);
    }

    public function planDisplayForm()
    {
        $plansInfos = Plan::findAll();

        $this->show('plans-add', [
            'planInfos' => $plansInfos
        ]);

    }
}