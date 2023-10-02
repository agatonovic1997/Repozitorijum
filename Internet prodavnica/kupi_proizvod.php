<?php
// Pokretanje sesije
session_start();

// Povezivanje sa bazom podataka
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

// Dobijanje ID korisnika koji je trenutno prijavljen
$korisnikId = $_SESSION['IDKorisnika'];

// Izvršavanje SQL upita za prenos podataka iz tabele korisnici samo za trenutno prijavljenog korisnika
$sql = "INSERT INTO kupovine (Ime_i_prezime, Email, Mobilni, Naziv)
        SELECT Ime_i_prezime, Email, Mobilni, Naziv
        FROM korisnici, tabela_cuvanje
        WHERE korisnici.IDKorisnika = '$korisnikId'";
$result = $conn->query($sql);

if ($result) {
    echo "Podaci su uspešno preneti u tabelu kupovine.";
} else {
    echo "Došlo je do greške pri prenosu podataka.";
}

$conn->close();
?>

