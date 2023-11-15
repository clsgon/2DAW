<?php
    include './php/functions.php';
    
    $path = "./csv/cities.csv";
    $path2 = "./csv/cp.csv";

    if ((file_exists($path) && filesize($path)) && (file_exists($path2) && filesize($path2)))
    {
        $city = CpCsv($path);
        $cp = CpCsv($path2);
    }
    else    
    {
        $cp = Locations();
        for ($i = 0; $i < count($cp); $i += 1)
        {
            $url = "https://www.aemet.es/xml/municipios/localidad_$cp[$i].xml";
            $city[] = Name($url);
        }
        SaveCsv($city, $path);
        SaveCsv($cp, $path2);
    }
?>