
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Deleted User</title>
</head>
<body>
<form method="post">
    <h2> <a href="../index.php">Главная</a> </h2>
    Введите ID пользователя которого надо удалить: <br>
    <input type="text" name="id_delete">
    <br>
    <button type="submit" class="btn btn-primary">Удалить</button>
</form>
</body>
</html>
<?php
require_once '../vendor/autoload.php';
require_once '../db.config.php';
class User extends \Illuminate\Database\Eloquent\Model{}
$user_deleted = user::find($_POST['id_delete']);
if($user_deleted!=null){
    $user_deleted -> delete();
    echo "Пользователь с ID = ".$_POST['id_delete']. " успешно удален!";
}
?>