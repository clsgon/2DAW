<?php
session_start();
$message = $_POST["message"];
$user = $_SESSION["user"];
$path = "../csv/mensajes.csv";
$file = fopen($path, "a");
fwrite($file, "$user: $message\n");
fclose($file);
header("Location: ./chat.php");
?>