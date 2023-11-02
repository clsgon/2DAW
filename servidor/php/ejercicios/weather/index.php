<?php include './php/getData.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./php/show.php" method="get">
        <select name="city" id="city">
            <?php
                for($i = 0; $i < count($city); $i += 1)
                    echo "<option value=$cp[$i]>$city[$i]</option>";
            ?>
        </select>
        <input type="submit" value="Mostrar datos">
    </form>
</body>
</html>