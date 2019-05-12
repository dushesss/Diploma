<?php
session_start();
$link = mysqli_connect($_SESSION['host'], $_SESSION['login'], $_SESSION['password'], $_SESSION['database']);
if (!$link) {
    echo "Ошибка подключения к БД. Код ошибки: " . mysqli_connect_error();
    //echo "Сейчас вы будете перенаправлены на главную страницу!";
    //sleep(5);
    //include("C:\OpenServer 5.3.0\OSPanel\domains\diploma\index.php");
} else {
    //$query =

    //;
    // mysqli_query($link, $query) or die ('Запрос обработать невозможно!'.mysqli_error($link));
}