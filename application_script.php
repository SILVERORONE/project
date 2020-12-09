<?php
$id = $_POST['id'];

$mail = $_POST['mail'];
$number = $_POST['number'];
$link = new mysqli('localhost','root','root','project');
if($link){
    $fio = filter_var(trim($_POST['fio']), FILTER_SANITIZE_STRING);
    $link->query("INSERT INTO `application` (`mail`, `number`, `fio`, `id_animal`) VALUES ('$mail', '$number', '$fio', '$id');"); // добавление сообщений в бд
    $link->close(); // закрываем подключение к бд
    header('Location: /dist/catalog.php');
    exit();
}


else{
    echo "404 Ошибка подключения"; // error 2
}
?>
