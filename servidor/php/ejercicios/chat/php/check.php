<?php
    if(isset($_POST["name"]))
        $Sname = $_POST["name"];
    else
        $name = "default";
    if(isset($_POST["surname"]))
        $surname  =$_POST["surname"];
    else
        $surname = "default";
    if(isset($_POST["birthdate"]))
        $birthdate = $_POST["birthdate"];
    else
        $birthdate = "00/00/0000";
    if(isset($_POST["mail"]))
        $mail = $_POST["mail"];
    else
        $mail = "correo@correo.com";
    if(isset($_POST["username"]))
        $Suser = $_POST["username"];
    if(isset($_POST["pass"]))
        $Spass = $_POST["pass"];
    if(isset($_POST["luser"]))
        $luser = $_POST["luser"];
    if(isset($_POST["lpass"]))
        $lpass = $_POST["lpass"];

    $path = "../csv/users.csv";
    $file = fopen($path, "r+") or die("Error de archivo");
    if (isset($Sname))
    {
        $check = true;
        //Comprobamos el registro
        if(filesize($path) != 0)
        {
            while($linea = fgets($file))
                $user[] = explode(",", $linea)[4];
            for($i = 0; $i < count($user); $i += 1){
                if($user[$i] == $Suser)
                {
                    header("Location: ./signup.php?check=false");
                    $check = false;
                    break;
                }
            }
        }
        if($check)
        {
            fwrite($file, "$Sname,$surname,$birthdate,$mail,$Suser,$Spass\n");
            session_start();
            $_SESSION["user"] = $Suser;
            header("Location: ./chat.php");
        }
    }

    if(isset($luser))
    {
        $check = false;
        //Comprobamos el inicio de sesión
        if(filesize($path) != 0)
        {
            echo "Hola $luser comprobemos tu contraseña";
            while($linea = fgets($file))
            {
                $user[] = explode(",", $linea)[4];
                $pass[] = explode(",", $linea)[5];
            }
            for($i = 0; $i < count($user); $i += 1)
            {
                if($user[$i] == $luser)
                {
                    if($pass[$i] == $lpass)
                    {
                        session_start();
                        $_SESSION["user"] = $luser;
                        header("Location: ./chat.php");
                        $check = true;
                        break;
                    }
                    else{
                        header("Location: ./login.php?pass=false");
                        $check = true;
                        break;
                    }
                }
            }
        }
        if(!$check)
            header("Location: ./login.php?user=false");
        fclose($file);
    }
?>