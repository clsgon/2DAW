<?php
    $url = "http://localhost/clsgon/2DAW/servidor/php/ejercicios/agendaJSON/contactos.php";
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
    $json = curl_exec($curl);
    curl_close($curl);

    $contactos = json_decode($json);
    var_dump($contactos);
?>