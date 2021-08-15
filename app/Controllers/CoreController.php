<?php

namespace App\Controllers;

class CoreController
{
    protected function show($viewName, $viewData = [])
    {
        require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
    }
}