<p> Дата и время:
<p>
<?php
    $d=date("d.m.Y H:i");
    echo($d);
?>
<ul id="nav">
    <li><a href="commander.php">Коммандер для БД</a>
    <li><a href="bd_edit.php">Редактирование БД</a>
</ul>

<html>
    <head> <title> Сведения о прользователях сайта </title> </head>
    <body>
        <?php
            $mysqli = new mysqli("eu-cdbr-west-03.cleardb.net", "be979b4b739385", "67d2bc8a", "heroku_59a01e27452dafc");
            if ($mysqli->connect_errno) {
                echo "Не удалось подключиться к БД";
            }
        ?>
    </body>

    <h2>Зарегистрированные пользователи:</h2>
    <table border="1">
        <tr>
            <th> Имя </th>
            <th> E-mail </th>
            <th> Редактировать </th>
            <th> Уничтожить </th>
        </tr>
        <?php
            // Запрос на выборку сведений о пользователях
            $result = $mysqli->query("SELECT login, name, email FROM user");

            if ($result){
                $counter=0;
                // Для каждой строки из запроса
                while ($row = $result->fetch_array()){
                    $login = $row['login'];
                    $name = $row['name'];
                    $email = $row['email'];

                    $counter++;

                    echo "<tr>";
                    echo "<td>$name</td><td>$email</td>";
                    echo "<td><a href='edit.php?login=$login'>Редактировать</a></td>";
                    echo "<td><a href='delete.php?login=$login'>Удалить</a></td>";
                    echo "</tr>";
                }
                print "</table>";
                print("<p>Всего пользователей: $counter </p>");
            }

            print("<p> <a href='new.php'> Добавить пользователя </a> </p>");
        ?>
</html>