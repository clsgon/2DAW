<?php
    if (isset($_GET["product"]))
    {
        $product = $_GET["product"];
        $url = "https://www.dia.es/api/v1/search-insight/initial_analytics?q=$product&sort=&page=1&page_size=30";
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $outCurl = curl_exec($curl);
        curl_close($curl);


        $products = json_decode($outCurl);
        /*echo "<h1>Dia</h1>";
        for($i = 0; $i < count($products->search_products_analytics); $i += 1)
        {
            echo "<div class='product'>";
            echo "<ul>";
            echo "<li>".$products->search_products_analytics[$i]->brand."</li>";
            echo "<li>".$products->search_products_analytics[$i]->item_name."</li>";
            echo "<li>".$products->search_products_analytics[$i]->item_name."</li>";
            echo "</ul>";
            echo "</div>";
        }*/
    }
?>