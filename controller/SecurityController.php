<?php
require_once 'model/UserProvider.php';

$error = null;
if (isset($_POST['userName'], $_POST['password'])) {
    ['userName' => $userName, 'password' => $password] = $_POST;

    $userProvider = new UserProvider();
    $user = $userProvider->getByUserNameAndPassword($userName, $password);

    if (!$user) {
        $error = 'Не найдено';
    } else {
        $_SESSION['user'] = $user;
    }
if (isset($_SESSION['user'])){
    header('location: /controller');
}
}

require_once 'view/signin.php';