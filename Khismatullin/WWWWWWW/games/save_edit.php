<?php
    $mysqli = new mysqli("eu-cdbr-west-03.cleardb.net", "be979b4b739385", "67d2bc8a", "heroku_59a01e27452dafc");
    if ($mysqli->connect_errno) {
        echo "Не удалось подключиться к БД";
    }

    $id = $_GET['id'];

    $name = $_GET['name'];
    $genre = $_GET['genre'];
    $developer = $_GET['developer'];
    $publisher = $_GET['publisher'];
    $sold = $_GET['sold'];

    $result = $mysqli->query("UPDATE games
        SET name='$name', genre='$genre', developer='$developer',
        publisher='$publisher', sold='$sold' WHERE id='$id'"
    );

    header("Location: games.php");
    exit;
?>