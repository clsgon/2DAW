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
</body>
</html>