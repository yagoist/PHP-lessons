<?php

require_once 'model/UserProvider.php';

$pdo = require_once 'db.php';

$pdo = new PDO(
    'sqlite:database.db',
    null,
    null,
    [PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC]
);

$err = null;
if(isset($_POST['userName'], $_POST['password'], $_POST['name'])) {
    [
        'userName' => $userName,
        'password' => $password,
        'name' => $name
    ] = $_POST;
}

$userProvider = new UserProvider($pdo);

$user = $userProvider->registerUser(new User($userName, $name), $password);

if($user === null) {
    $err = 'Пользователь не найден';
    header('location: /?controller=security');
} else {
    $_SESSION['userName'] = $user->getUserName();
}

if (isset($_SESSION['userName'])) {
    header('location: /?controller=home');
} else {
    echo '<h1> Зарегистрируйтесь </h1>';
}

require_once 'view/registration.php';