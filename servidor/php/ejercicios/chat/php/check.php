<?php
    if(isset($_POST["name"]))
        $Sname = $_POST["name"];
    if(isset($_POST["surname"]))
        $surname  =$_POST["surname"];
    if(isset($_POST["username"]))
        $Suser = $_POST["username"];
    if(isset($_POST["birthdate"]))
        $birthdate = $_POST["birthdate"];
    if(isset($_POST["mail"]))
        $mail = $_POST["mail"];
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
            while($linea = fgets($file)){
                $user[] = explode(",", $linea)[4];
            }
            for($i = 0; $i < count($user); $i += 1){
                if($user[$i] == $Suser)
                {
                    header("Location: ./signup.php?$$_check=false");
                    $check = false;
                }
            }
        }
        if($check)
            fwrite($file, "$Sname,$surname,$birthdate,$mail,$Suser,$Spass\n");
    }

    if(isset($luser))
    {
        //Comprobamos el inicio de sesión

    }
?>