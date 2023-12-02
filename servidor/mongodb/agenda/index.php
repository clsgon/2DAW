<?php
    require './bbdd/config.php';
    require './bbdd/methods.php';
    require './php/contact.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $student = getContactAtType($database, "firstname", "carlos");
        var_dump($student);
    ?>
</body>
</html>