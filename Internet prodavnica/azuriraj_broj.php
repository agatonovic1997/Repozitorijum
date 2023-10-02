<?php

$servername = "localhost";
$username = "milos";
$password = "Lozinka12345";
$dbname = "internetprodavnica";

// Kreiranje konekcije
$conn = new mysqli($servername, $username, $password, $dbname);

// Provera konekcije
if ($conn->connect_error) {
    die("Neuspela konekcija: " . $conn->connect_error);
}
// Izvršavanje ažuriranja u bazi podataka

// Dobijanje nove vrednosti broja iz baze
$sql = "SELECT COUNT(*) AS brojProizvoda FROM tabela_cuvanje";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $noviBroj = $row['brojProizvoda'];
    echo $noviBroj;
}
// Zatvaranje konekcije
$conn->close();
?>