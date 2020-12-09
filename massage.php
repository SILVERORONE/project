<?php
$link = new mysqli('localhost','root','root','project');
if($link){
   // $protected = !empty($_POST['fio']) && (!empty($_POST['number'])) && (!empty($_POST['message'])); // проверка на заполнение всех полей
   //if ($protected) { // проверка подключения
        $fio = filter_var(trim($_POST['fio']), FILTER_SANITIZE_STRING);
        $number = filter_var(trim($_POST['number']), FILTER_SANITIZE_STRING);
        $message = filter_var(trim($_POST['message']), FILTER_SANITIZE_STRING);
        $link->query("INSERT INTO `message` (`fio`, `number`, `message`) VALUES ('$fio', '$number', '$message');"); // добавление сообщений в бд
        $link->close(); // закрываем подключение к бд
        header('Location: /dist/');
        exit();

}
else{
    echo "404 Ошибка подключения"; // error 2
}
?>

