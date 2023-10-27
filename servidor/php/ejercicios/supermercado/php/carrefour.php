<?php
    function Brands($products)
    {
        for($i = 0; $i < count($products->content->docs); $i += 1)
        {
            if (isset($products->content->docs[$i]->brand))
                $allBrand[] = $products->content->docs[$i]->brand;
        }
        for($i = 0; $i < count($allBrand); $i += 1)
        {
            for ($j = 0; $j < count($allBrand); $j += 1)
            {
                if ($allBrand[$j] == $allBrand[$i] && $j != $i)
                    $allBrand[$j] = NULL;
            }
        }
        for ($i = 0; $i < count($allBrand); $i += 1)
        {
            if ($allBrand[$i])
                $brand[] = $allBrand[$i];
        }
        return $brand;
    }

    if (isset($_GET["product"]))
    {
        $product = $_GET["product"];
        $url = "https://www.carrefour.es/search-api/query/v1/search?query=$product&scope=mobile&lang=es&session=544f9d86-37ef-46e0-878c-511f7ffa84bd&rows=24&start=0&origin=linked&f.op=OR";
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $outCurl = curl_exec($curl);
        curl_close($curl);


        $products = json_decode($outCurl);
        echo "<h1>Carrefour</h1>";
        $brand = Brands($products);

        for($i = 0; $i < count($brand); $i += 1)
        {
            echo "<div class='marca'>";
            echo $brand[$i];
            echo "<hr>";
            echo "<div class='productos'>";
            for($j = 0; $j < count($products->content->docs); $j += 1)
            {
                if (isset($products->content->docs[$j]->brand))
                    if ($products->content->docs[$j]->brand == $brand[$i])
                    {
                        echo "<div>";
                        echo "<ul>";
                        echo "<li><p>".$products->content->docs[$j]->display_name."</p></li>";
                        echo "<img src=".$products->content->docs[$j]->image_path." alt='product img'>";
                        echo "</ul>";
                        echo "</div>";
                    }
                echo "<br>";
            }
            echo "</div>";
            echo "</div>";
        }
    }
?>