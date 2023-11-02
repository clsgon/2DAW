<?php include './php/getData.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen and (min-width: 1028px)" href="./style/indexC.css">
    <link rel="stylesheet" media="screen and (min-width: 700px) and (max-width: 1028px)" href="./style/indexT.css">
    <link rel="stylesheet" media="screen and (max-width: 700px)" href="./style/indexM.css">
    <title>Weather</title>
</head>
<body>
    <form action="./php/show.php" method="get">
            <?php
                for($i = 0; $i < count($city); $i += 1)
                    echo "<button type='submit' value=$cp[$i] name='city'>$city[$i]</button>";                    
            ?>            
    </form>
</body>
</html>