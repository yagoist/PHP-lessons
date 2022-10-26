 <?php

$pageHeader = 'Добро пожаловать';

$userName = null;

if (isset($_SESSION['userName'])) {
    $userName = $_SESSION['userName'];
} elseif (isset($_REQUEST['userName']) && !empty($_REQUEST['userName'])) {
    $userName = $_REQUEST['userName'];
    $_SESSION['userName'] = $userName;
}

require_once 'view/home.php';