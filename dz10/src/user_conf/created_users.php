<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Created User</title>
</head>
<body>
<form method="post">
    <h2> <a href="../index.php">Главная</a> </h2>
    Введите данные пользователя для регистрации <br>
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
    <button type="submit" class="btn btn-primary">Зарегистрировать</button>
</form>
</body>
</html>
<?php
require_once '../vendor/autoload.php';
require_once '../db.config.php';
$password = $_POST['password'];
    class User extends \Illuminate\Database\Eloquent\Model{}
    $new_user = new User();
    $new_user->first_name = $_POST['first_name'];
    $new_user->last_name = $_POST['last_name'];
    $new_user->email = $_POST['email'];
    $new_user->password = password_hash("$password", PASSWORD_ARGON2I);
    $new_user->created_at = date('Y-m-d h:i:s');
    $new_user->save();
    ?>

