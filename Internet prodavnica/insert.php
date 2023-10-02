<?php

// Podaci za konekciju na bazu podataka
$servername = "localhost";
$username = "milos";
$password = "Lozinka12345";
$dbname = "internetprodavnica";
$table = "proizvodi";

// Kreiranje konekcije
$conn = new mysqli($servername, $username, $password, $dbname);

// Provera konekcije
if ($conn->connect_error) {
    die("Greška prilikom konekcije sa bazom podataka: " . $conn->connect_error);
}

// Podaci iz forme registracije
$naziv = $_POST['ns'];
$cena = $_POST['unos'];
$kratak_opis = $_POST['pitanje1'];
$dug_opis = $_POST['pitanje2'];
$kategorije = $_POST['kategorija'];

$BrojSvidjanja = rand(0, 5000);
$BrojNesvidjanja = rand(0,5000);

// SQL upit za unos podataka u tabelu "korisnici"
$sql = "INSERT INTO $table (Naziv, Dugiopis, Kratakopis, Kategorija, Cena, BrojSvidjanja, BrojNesvidjanja) VALUES ('$naziv', '$dug_opis', '$kratak_opis', '$kategorije', '$cena', '$BrojSvidjanja', '$BrojNesvidjanja')";

// Izvršavanje upita
if ($conn->query($sql) === TRUE) {
    header("Location: proizvodi.php");
} else {
    echo "Unos nije uspešan: " . $conn->error;
}

// Zatvaranje konekcije
$conn->close();
?>
