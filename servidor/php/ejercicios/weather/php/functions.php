<?php
    function Locations(){
        $url = "https://www.aemet.es/es/api-eltiempo/temperaturas/2023-11-02/PB";
        $xml = simplexml_load_file($url);

        $forecastData[0] = $xml->ccaa;

        if ($forecastData)
        {
            foreach($forecastData[0] as $ccaa)
            {
                $forecastData[1] = $ccaa->provincia;
                foreach($forecastData[1] as $prov){
                    $forecastData[2] = $prov->ciudad;
                    foreach($forecastData[2] as $city)
                        if($city["capital"] == "1")
                            $cp[] = $city["cod_ine"];
                }
            }
            return $cp;
        }
    }

    function SaveCsv($array, $path)
    {
        $fd = fopen($path, "a");
        if ($fd)
            for ($i = 0; $i < count($array); $i += 1)
                fwrite($fd, $array[$i]."\n");
        fclose($fd);
    }

    function CpCsv($path)
    {
        $fd = fopen($path, "r");
        if ($fd)
            while($linea = fgets($fd))
                $cp[] = explode("\n", $linea)[0];
        fclose($fd);
        return $cp;
    }

    function Name($url)
    {
        $xml = simplexml_load_file($url);

        return $xml->nombre;
    }

    function DateTemp($url)
    {
        $xml = simplexml_load_file($url);

        $forecastData = $xml->prediccion->dia;
        if ($forecastData)
            echo "<table>";
            echo "<tr>";
            echo "<td colspan='3'>".Name($url)."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Fecha</td>";
            echo "<td>Mínima</td>";
            echo "<td>Máxima</td>";
            echo "</tr>";
            foreach($forecastData as $dia)
            {
                echo "<tr>";
                echo "<td>".$dia["fecha"]."</td>";
                echo "<td>".$dia->temperatura->minima."</td>";
                echo "<td>".$dia->temperatura->maxima."</td>";
                echo "</tr>";
            }
            echo "</table>";
    }
?>