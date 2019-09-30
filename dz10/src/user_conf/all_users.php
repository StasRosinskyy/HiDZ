<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All users</title>
</head>
<body>
<h2> <a href="../index.php">Главная</a> </h2>
</body>
</html>
<?php
require_once '../vendor/autoload.php';
require_once '../db.config.php';

    class User extends Illuminate\Database\Eloquent\Model {}
    $users = User::all();

    foreach ($users as $user){
        echo "First Name -".$user->first_name."<br>";
        echo "Last Name - ".$user->last_name."<br>";
        echo "Email - ".$user->email."<br>";
        echo "Created Time - ".$user->created_at."<br>";
        echo "Updated Time - ".$user->updated_at."<br>";
        echo "<hr>";
    }
