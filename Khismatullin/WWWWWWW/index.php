<html>
    <head> <title> Сведения </title> </head>

    <h2> Управление БД </h2>
    <ul id="bd"> <!-- Собственные скрипты для просмотра и редактирования БД -->
        <li><a href="../DataBase/commander.php">Коммандер для БД</a>
        <li><a href="../DataBase/bd_edit.php">Редактирование БД</a>
    </ul>

<!--
    Игры (id, Название, жанр, разработчик, издатель, объем продаж)

    7.1. Цифровые магазины (id, название, url)

    7.2. Цифровые ключи (id, дата приобретения, дата окончания, id игры, id цифрового магазина, стоимость, ключ).
    Поля id игры и id цифрового магазина являются внешними ключами.
    При этом в одном Цифровом магазине может быть приобретено несколько цифровых ключей на одну и ту же игру.

    7.3. При удалении игры удаляются все ее цифровые ключи.

    7.4. При удалении цифрового магазина удаляются все цифровые ключи из этого магазина.

    7.5. Сформировать PDF и XLS-файлы, содержимым которых будут смежные таблицы Игры (№ п/п, Название, жанр, разработчик,
    издатель, цифровой ключ, дата приобретения, дата окончания, url магазина)
-->
    <h2>Ссылки</h2>
    <ul id="nav"> <!-- Собственные скрипты для просмотра и редактирования БД -->
        <li><a href="games/games.php">Игры</a>
        <li><a href="stores/stores.php">Магазины игр</a>
        <li><a href="game_keys/game_keys.php">Ключи игр</a>
    </ul>

    <button onclick="window.location.href='gen_pdf.php'">PDF-версия таблицы игр</button>
</html>