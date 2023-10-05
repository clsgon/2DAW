<?php
        $numbers = array(10);
        for($i = 0; $i < 2; $i += 1)
            $numbers[$i] = $_POST["num$i"];
        $result = array(5);
        for($i = 0; $i < 1; $i += 1)
            $result[$i] = $_POST["result$i"];
        $operators = array(5);
        for($i = 0; $i < 1; $i += 1)
            $operators[$i] = $_POST["operator$i"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-height, initial-scale=1.0">
    <link rel="stylesheet" href="./style/recogeDatos.css">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            switch ($operators[0]) {
                case '+':
                    if($numbers[0] + $numbers[1] == $result[0])
                        $img = "Bien";
                    else
                        $img = "Mal";
                    break;
                case '-':
                    if($numbers[0] - $numbers[1] == $result[0])
                        $img = "Bien";
                    else
                        $img = "Mal";
                    break;
                case '*':
                    if($numbers[0] * $numbers[1] == $result[0])
                        $img = "Bien";
                    else
                        $img = "Mal";
                    break;
                default:
                    # code...
                    break;
            }
        ?>
        <h1><?php echo "$numbers[0] $operators[0] $numbers[1] = $result[0] => $img"?></h1>
        <form action="./index.php" method="post">
            <?php
                if ($img == "Mal")
                {
                    echo
                    "
                        <input type='hidden' name='num1' value='$numbers[0]'>
                        <input type='hidden' name='num2' value='$numbers[1]'>
                        <input type='hidden' name='op1' value='$operators[0]'>
                    ";
                }
            ?>
            <input type="submit" value="Volver">
        </form>
    </div>
</body>
</html>