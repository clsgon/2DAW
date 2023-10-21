<?php
    $name = ucfirst(strtolower($_POST['name']));
    $surname = ucfirst(strtolower($_POST['surname']));
    $age = $_POST['age'];

    $path = "./contactos.txt";
    $linea = "";
    if (file_exists($path)){
        $myfile = fopen($path, "r+") or die("Unable to open file!");
        while(!feof($myfile)) {
            $linea = fgetc($myfile);
        };
        fwrite($myfile, $linea);
    }
    else
    {
        $myfile = fopen($path, "w") or die("Unable to open file!");
    }

    $newContact = "$name,$surname,$age\n";
    fwrite($myfile, $newContact);
    fclose($myfile);

    class Contact
    {
        public $name;
        public $surname;
        public $age;
        public function __construct($name, $surname, $age) {
            $this->name = $name;
            $this->surname = $surname;
            $this->age = $age;
        }
    }
    $numLines = 0;
    $myfile = fopen($path, "r") or die("Unable to open file!");
    while ($linea = fgets($myfile)) {
        $cname[] = explode(",",$linea)[0];
        $csurname[] = explode(",",$linea)[1];
        $cage[] = explode(",", $linea)[2];
    }
    fclose($myfile);
    for($i = 0; $i < count($cage); $i += 1)
    {
        $contactos[] = new Contact($cname[$i], $csurname[$i], $cage[$i]);
    }

    $jContactos = json_encode($contactos);
    $jsonFile = fopen("./json/contactos.json", "w");
    fwrite($jsonFile, $jContactos);
    fclose($jsonFile);
    echo $jContactos;
?>