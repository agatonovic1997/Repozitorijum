<?php

// Podaci za konekciju na bazu podataka
$servername = "localhost";
$username = "milos";
$password = "Lozinka12345";
$dbname = "internetprodavnica";
$table = "korisnici";

// Kreiranje konekcije
$conn = new mysqli($servername, $username, $password, $dbname);

// Provera konekcije
if ($conn->connect_error) {
    die("Greška prilikom konekcije sa bazom podataka: " . $conn->connect_error);
}

// Podaci iz forme registracije
$ime_prezime = $_POST['ns'];
$adresa = $_POST['ad'];
$lozinka = $_POST['psw'];
$email = $_POST['unos'];
$broj_telefona = $_POST['broj'];

// SQL upit za unos podataka u tabelu "korisnici"
$sql = "INSERT INTO $table (Ime_i_prezime, Email, Sifra, Mobilni, Adresa) VALUES ('$ime_prezime', '$email', '$lozinka', '$broj_telefona', '$adresa')";

// Izvršavanje upita


$query = mysqli_query($conn,$sql);
header('Location: logovanje.php')




// $conn->close();
?>
