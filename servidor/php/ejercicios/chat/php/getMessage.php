<?php
session_start();
$message = $_POST["message"];
$user = $_SESSION["user"];
$path = "../csv/mensajes.csv";
$file = fopen($path, "a");
$hour = date('h:i:s');
if(!strpos($message, "script") && !strpos($message, "alert"))
    fwrite($file, "$user,$message,$hour\n");
else
    fwrite($file, "$user, el mensaje dio error, $hour\n");
fclose($file);
header("Location: ./chat.php");
?>