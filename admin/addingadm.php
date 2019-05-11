<?php
session_start();
$login = $_POST['login'];
$password = $_POST['password'];
$link = mysqli_connect($_SESSION['host'], $_SESSION['login'], $_SESSION['password'], $_SESSION['database']);
if (!$link) {
    echo "Ошибка подключения к БД. Код ошибки: " . mysqli_connect_error();
    //echo "Сейчас вы будете перенаправлены на главную страницу!";
    //sleep(5);
    //include("C:\OpenServer 5.3.0\OSPanel\domains\diploma\index.php");
} else {
    $sql = "CREATE USER \'" . $login . "\'@\'%\' IDENTIFIED BY '" . $password . "'GRANT ALL PRIVILEGES ON *.* TO \'" . $login . "\'@\'%\' REQUIRE NONE WITH GRANT OPTION MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0";
    //$query =
    //    "CREATE USER `".$login."`@'%' IDENTIFIED BY '".$password."';
    //    GRANT ALL PRIVILEGES ON furniture.* TO '".$login."'@'%';"
    //;
    mysqli_query($link, $sql);
    //echo "Добавление прошло успешно";
    //header('Location: http://'.$_SERVER['HTTP_HOST']."/admin/admin.php");

}