<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./img_2/shop.png">
    <link rel="stylesheet" href="./stilizovanje/design.css">
    <link rel="stylesheet" href="./stilizovanje/media.css">
    <title>Internet prodavnica</title>
</head>
<body id="kupovina">
<?php session_start(); ?>
        <nav  class="desno">

            <img src="./img/mouse.png" alt="" class="logo" usemap="#mapa">

            <map name="mapa" id="mapa">
              <area shape="rect" coords="0,0,128,128" href="./index.php">
            </map>
            
            <h2 class="logo glavno">Internet prodavnica</h2>
            <ul class="pomocna_klasa">
              
                <?php if(isset($_SESSION['IDKorisnika'])): ?>
                    <li><a href="./logout.php">Izloguj se</a></li>
                <?php else: ?>
                <li><a href="./registracija.php">Registracija</a></li>
                     <li><a href="./logovanje.php">Uloguj se</a></li>
                     <li><a href="./korpa.php"><img src="./img/shopping-bag.png" alt="korpa" class="korpica"></a></li>
                     
                     <span id="brojProizvoda"></span>';
                    
                <?php endif ?>
            </ul>
        </nav>
         
        <div class="container height">
            <h1 class="sredina">Sačuvani proizvodi</h1>

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

// Izvršavanje SQL upita za izbor podataka
$sql= "SELECT ID, Naziv, Cena FROM tabela_cuvanje";
$result = $conn->query($sql);

// Provera rezultata upita i prikaz podataka
if ($result->num_rows > 0) {
    // Prolazak kroz svaki red rezultata
    while ($row = $result->fetch_assoc()) {
        $proizvodId = $row["ID"];
        echo '<br><div class="omotac proizvod">';
        echo '<h4 class="natpis">' . $row["Naziv"] . '</h4>';
        echo '<br><p>Cena:<br><span>' . $row["Cena"] . '</span></p>';

        echo '<button onclick="posaljiKupovinu(' . $proizvodId . '); odustani(' . $proizvodId . ')">Kupi</button>';

        echo '<button class="odustani" onclick="odustani(' . $row["ID"] . ')">Odustani</button>';

        echo '</div>';
    }
} else {
    echo '<br><br><span class="upozorenje">Nema rezultata!</span>';
}

$conn->close();
?>

<script>
// Funkcija za slanje AJAX zahteva
function posaljiKupovinu(proizvodId) {
  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'kupi_proizvod.php', true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.onreadystatechange = function() {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        // Uspešno izvršena kupovina
        console.log(xhr.responseText);
        alert('Zahtev za kupovinu je uspešno prosleđen prodavcu. Kontaktiraćemo Vas uskoro! Nastavite sa kupovinom. Pozdrav!');
      } else {
        // Greška pri izvršavanju AJAX zahteva
        console.log(xhr.responseText);
        alert('Došlo je do greške prilikom kupovine proizvoda.');
      }
    }
  };
  xhr.send('proizvodId=' + proizvodId);
}

</script>

<script>
    function odustani(proizvodID) {
  setTimeout(function() {
    // AJAX poziv
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'obrisi.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    // Obrada odgovora od servera
    xhr.onload = function () {
        if (xhr.status === 200) {
            location.reload();
        } else {
            // Greška prilikom obrade zahteva
            console.log('Došlo je do greške prilikom brisanja proizvoda.');
        }
    };

    // Slanje podataka ka serveru
    xhr.send('ID=' + proizvodID);
  }, 500);
}

</script>

        </div>
    <footer>
    <p>Copyright 2023 &#169; Internet prodavnica</p>
    <img src="./img_2/up-arrow.png" id="scrollToTopButton" class="scroll-button" alt="" title="Nazad na vrh">
    <div class="ikonice">
        <a href="https://www.facebook.com/" target="_blank"><img src="./img_2/facebook.png" alt="fb" class="mreze"></a>
        <a href="https://www.instagram.com/" target="_blank"><img src="./img_2/instagram.png" alt="ig" class="mreze"></a>
    </div>
    </footer>
</body>
<script src="./script/code3.js"></script>
</html>