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
