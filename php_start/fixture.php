<?php
require_once 'model/UserProvider.php';
$pdo = require_once 'dp.php';

$pdo->exec(
    'CREATE TABLE users (
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    name TEXT,
    userName TEXT NOT NULL,
    password TEXT NOT NULL 
)'
);

$pdo->exec(
  'CREATE TABLE tasks (
    id INTEGER NOT NULL PRIMARY KEY AUTOONCREMENT,
    description TEXT NOT NULL,
    isDone BOOL NOT NULL DEFAULT false
)'
);

$user = new User('Dmirtrii', 'Dmitrii Yagodin');
$userProvider = new UserProvider($pdo);
$userProvider->registerUser($user, '00000');
