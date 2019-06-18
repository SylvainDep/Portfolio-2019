<?php

session_start();

require 'router.php';

$router = new \App\config\Router();
$router->start();
