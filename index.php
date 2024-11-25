<?php

require('index.html');
include('php/BD.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $text = $_POST['text'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $select = $_POST['select'];

    if (isset($_POST['gender'])) {
        $gender = $_POST['gender'];
    } else {
        $gender = 'Не указан';
    }
    
    if (isset($_POST['subscribe'])) {
        $subscribe = 'Да';
    } else {
        $subscribe = 'Нет';
    }
    $password = $_POST['password'];

    $logFile = "Text: $text, Email: $email, Number: $number, Select: $select, Gender: $pol, Subscribe: $subscribe\n";
    file_put_contents('log/log.txt', $logFile, FILE_APPEND);

    header('Location: ../html/success.html');
    exit();
}
else{
    header('Location: ../html/error.html');
    exit();
}