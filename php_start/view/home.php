
<head>
    <meta charset = 'UTF-8'>
    <title>Главная</title>
</head>
<body>
    <h1><?=$pageHeader?></h1>
    <?php if ($userName) : ?>
    <p>Рады вас приветствовать, <?=$userName?></p>
    <a href="?action=logout">Exit</a>
    <?php else : ?>
    <form method="post">
        <input type="text" name="userName" placeholder="Введите ваше имя"/>
        <input type="submit" value="Отправить"/>
    </form>
    <?php endif ?>

</body>