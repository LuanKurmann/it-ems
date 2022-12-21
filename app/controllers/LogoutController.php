<?php

namespace App\Controllers;

use Symfony\Component\Routing\RouteCollection;

class LogoutController
{
    public function indexAction(RouteCollection $routes)
    {
        session_start();
        session_destroy();
        header('Refresh: 6; URL=' . URL_SUBFOLDER);
        require_once APP_ROOT . '/views/logout.php';
    }
}