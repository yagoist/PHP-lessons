<?php
require_once 'model/UserProvider.php';
$pdo = require_once ('db.php');

if (isset($_REQUEST['action']) && $_REQUEST['action'] === 'logout' ) {
    unset($_SESSION['userName']);
}

$error = null;
if (isset($_POST['userName'], $_POST['password'])) {
    ['userName' => $userName, 'password' => $password] = $_POST;

    $userProvider = new UserProvider($pdo);
    $user = $userProvider->getByUserNameAndPassword($userName, $password);

    if (!$user) {
        $error = 'Не найдено';
    } else {
        $_SESSION['user'] = $user;
    }
if (isset($_SESSION['user'])){
    header('location: /?controller=home');
}
}

require_once 'view/signin.php';