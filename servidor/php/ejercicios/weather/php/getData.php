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

    $cp = Locations();

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
            echo "<ul>";
            foreach($forecastData as $dia)
                echo "<li> Fecha: ".$dia["fecha"]." - Min: ".$dia->temperatura->minima.", Max: ".$dia->temperatura->maxima."</li>";
            echo "</ul>";
    }

    for ($i = 0; $i < count($cp); $i += 1)
    {
        $url = "https://www.aemet.es/xml/municipios/localidad_$cp[$i].xml";
        $city[] = Name($url);
    }
?>