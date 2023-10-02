<?php
// Povezivanje sa bazom podataka

// Podaci za konekciju na bazu podataka
$servername = "localhost";
$username = "milos";
$password = "Lozinka12345";
$dbname = "internetprodavnica";
$table = "korisnici";

// Kreiranje konekcije

$db = mysqli_connect($servername, $username, $password, $dbname) or die ('Error');


?>
