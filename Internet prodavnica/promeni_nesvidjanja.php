<?php
// Uspostavite konekciju sa bazom podataka
$servername = "localhost";
$username = "milos";
$password = "Lozinka12345";
$dbname = "internetprodavnica";

$conn = new mysqli($servername, $username, $password, $dbname);

// Provera konekcije
if ($conn->connect_error) {
    die("Greška pri konekciji: " . $conn->connect_error);
}

// Preuzimanje vrednosti iz URL parametra
$promena = $_GET['promena'];

// Izvršavanje SQL upita za ažuriranje vrednosti u bazi
$sql = "UPDATE proizvodi SET BrojNesvidjanja = BrojNesvidjanja + 1 WHERE IDProizvoda >= 1";

if ($conn->query($sql) === TRUE) {
    echo "Vrednost je uspešno ažurirana.";
} else {
    echo "Greška pri ažuriranju vrednosti: " . $conn->error;
}

// Zatvaranje konekcije sa bazom podataka
$conn->close();
?>
