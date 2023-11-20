<?php
    function insertAdmin($conn, $username, $password){
        $password = password_hash($password, PASSWORD_DEFAULT);
        try {
            $sql = "INSERT INTO admin(username, password)
            VALUES ('$username', '$password')";
            // use exec() because no results are returned
            $conn->exec($sql);
            return $username." ha sido añadido correctamente";
        } catch(PDOException $e) {
            return $sql . "<br>" . $e->getMessage();
        }
    }

    function insertProduct($conn, $product){
        $name = $product->name;
        $price = $product->price;
        $path_img = $product->path_img;

        try {
            $sql = "INSERT INTO product(name, price, path_img)
            VALUES ('$name', $price, '$path_img')";
            // use exec() because no results are returned
            $conn->exec($sql);
            return $name." ha sido añadido correctamente";
        } catch(PDOException $e) {
            return $sql . "<br>" . $e->getMessage();
        }
    }

    function getAdmin($conn){
        try {
            $sql = "SELECT * FROM admin";
            // use exec() because no results are returned
            $allProducts = $conn->query($sql);
        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }

        foreach($allProducts as $single)
        {
            $products[0] = $single["username"];
            $products[1] = $single["password"];
        }
        return $products;
    }

    function AllProducts($conn){
        try {
            $sql = "SELECT * FROM product";
            // use exec() because no results are returned
            $allProducts = $conn->query($sql);
        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }

        foreach($allProducts as $single)
        {
            $products[] = new Product($single["name"], $single["price"], $single["path_img"]);
        }
        return $products;
    }
?>