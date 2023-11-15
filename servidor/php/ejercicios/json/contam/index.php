<?php
    $estaciones = [
    "4"=> "Pza. de España",
    "8"=> "Escuelas Aguirre",
    "11" => "Av. Ramón y Cajal",
    "16" => "Arturo Soria",
    "17" => "Villaverde Alto"
    ];

    $magnitudes = [
        "1" => "Dióxido de Azufre",
        "6" => "Monóxido de Nitrógeno",
        "7" => "Monóxido de Nitrógeno",
        "8" => "Dióxido de Nitrógeno",
        "9" => "Partículas < 2.5 µm",
        "10" => "Partículas < 10 µm",
        "12" => "Óxidos de Nitrógeno",
        "14" => "Ozono",
        "20" => "Tolueno",
        "30" => "Benceno",
        "35" => "Etilbenceno",
        "37" => "Metaxileno",
        "38" => "Paraxileno",
        "39" => "Ortoxileno",
        "42" => "Hidrocarburos totales (hexano)",
        "43" => "Metano",
        "44" => "Hidrocarburos no metánicos (hexano)",
    ];
    $path = "./csv/abr_mo23.csv";
    if (!file_exists($path))
        echo "El archivo no existe";
    else
    {
        $myfile = fopen($path, "r");
        $k = 0;
        while($linea = fgets($myfile))
        {
            $station[] = explode(";",  $linea)[2];
            $mag[] = explode(";",  $linea)[3];
            $h1[] = explode(";", $linea)[8];
            $h2[] = explode(";", $linea)[10];
            $h3[] = explode(";", $linea)[12];
            $h4[] = explode(";", $linea)[14];
            $h5[] = explode(";", $linea)[16];
            $h6[] = explode(";", $linea)[18];
            $h7[] = explode(";", $linea)[20];
            $h8[] = explode(";", $linea)[22];
            $h9[] = explode(";", $linea)[24];
            $h10[] = explode(";", $linea)[26];
            $h11[] = explode(";", $linea)[28];
            $h12[] = explode(";", $linea)[30];
            $h13[] = explode(";", $linea)[32];
            $h14[] = explode(";", $linea)[34];
            $h15[] = explode(";", $linea)[36];
            $h16[] = explode(";", $linea)[38];
            $h17[] = explode(";", $linea)[40];
            $h18[] = explode(";", $linea)[42];
            $h19[] = explode(";", $linea)[44];
            $h20[] = explode(";", $linea)[46];
            $h21[] = explode(";", $linea)[48];
            $h22[] = explode(";", $linea)[50];
            $h23[] = explode(";", $linea)[52];
            $h24[] = explode(";", $linea)[54];
            $k += 1;
        }
        fclose($myfile);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="min-width:481px" href="./style/index.css">
    <title>Document</title>
</head>
<body>
    <table>
    <?php
        for($i = 0; $i < count($station) / 2; $i += 1){
            if((int)$station[$i] > 17)
                break;
            echo "<tr>";
            if ($i > 0)
            {
                echo "<td style='border: solid black 1px;'>".$estaciones[$station[$i]]."</td>";
                echo "<td style='border: solid black 1px;'>".$magnitudes[$mag[$i]]."</td>";
            }
            else
            {
                echo "<td style='border: solid black 1px;'>".$station[$i]."</td>";
                echo "<td style='border: solid black 1px;'>$mag[$i]</td>";
            }
            echo "<td style='border: solid black 1px;'>".$h1[$i]."</td>";
            echo "<td style='border: solid black 1px;'>".$h2[$i]."</td>";
            echo "<td style='border: solid black 1px;'>".$h3[$i]."</td>";
            echo "<td style='border: solid black 1px;'>".$h4[$i]."</td>";
            echo "<td style='border: solid black 1px;'>".$h5[$i]."</td>";
            echo "<td style='border: solid black 1px;'>".$h6[$i]."</td>";
            echo "<td style='border: solid black 1px;'>".$h7[$i]."</td>";
            echo "<td style='border: solid black 1px;'>".$h8[$i]."</td>";
            echo "<td style='border: solid black 1px;'>".$h9[$i]."</td>";
            echo "<td style='border: solid black 1px;'>".$h10[$i]."</td>";
            echo "<td style='border: solid black 1px;'>".$h11[$i]."</td>";
            echo "<td style='border: solid black 1px;'>".$h12[$i]."</td>";
            echo "<td style='border: solid black 1px;'>".$h13[$i]."</td>";
            echo "<td style='border: solid black 1px;'>".$h14[$i]."</td>";
            echo "<td style='border: solid black 1px;'>".$h15[$i]."</td>";
            echo "<td style='border: solid black 1px;'>".$h16[$i]."</td>";
            echo "<td style='border: solid black 1px;'>".$h17[$i]."</td>";
            echo "<td style='border: solid black 1px;'>".$h18[$i]."</td>";
            echo "<td style='border: solid black 1px;'>".$h19[$i]."</td>";
            echo "<td style='border: solid black 1px;'>".$h20[$i]."</td>";
            echo "<td style='border: solid black 1px;'>".$h21[$i]."</td>";
            echo "<td style='border: solid black 1px;'>".$h22[$i]."</td>";
            echo "<td style='border: solid black 1px;'>".$h23[$i]."</td>";
            echo "<td style='border: solid black 1px;'>".$h24[$i]."</td>";
            echo "</tr>";
            if ($i > 5 && $station[$i - 5] == "4")
                while($station[$i] == "4")
                    $i += 1;
            else if ($i > 5 && $station[$i - 5] == "8")
                while($station[$i] == "8")
                    $i += 1;
            else if ($i > 5 && $station[$i - 5] == "11")
                while($station[$i] == "11")
                    $i += 1;
            else if ($i > 5 && $station[$i - 5] == "16")
                while($station[$i] == "16")
                    $i += 1;
            else if ($i > 5 && $station[$i - 5] == "17")
                while($station[$i] == "17")
                    $i += 1;
        }
    ?>
    </table>
</body>
</html>