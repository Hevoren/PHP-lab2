<?php

    $search = ($_POST['search']);
    $choice = ($_POST['choice']);

    $mysql = new mysqli('localhost', 'root', '', 'AdressBook');

    if($mysql->connect_error){
        die("Ошибка: " . $mysql->connect_error);
    }

    $result = $mysql->query("SELECT `name`, `number`, `adress` FROM `$choice` WHERE `name` = '$search' ");

    while ($row = $result->fetch_assoc()) {
    ?>

        <p>
            Имя: <?= $row['name']; ?><br>
            Номер: <?= $row['number']; ?><br>
            Адерс: <?= $row['adress']; ?><br>
        <h1>Чтобы выйти нажмите <a href="/exit.php">здесь<<</a></h1>
        </p>
        <?php
    }

    $mysql->close();

?>