<?php
    require '../bbdd/config.php';
    require '../bbdd/methods.php';
    require '../php/class_product.php';

    echo json_encode(AllProducts($conn));

    $conn=null;
?>