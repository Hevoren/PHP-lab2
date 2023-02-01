<?php

$number = filter_var(trim($_POST['number']), FILTER_SANITIZE_STRING);
$adress = ($_POST['adress']);
$choice = ($_POST['choice']);

if(mb_strlen($number) != 11 || is_numeric($adress)) {
    echo "Недопустимая длина номера";
    exit();
} else if(mb_strlen($adress) < 20 || mb_strlen($adress) > 100) {
    echo "Недопустимая длина адреса";
    exit();
}


$mysql = new mysqli('localhost', 'root', '', 'AdressBook');

if($mysql->connect_error){
    die("Ошибка: " . $mysql->connect_error);
}



$mysql->query("iNSERT INTO `$choice` (`number`, `adress`)
        VALUES('$number', '$adress')");

$mysql->close();

header('Location: /');
?>