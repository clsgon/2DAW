<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paises</title>
    <link rel="stylesheet" media="screen and (min-width: 1028px)" href="./style/indexCP.css">
    <link rel="stylesheet" media="screen and (min-width: 700px) and (max-width: 1028px)" href="./style/indexTB.css">
    <link rel="stylesheet" media="screen and (max-width: 700px)" href="./style/indexM.css">
</head>
<body>
    <main>
        <?php
            $url = "https://restcountries.com/v3.1/all";
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
            $json = curl_exec($curl);
            curl_close($curl);
            $paises = json_decode($json);
            include './php/allCountry.php';
        ?>
    </main>
</body>
</html>