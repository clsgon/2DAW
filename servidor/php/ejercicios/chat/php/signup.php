<?php
    if(isset($_REQUEST["check"]) && $_REQUEST["check"] == "false")
        echo "El nombre de usuario ya existe";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen and (min-width: 1028px)" href="../style/signup.css">
    <link rel="stylesheet" media="screen and (min-width: 480px) and (max-width: 1027px)" href="../style/signup.css">
    <link rel="stylesheet" media="screen and (max-width: 480px)" href="../style/singupMobile.css">
    <title>Sign up</title>
</head>
<body>
    <form action="./check.php" method="post">
        <div class="group">
            <div class="campo">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" placeholder="Nombre">
            </div>
            <div class="campo">
                <label for="surname">Apellidos</label>
                <input type="text" name="surname" id="surname" placeholder="Apellidos">
            </div>
        </div>
        <div class="group">
            <div class="campo">
                <label for="birthdate">Fecha de nacimiento</label>
                <input type="date" name="birthdate" id="birthdate">
            </div>
            <div class="campo">
                <label for="mail">Correo Electrónico</label>
                <input type="email" name="mail" id="mail" placeholder="Correo">
            </div>
        </div>
        <div class="group">
            <div class="campo">
                <label for="username">Nombre de Usuario</label>
                <input type="text" name="username" id="username" required placeholder="Nombre de usuario">
            </div>
            <div class="campo">
                <label for="pass">Contraseña</label>
                <input type="password" name="pass" id="pass" required placeholder="Contraseña">
            </div>
        </div>
        <input type="submit" value="Registrarse">
    </form>
    <a href="./login.php">Ya tienes cuenta, inicia sesión!</a>
</body>
</html>