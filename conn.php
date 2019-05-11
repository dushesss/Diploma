<?php
session_start();

$host = 'diploma';
$_SESSION['host'] = $host;
$database = 'furniture';
$_SESSION['database'] = $database;

if (isset($_POST['login']) && isset($_POST['password'])) {
    $login = $_POST['login'];
    $_SESSION['login'] = $login;
    $password = $_POST['password'];
    $_SESSION['password'] = $password;
    $link = mysqli_connect($host, $login, $password, $database);
    if (!$link) {
        //echo "Ошибка подключения к БД. Код ошибки: " . mysqli_connect_error();
        //sleep(5);
        //echo "Сейчас вы будете перенаправлены на главную страницу!";
        //header('Location: http://'.$_SERVER['HTTP_HOST']."/index.php");
        //include("index.php");
    } else {
        header('Location: http://' . $_SERVER['HTTP_HOST'] . "/admin/admin.php");
        //include("admin/admin.php");
    }
}
