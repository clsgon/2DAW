<?php
    if(isset($_REQUEST["user"]) && $_REQUEST["user"] == "false")
        echo "El nombre de usuario no existe";
    if(isset($_REQUEST["pass"]) && $_REQUEST["pass"] == "false")
        echo "La contraseña es incorrecta";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="./check.php" method="post">
        <label for="luser">Nombre de usuario</label>
        <input type="text" name="luser" id="luser" required>
        <label for="lpass">Contraseña</label>
        <input type="password" name="lpass" id="lpass" required>
        <input type="submit" value="Iniciar sesión">
    </form>
    <a href="./signup.php">No tienes cuenta, registrate ya!</a>
</body>
</html>