<?php

session_start();

$controller = $_GET['controller'] ?? 'home';
$routes = require 'route/routes.php';

require_once $routes[$controller];