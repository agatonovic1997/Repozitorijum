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
            <ul>
                 
<?php if(isset($_SESSION['IDKorisnika'])): ?>
<?php if($_SESSION['IDKorisnika'] == 5): ?>
        <!-- Prikaz administratorskih funkcionalnosti samo za ID -->
        <li class="crveno"><a href="#">Admin Panel</a></li>
        <li><a href="./logout.php">Izloguj se</a></li>
 <?php else: ?>
        <!-- Prikaz posmatračkih funkcionalnosti za ostale korisnike -->
        <li class="zeleno"><a href="#">Posmatrač Panel</a></li>
        <li><a href="./logout.php">Izloguj se</a></li>
        <li><a href="./korpa.php"><img src="./img/shopping-bag.png" alt="korpa" class="korpica"></a></li>
        <span id="brojProizvoda"></span>
    <?php endif ?>
<?php else: ?>
    <li><a href="./registracija.php">Registracija</a></li>
    <li><a href="./logovanje.php">Uloguj se</a></li>
    <li><a href="./korpa.php"><img src="./img/shopping-bag.png" alt="korpa" class="korpica"></a></li>
    <span id="brojProizvoda"></span>
<?php endif ?>

            
            </ul>
        </nav>
            <div class="status">
                <ul>
                    <li class="kontakt vreme"><img src="./img/email.png" class="vreme">&nbsp;E-mail: internetprodavnica@gmail.com</a></li>
                    <li class="kontakt vreme"><img src="./img/telephone.png"class="vreme">&nbsp;Kontakt: +38137485782</a></li>
                    <li class="kontakt vreme"><img src="./img/three-o-clock-clock.png"class="vreme">&nbsp;Pon-Pet: 08:00 - 21:00</a></li>
                    <li class="kontakt vreme vikend"><img src="./img/three-o-clock-clock.png"class="vreme vikend">&nbsp;Sub: 09:00 - 15:00</a></li>
                </ul>
            </div>

            <div class="naslov">

            <div id="google_translate_element"></div>
            <script type="text/javascript">
              function googleTranslateElementInit() {
                  new google.translate.TranslateElement(
               {pageLanguage: 'sr'},
               'google_translate_element'
           );
       }
      </script>
      <script type="text/javascript"
           src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
      </script>

            <h1 class="naslov-container"></h1>
            <div class="ikonice2">
                <a href="https://www.facebook.com/" target="_blank"><img src="./fb.png" alt="fb" class="min"></a>
                <a href="https://www.instagram.com/" target="_blank"><img src="./ig.png" alt="ig" class="min"></a>
            </div>
            </div>

            <nav class="centar">
              <ul>
                <li><a href="./index.php">Naslovna</a></li>
                <li><a href="./proizvodi.php">Proizvodi</a></li>
                <li><a href="./proizvod.php">Proizvod</a></li>
                <li><a href="./porudzbine.php"class="klasa5">Kupovina</a></li>
                <li><a href="./unesi.p.php">Unesi proizvod</a></li>
                <li><a href="./contact.php">Kontakt</a></li>
            </ul>
            </nav>
            
        <div class="container">
            
        <?php
// Pokretanje sesije

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

$sql = "SELECT IDKupovine, Ime_i_prezime, Email, Mobilni, Naziv FROM kupovine";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Prikaz rezultata
    while ($row = $result->fetch_assoc()) {
        echo '<br><br><div class="omotac proizvod">';
        echo '<h2 class="natpis">Porudžbina</h2>';
        echo '<br><p>Ime kupca:<br><span>' . $row["Ime_i_prezime"] . '</span></p>';
        echo '<br><p>Email:<br><span>' . $row["Email"] . '</span></p>';
        echo '<br><p>Mobilni:<br><span>' . $row["Mobilni"] . '</span></p>';
        echo '<br><p>Kupljeni proizvod:<br><span>' . $row["Naziv"] . '</span></p>';
        echo '<button class="detalji" onclick="odustani(' . $row["IDKupovine"] . ')">Obriši porudžbinu</button>';
        echo '</div>';
    }
} else {
    echo '<span class="upozorenje">Trenutno nema porudžbina za isporuku!</span>';
}

$conn->close();
?>

<script>
    function odustani(proizvodID) {
        // AJAX poziv
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'obrisi_2.php', true);
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
        xhr.send('IDKupovine=' + proizvodID);
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
<script src="./script/code.js"></script>
</html>