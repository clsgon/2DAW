<?php
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

    $path = "./contactos.txt";
    if (isset($_POST['name']))
    {
        $name = ucfirst(strtolower($_POST['name']));
        $surname = ucfirst(strtolower($_POST['surname']));
        $age = $_POST['age'];

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
    }
    $myfile = fopen($path, "r") or die("Unable to open file!");
    while ($linea = fgets($myfile)) {
        $cname[] = explode(",",$linea)[0];
        $csurname[] = explode(",",$linea)[1];
        $cage[] = trim(explode(",", $linea)[2], "\n");
    }
    fclose($myfile);
    for($i = 0; $i < count($cage); $i += 1)
    {
        $contactos[] = new Contact($cname[$i], $csurname[$i], $cage[$i]);
    }
    echo json_encode($contactos);
?>