<html>
    <head> <title> Коммандер для базы данных </title> </head>
    <?php
        $mysqli = new mysqli("eu-cdbr-west-03.cleardb.net", "be979b4b739385", "67d2bc8a", "heroku_59a01e27452dafc");
        if ($mysqli->connect_errno) {
            echo "Не удалось подключиться к БД";
        }
    ?>

    <body>
        <form action="<?php print $PHP_SELF ?>" method="post">
            Выполнить команду: 
            <INPUT type="text" name="command" maxlength="80">
            <INPUT type="submit" name="send" value="Выполнить">
        </form>

        <?php
            if (isset($_POST["send"])){
                $command = trim($_POST["command"]);
                if (!empty($command)){
                    $result = $mysqli->query("$command");
                    if (!$result){
                        echo "Не удалось выполнить комманду: (" . $mysqli->errno . ") " . $mysqli->error;
                    }
                    else{
                        
                        echo $result;
                        
                    }
                }
            }
        ?>
    </body>
</html>