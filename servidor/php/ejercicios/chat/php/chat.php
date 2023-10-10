<?php
    $path = "../csv/mensajes.csv";
    session_start();
    $user = $_SESSION["user"];
    if(isset($user)){
        echo "Hola $user";
    }
    else
    {
        echo "Primero debes iniciar sesion";
        session_destroy();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./getMessage.php" method="post">
        <input type="text" name="message" id="message" placeholder="Escribe un mensaje aquí">
        <input type="submit" value="Enviar">
    </form>
    <div class="chat">
        <?php
            $file = fopen($path, "r");
            if(filesize($path) != 0){
                while($linea = fgets($file))
                    echo "<p>$linea<p>";
            }
        ?>
    </div>
    <a href="./finishSession.php"><button>Cerrar Sesión</button></a>
</body>
</html>