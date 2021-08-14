<?php

namespace App\Controllers;

class CoreController
{
    protected function show($viewName, $viewData = [])
    {
        var_dump(__DIR__);
        require_once __DIR__ . "\\..\\views\\main\" . $viewName . ".tpl.php";
    }
}