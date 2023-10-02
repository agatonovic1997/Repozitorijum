<?php
// Povezivanje sa bazom podataka
$servername = "localhost";
$username = "milos";
$password = "Lozinka12345";
$dbname = "internetprodavnica";

// Provera da li je poslat proizvodID
if (isset($_POST['ID'])) {
    $proizvodID = $_POST['ID'];

    // Kreiranje konekcije
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Provera konekcije
    if ($conn->connect_error) {
        die("Neuspela konekcija: " . $conn->connect_error);
    }

    // Izvršavanje SQL upita za brisanje proizvoda
    $sql = "DELETE FROM tabela_cuvanje WHERE ID = $proizvodID";
    $result = $conn->query($sql);

    // Provera rezultata upita
    if ($result) {
        // Uspesno brisanje proizvoda
        echo "Proizvod je uspešno uklonjen.";
    } else {
        // Greška prilikom brisanja proizvoda
        echo "Došlo je do greške prilikom uklanjanja proizvoda.";
    }

    $conn->close();
} else {
    // Greška - nedostaje proizvodID
    echo "Nedostaje proizvodID.";
}
?>
