<?php
include 'config.php';

$nombre = $_POST['nombre'];
$precio = $_POST['precio'];

$sql = "INSERT INTO productos (nombre, precio) VALUES ('$nombre', $precio)";

if ($conn->query($sql) === TRUE) {
    header('Location: productos.html');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


