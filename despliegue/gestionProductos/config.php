<?php
$server = "localhost";
$username = "profesor";
$password = "passprofe";
$database = "productos";

$conn = new mysqli($server, $username, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>


