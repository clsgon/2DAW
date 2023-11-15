<?php
    $name = ucfirst(strtolower($_POST['name']));
    $surname = ucfirst(strtolower($_POST['surname']));
    $age = $_POST['age'];

    $path = "./contactos.txt";
    $linea = "";
    if (file_exists($path)){
        $myfile = fopen($path, "r+") or die("Unable to open file!");
        while(!feof($myfile)) {
            $linea = fgetc($myfile);
        };
        fwrite($myfile, $linea);
    }
    else
    {
        $myfile = fopen($path, "w") or die("Unable to open file!");
    }

    $newContact = "$name,$surname,$age\n";
    fwrite($myfile, $newContact);
    fclose($myfile);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda/Ver Contactos</title>
    <link rel="stylesheet" href="./style/contactos.css">
</head>
<body>
    <?php
            $numLines = 0;
            $myfile = fopen($path, "r") or die("Unable to open file!");
            while ($linea = fgets($myfile)) {
                $cname[] = explode(",",$linea)[0];
                $csurname[] = explode(",",$linea)[1];
                $cage[] = explode(",", $linea)[2];
            }
            fclose($myfile);
            echo "<table>";
            for($i = 0; $i < count($cage); $i += 1)
            {
                echo "<tr>";
                echo "<td>$cname[$i]</td>";
                echo "<td>$csurname[$i]</td>";
                echo "<td>$cage[$i]</td>";
                echo "</tr>";
            }
            echo "</table>";
    ?>

    <table>
        <dt>

        </dt>
    </table>
</body>
</html>