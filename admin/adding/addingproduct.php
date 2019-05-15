<?php
session_start();
$link = mysqli_connect($_SESSION['host'], $_SESSION['login'], $_SESSION['password'], $_SESSION['database']);
if (!$link) {
    echo "Ошибка подключения к БД. Код ошибки: " . mysqli_connect_error();
    //echo "Сейчас вы будете перенаправлены на главную страницу!";
    //sleep(5);
    //include("C:\OpenServer 5.3.0\OSPanel\domains\diploma\index.php");
} else {
    $name_product = $_POST['name_product'];
    $key_words = $_POST['key_words'];
    $size1 = $_POST['size1'];
    $size2 = $_POST['size2'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    //$query =

    //;
    // mysqli_query($link, $query) or die ('Запрос обработать невозможно!'.mysqli_error($link));
}