<?php
    $ar = array("spain" => "./img/spain.png", "france" => "./img/france.png", "german" => "./img/german.png.");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img{
            width: 50%;
        }
    </style>
</head>
<body>
    <img src=<?php echo $ar[$_REQUEST["pais"]]?> alt="bandera">
</body>
</html>