<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Hostename (localhost:3306)
$hostname = "localhost:3306";
//Username (87276mvc)
$username = "87276mvc";
//Wachtwoord (KavishSoman)
$wachtwoord = "KavishSoman";
//Database (mvcAuto)
$database = "mvcAuto";

//Connectie
$mysqli = mysqli_connect($hostname, $username, $wachtwoord, $database);

if (!$mysqli){
    echo "u heeft geen connectie met de database";
}
else{
    echo "U heeft verbinding met de database  $database";
}
