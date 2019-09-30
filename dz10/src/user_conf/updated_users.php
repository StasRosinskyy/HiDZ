<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update User</title>
</head>
<body>
<form method="post">
    <h2> <a href="../index.php">Главная</a> </h2>
    Введите данные пользователя<br>
     Id пользователя: <br>
    <input type="text" name="id">
    <br>
    First Name: <br>
    <input type="text" name="first_name">
    <br>
    Last Name: <br>
    <input type="text" name="last_name">
    <br>
    Email: <br>
    <input type="email" name="email">
    <br>
    Password: <br>
    <input type="password" name="password">
    <br>
    <button type="submit" class="btn btn-primary">Update User</button>
</form>
</body>
</html>
<?php
require_once '../vendor/autoload.php';
require_once '../db.config.php';
    class User extends \Illuminate\Database\Eloquent\Model {}
$user_update = User::find($_POST['id']);
$user_update->first_name = $_POST['first_name'];
$user_update->last_name = $_POST['last_name'];
$user_update->email = $_POST['email'];
$user_update->password = password_hash("$password", PASSWORD_ARGON2I);
$user_update->updated_at = date('Y-m-d h:i:s');
$user_update->save();
?>