<?php
session_start();
$link = mysqli_connect($_SESSION['host'], $_SESSION['login'], $_SESSION['password'], $_SESSION['database']);
if (!$link)
    echo "Ошибка подключения к БД. Код ошибки: " . mysqli_connect_error();
?>
<!doctype html>
<html lang="en">
<head>
    <script type='text/javascript'
            src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js?ver=1.4.2'></script>
    <script src="C:\OpenServer 5.3.0\OSPanel\domains\diploma\js\ajax.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Добавление продукта</title>
    <link rel="stylesheet" href="editor/jquery.cleditor.css"/>
    <script src="editor/jquery.cleditor.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#description").cleditor();
        });
    </script>
</head>
<body>
<form action="adding/addingproduct.php" method="post">

    <label for="name_product">Название продукта</label><input type="text" name="name_product" required/><br>
    <label for="key_words">Ключевые слова для поиска</label><input type="text" name="key_words"/><br>
    <label for="size1">Размеры 1</label><input type="text" name="size1"/><br>
    <label for="size2">Размеры 2</label><input type="text" name="size2"/><br>
    <label for="price">Цена</label><input type="text" name="price"/><br>
    <label for="desc">Описание</label><textarea name="desc" cols="71" rows="10" id="description"></textarea><br>
    <label for="section">Раздел</label><br>
    <?php
    $query = "SELECT * FROM section";//эта часть динамически выводит выпадающий список для разделов
    $result = mysqli_query($link, $query);
    $count_sect = 1;
    echo '<select name="section">';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '
                <option value="' . $count_sect . '">' . $row['name_section'] . '</option>
                ';
        $count_sect++;
    }
    echo '</select>';
    ?>
    <label for="category">Категория</label><br>
    <?php
    $query = "SELECT * FROM category";//эта часть динамически выводит чекбоксы для подкатегорий
    $result = mysqli_query($link, $query);
    $count_cat = 1;
    while ($row = mysqli_fetch_assoc($result)) {
        echo '
                <tr>
                    <td><input type=checkbox name=category[] value=$row id=' . $count_cat . '>' . $row['name_category'] . ' <br></td>
                </tr>
                ';
        $count_cat++;
    }
    ?>
    <label for="subcategory">Подкатегория</label><br>
    <?php
    $query = "SELECT * FROM subcategory";//эта часть динамически выводит чекбоксы для подкатегорий
    $result = mysqli_query($link, $query);
    $count_sub = 1;
    while ($row = mysqli_fetch_assoc($result)) {
        echo '
                <tr>
                    <td><input type=checkbox name=subcategory[] value=$row id=' . $count_sub . '>' . $row['name_subcategory'] . ' <br></td>
                </tr>
                ';
        $count_sub++;
    }
    ?>

    <label for="section">Цвет</label><br>
    <?php

    $query = "SELECT * FROM colormdf";//эта часть динамически выводит чекбоксы для цвета
    $result = mysqli_query($link, $query);
    while ($field = mysqli_fetch_field($result)) {
        $names_fields[] = $field->name;
    }
    foreach ($names_fields as $field) {
        if ($field != 'id_product') {
            echo '
                <tr>
                    <td><input type=checkbox name=color[] value=$field />' . $field . ' <br></td>
                </tr>
                ';
        }
    }
    ?>
</form>
</body>
</html>