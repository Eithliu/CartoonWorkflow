<?php

namespace App\Controllers;

class CoreController
{
    protected function show($viewName, $viewData = [])
    {
        global $router;
        $absoluteUrl = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['BASE_URI'] . '/';

        require_once __DIR__ . '/../views/header.tpl.php';
        require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
    }

    //TODO concevoir la méthode __construct 

    public function __construct()
    {
        
    }
}