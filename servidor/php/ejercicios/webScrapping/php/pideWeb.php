<?php
    $productQ = $_POST["product"];

    $url = "https://www.rtve.es/noticias/";
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
    $curlOut = curl_exec($curl);
    curl_close($curl);

    $html = new DOMDocument();
    @$html->loadHTML($curlOut);
    //var_dump($html);

    $finder = new DOMXPath($html);
    $spaner = $finder->query('//div');
    var_dump($spaner);
?>