<?php

$pageHeader = 'Добро пожаловать';

if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    setcookie('userName', null, -1);
    unset($_COOKIE['userName']);
}

$userName = null;

if (isset($_COOKIE['userName'])) {
    $userName = $_COOKIE['userName'];
} elseif (isset($_REQUEST['userName']) && !empty($_REQUEST['userName'])) {
    $userName = $_REQUEST['userName'];
    $expires = time() + 86400;
    setcookie('userName', $userName, $expires);
}



require_once 'view/home.php';