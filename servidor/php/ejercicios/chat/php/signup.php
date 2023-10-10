<?php
    if(isset($_REQUEST["check"]) && $_REQUEST["check"] == "false")
        echo "El nombre de usuario ya existe";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
</head>
<body>
    <form action="./check.php" method="post">
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name">
        <label for="surname">Apellidos</label>
        <input type="text" name="surname" id="surname">
        <label for="birthdate">Fecha de nacimiento</label>
        <input type="date" name="birthdate" id="birthdate">
        <label for="mail">Correo Electrónico</label>
        <input type="email" name="mail" id="mail">
        <label for="username">Nombre de Usuario</label>
        <input type="text" name="username" id="username" required>
        <label for="pass">Contraseña</label>
        <input type="password" name="pass" id="pass" required>
        <input type="submit" value="Registrarse">
    </form>
    <a href="./login.php">Ya tienes cuenta, inicia sesión!</a>
</body>
</html>