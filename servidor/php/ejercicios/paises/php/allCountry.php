<?php
    for ($i = 0; $i < count($paises); $i += 1)
    {
        echo "<div class='pais'>";
        echo "<ul>";
        echo "<li class='name'>".$paises[$i]->name->common."</li>";
        echo "<hr>";
        if(isset($paises[$i]->capital[0]))
            echo "<li class='cap'>Capital: ".$paises[$i]->capital[0]."</li>";
        else
            echo "<li>No existe<li>";
        if(isset($paises[$i]->maps->googleMaps))
        {
            $map = $paises[$i]->maps->googleMaps;
            echo "<li class='linkMP'><a href=$map>Google Maps</a></li>";
        }
        else
            echo "<li>No existe<li>";
        echo "</ul>";
        $flag = $paises[$i]->flags->png;
        echo "<img src='$flag' alt='image'>";
        echo "</div>";
        echo "<br>";
    }
?>