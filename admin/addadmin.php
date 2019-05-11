<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Добавление администратора</title>
</head>
<body>
<form action="addingadm.php" method="post">
    <fieldset>
        <legend>Добавление администратора</legend>
        <label for="login">Логин</label><input type="text" name="login" required/><br>
        <label for="password">Пароль</label><input type="password" name="password" required/><br>
        <input type="submit" value="Создать">
    </fieldset>
</form>
</body>
</html>
<?php
