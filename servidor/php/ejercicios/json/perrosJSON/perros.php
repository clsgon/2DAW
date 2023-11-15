<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $url = "https://dog.ceo/api/breeds/image/random";
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $json = curl_exec($curl);
        curl_close($curl);

        $perro = json_decode($json);
        var_dump($perro)
    ?>

    <img src=<?php echo $perro->message;?> alt="img perro">
</body>
</html>