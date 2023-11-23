<?php
echo "Probando mongoDB<br>";
require_once __DIR__.'./vendor/autoload.php';
$client = new MongoDB\Client('mongodb://localhost:27017');
$local = "local";
$collection = $client->$local->amigos;
$resultado = $collection->find();

foreach($resultado as $r)
    echo "hola: ".$r['nombre']."<br>";
?>