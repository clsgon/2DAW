<?php
    if((isset($_REQUEST["user"]) && $_REQUEST["user"] == "false") ||
            (isset($_REQUEST["pass"]) && $_REQUEST["pass"] == "false"))
        echo "Los datos no son correctos.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/login.css">
    <title>Login</title>
</head>
<body>
    <main>
        <form action="./check.php" method="post">
            <div class="campo">
                <label for="luser">Nombre de usuario</label>
                <input type="text" name="luser" id="luser" placeholder="Nombre de usuario" required>
            </div>
            <div class="campo">
                <label for="lpass">Contraseña</label>
                <input type="password" name="lpass" id="lpass" placeholder="Contraseña" required>
            </div>
            <input type="submit" value="Iniciar sesión">
        </form>
        <p>No tienes cuenta, <a href="./signup.php">registrate ya!</a></p>
    </main>
</body>
</html>