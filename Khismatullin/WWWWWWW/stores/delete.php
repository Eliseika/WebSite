<?php
    $mysqli = new mysqli("eu-cdbr-west-03.cleardb.net", "be979b4b739385", "67d2bc8a", "heroku_59a01e27452dafc");
    if ($mysqli->connect_errno) {
        echo "Не удалось подключиться к БД";
    }

    $id = $_GET['id'];
    // Удаление ключей из этого магазина
    $result = $mysqli->query("DELETE FROM game_keys WHERE store_id='$id'");
    // Удаление самого магазина
    $result = $mysqli->query("DELETE FROM stores WHERE id='$id'");

    header("Location: stores.php");
    exit;
?>