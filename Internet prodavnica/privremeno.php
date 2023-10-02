<?php
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

// Provera postojanja podataka u POST parametrima
if (isset($_POST['proizvodId'], $_POST['Naziv'], $_POST['Cena'])) {
    $proizvodId = $_POST['proizvodId'];
    $naziv = $_POST['Naziv'];
    $cena = $_POST['Cena'];

    // Izvršavanje SQL upita za umetanje podataka u tabelu "tabela_za_cuvanje"
    $sql = "INSERT INTO tabela_cuvanje (Naziv, Cena) VALUES ('$naziv', $cena)";
    if ($conn->query($sql) === TRUE) {
        echo "Proizvod je uspešno sačuvan.";
    } else {
        echo "Greška pri čuvanju proizvoda: " . $conn->error;
    }
} else {
    echo "Nedostaju potrebni podaci za čuvanje proizvoda.";
}

// Zatvaranje konekcije
$conn->close();
?>