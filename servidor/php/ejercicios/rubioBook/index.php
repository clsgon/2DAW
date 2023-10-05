<?php
    $numbers = array(10);
    $operator = array(1 => "+", 2 => "-", 3 => "*");
    $operators = array(5);
    if (!isset($_POST["num1"]))
    {
        for($i = 0; $i < 10; $i += 1)
            $numbers[$i] = rand(1, 10);
        for($i = 0; $i < 5; $i += 1)
            $operators[$i] = $operator[rand(1, 3)];
    }
    else
    {
        $numbers[0] = $_POST["num1"];
        $numbers[1] = $_POST["num2"];
        $operators[0] = $_POST["op1"];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-height, initial-scale=1.0">
    <link rel="stylesheet" href="./style/index.css">
    <title>RubioBook</title>
    <style>
        label{
            padding: 20px;
        }

        input{
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <form action="./recogeDatos.php" method="post">
        <?php
            for($i = 0; $i < 1; $i += 1)
            {
                echo
                "
                <label for='result$i'>
                <input type='hidden' name='num$i' id='num$i' value='$numbers[$i]'>
                <input type='hidden' name='operator$i' id='operator$i' value='$operators[$i]'>
                ";
                echo "$numbers[$i] $operators[$i] ";
                $i += 1;
                echo "<input type ='number' name='num$i' id='num$i' value='$numbers[$i]' hidden>";
                echo "$numbers[$i] = </label>";
                $i -= 1;
                echo "<input type='number' class= 'result' name='result$i' id='result$i'>";
                echo "<br>";
            }
        ?>
        <input type="submit">
    </form>
</body>
</html>