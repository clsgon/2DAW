<?php
    $path = "../csv/mensajes.csv";
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen and (min-width: 1028px)" href="../style/chat.css">
    <link rel="stylesheet" media="screen and (min-width: 701px) and (max-width: 1027px)" href="../style/chatMobile.css">
    <link rel="stylesheet" media="screen and (max-width: 700px)" href="../style/chatMobile.css">
    <title>Document</title>
</head>
<body>
    <header>
        <?php
            if(isset($_SESSION["user"])){
                $user = $_SESSION["user"];
            }
            else
            {
                echo "Primero debes iniciar sesion";
                echo "
                    <script type='text/javascript'>
                        alert('Primero debes iniciar sesión');
                        window.location='./login.php';
                    </script>
                ";
                session_destroy();
            }
        ?>
        <p><?php echo "Hola $user"?></p>
        <a href="./finishSession.php"><button>Cerrar Sesión</button></a>
    </header>
    <main>
        <div class="chat">
            <div class="partChat">
                <?php
                    $file = fopen($path, "r");
                    if(filesize($path) != 0){
                        while($linea = fgets($file))
                        {
                            $cUser = explode(",", $linea)[0];
                            $cMessage = explode(",", $linea)[1];
                            $cHour = explode(",", $linea)[2];
                            if($cUser != $user){
                                echo "$cUser: $cMessage, $cHour";
                                echo "<br>";
                            }
                        }
                    }
                ?>
            </div>
            <div class="partChat">
                <?php
                    $file = fopen($path, "r");
                    if(filesize($path) != 0){
                        while($linea = fgets($file))
                        {
                            $cUser = explode(",", $linea)[0];
                            $cMessage = explode(",", $linea)[1];
                            $cHour = explode(",", $linea)[2];
                            if($cUser == $user){
                                echo "$cUser: $cMessage, $cHour";
                                echo "<br>";
                            }
                        }
                    }
                ?>
            </div>
        </div>
        <form action="./getMessage.php" class="send" method="post">
            <input type="text" name="message" id="message" placeholder="Escribe un mensaje aquí">
            <button type="submit" class="bsend">Enviar</button>
            <br>
        </form>
    </main>
</body>
</html>