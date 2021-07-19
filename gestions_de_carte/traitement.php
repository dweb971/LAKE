<?php 
session_start();

ini_set('display_errors', 1);

// autoloader
spl_autoload_register(function ($name) {
    echo "Tentative de chargement de $name.\n";
    throw new Exception("Impossible de charger $name.");
});

try {
    // instanciation des classes
    include("scritp/Connect.php");
    include("scritp/Salarier.php");
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}

$db = new Connect();
$config = new Salarier($db);

//echo $_POST["datas"];

// decoupe php
$resultat = preg_split('/,/', $_POST["datas"]);
$config->add_salarier($resultat[0], $resultat[1], $resultat[2], $resultat[3]);



