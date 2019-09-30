<?php
    require_once 'vendor/autoload.php';
    require_once 'db.config.php';
    ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная</title>
</head>
    <body>
    <ul>
        <li><a href="user_conf/all_users.php"> Вывести всех пользовалетелей </a></li>
    <li><a href="user_conf/created_users.php"> Создание и сохранение нового пользователя </a></li>
    <li><a href="user_conf/updated_users.php"> Редактирование пользователя </a></li>
    <li><a href="user_conf/deleted_users.php"> Удаление пользователя </a> </li>
    </ul>
</body>
</html>

