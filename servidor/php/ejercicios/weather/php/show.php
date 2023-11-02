<?php include './functions.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/show.css">
    <title><?php echo Name("https://www.aemet.es/xml/municipios/localidad_".$_GET["city"].".xml"); ?></title>
</head>
<body>
    <?php
        if(isset($_GET["city"]))
        {
            $url = "https://www.aemet.es/xml/municipios/localidad_".$_GET["city"].".xml";
            DateTemp($url);
        }
    ?>
</body>
</html>