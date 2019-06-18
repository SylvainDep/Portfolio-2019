<?php

namespace App\config;

require 'controller/home.php';

use Controller\Home;

class Router
{

    public function start()
    {
      new Home();
    }
}
