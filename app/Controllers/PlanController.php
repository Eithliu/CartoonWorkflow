<?php

namespace App\Controllers;

use App\Models\Plan;

class PlanController extends CoreController
{
    public function planList()
    {
        $allPlans = Plan::findAll();

        $this->show('plan-list', [
            'allPlans' => $allPlans
        ]);
    }

    public function planById($id)
    {
        $planInfos = Plan::find($id);

        $this->show('plan-planById', [
            'planInfos' => $planInfos
        ]);
    }
}