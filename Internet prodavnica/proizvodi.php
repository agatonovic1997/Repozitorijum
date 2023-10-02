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
<body id="proizvodi">
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
                    <li class="kontakt vreme"><img src="./img/telephone.png" class="vreme">&nbsp;Kontakt: +38137485782</a></li>
                    <li class="kontakt vreme"><img src="./img/three-o-clock-clock.png" class="vreme">&nbsp;Pon-Pet: 08:00 - 21:00</a></li>
                    <li class="kontakt vreme vikend"><img src="./img/three-o-clock-clock.png" class="vreme vikend">&nbsp;Sub: 09:00 - 15:00</a></li>
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
                <a href="https://www.facebook.com/" target="_blank"><img src="./img_2/fb.png" alt="fb" class="min"></a>
                <a href="https://www.instagram.com/" target="_blank"><img src="./img_2/ig.png" alt="ig" class="min"></a>
            </div>
            </div>

            <nav class="centar">
              <ul>
                <li><a href="./index.php">Naslovna</a></li>
                <li><a href="./proizvodi.php"class="klasa2">Proizvodi</a></li>
                <li><a href="./proizvod.php">Proizvod</a></li>


<?php if(isset($_SESSION['IDKorisnika'])): ?>
<?php if($_SESSION['IDKorisnika'] == 5): ?>
        <!-- Prikaz administratorskih funkcionalnosti samo za vaš ID -->
        <li><a href="./porudzbine.php">Kupovina</a></li>
        <li><a href="./unesi.p.php">Unesi proizvod</a></li> 
 <?php else: ?>
        <!-- Prikaz posmatračkih funkcionalnosti za ostale korisnike -->
    <?php endif ?>
<?php else: ?>
    <!-- Ovo se ispisuje kada korisnik nije ulogovan! -->
<?php endif ?>

                <li><a href="./contact.php">Kontakt</a></li>
            </ul>
            </nav>
            
        <div class="container">
          <!-- Ovo je kod za pretragu -->
          <div class="div-pretraga">
           <input type="text" class="search" id="pretraga" placeholder="Pretraga artikala..."> <!--Ovo je input polje za pretragu! -->
           </div>

            <ul>
                <li class="artikli">Odeća</li>
                <br>
                    <div class="slike2">

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
$sql = "SELECT * FROM proizvodi WHERE kategorija = 'Odeca'";
$result = $conn->query($sql);

// Provera rezultata upita i prikaz podataka
if ($result->num_rows > 0) {
    // Prolazak kroz svaki red rezultata
    while ($row = $result->fetch_assoc()) {
        // Prikaz podataka u HTML formatu
        echo '<div class="omotac proizvod">';
        echo '<h4 class="natpis">' . $row["Naziv"] . '</h4>';
        echo '<img src="./img_2/img6.jpg' . $row["Slika"] . '" alt="slika" class="odeca">';
        echo '<p>Sviđanja</p>';
        echo '<button  id="svidjaButton" class="svidja">Sviđa mi se</button><p><span>&nbsp;' . $row["BrojSvidjanja"] . '</span></p>';
        echo '<button  id="nesvidjaButton" class="nesvidja">Ne sviđa mi se</button><p><span>&nbsp;' . $row["BrojNesvidjanja"] . '</span></p><br>';
        echo '<p>Kratak opis:<br><br><span>' . $row["Kratakopis"] . '</span></p>';
        echo '<br><p>Cena:<br><span>' . $row["Cena"] . '</span></p>';
        echo '<button class="detalji" onclick="prikaziDetalje(' . $row["IDProizvoda"] . ')">Detalji</button>';

        echo '</div>';
    }
} else {
    echo "Nema rezultata.";
}

// Zatvaranje konekcije

$conn->close();
?>

<script>
    function prikaziDetalje(proizvodId) {
        window.location.href = "proizvod.php?id=" + proizvodId;
    }
</script>

<script>
 // Dohvatanje svih dugmadi za sviđanje i ne sviđanje
var svidjaDugmad = document.querySelectorAll('.svidja');
var nesvidjaDugmad = document.querySelectorAll('.nesvidja');

// Dodavanje događaja klika na dugmad "Sviđa mi se"
for (var a = 0; a < svidjaDugmad.length; a++) {
  svidjaDugmad[a].addEventListener('click', promeniSvidjanje);
}

// Dodavanje događaja klika na dugmad "Ne sviđa mi se"
for (var j = 0; j < nesvidjaDugmad.length; j++) {
  nesvidjaDugmad[j].addEventListener('click', promeniNesvidjanje);
}

// Funkcija koja se poziva prilikom klika na dugme "Sviđa mi se"
function promeniSvidjanje(event) {
  // Onemogućite dugme nakon prvog klika
  alert("Ne možete kliknuti više puta!");
  event.target.disabled = true;

  // Poziva se PHP skripta putem AJAX zahteva kako bi se izvršila promena u bazi
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState === 4 && this.status === 200) {
      console.log('Vrednost za Sviđa mi se uspešno promenjena u bazi.');
    }
  };
  xhttp.open('GET', 'promeni_svidjanja.php', true);
  xhttp.send();
}

// Funkcija koja se poziva prilikom klika na dugme "Ne sviđa mi se"
function promeniNesvidjanje(event) {
  // Onemogućeno dugme nakon prvog klika
  event.target.disabled = true;
  alert("Ne možete kliknuti više puta!");

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState === 4 && this.status === 200) {

    }
  };
  xhttp.open('GET', 'promeni_nesvidjanja.php', true);
  xhttp.send();
}

    </script>

                    <hr width="75%" size="8">
                <li class="artikli">Knjige</li>
                <br>
                    <div class="slike2">

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
$sql = "SELECT * FROM proizvodi WHERE Kategorija = 'Knjige'";
$result = $conn->query($sql);

// Provera rezultata upita i prikaz podataka
if ($result->num_rows > 0) {
    // Prolazak kroz svaki red rezultata
    while ($row = $result->fetch_assoc()) {
        echo '<div class="omotac proizvod">';
        echo '<h4 class="natpis">' . $row["Naziv"] . '</h4>';
        echo '<img src="./img_2/img11.jpg' . $row["Slika"] . '" alt="slika" class="odeca">';
        echo '<p>Sviđanja</p>';
        echo '<button  id="svidjaButton" class="svidja a">Sviđa mi se</button><p><span>&nbsp;' . $row["BrojSvidjanja"] . '</span></p>';
        echo '<button  id="nesvidjaButton" class="nesvidja b">Ne sviđa mi se</button><p><span>&nbsp;' . $row["BrojNesvidjanja"] . '</span></p><br>';
        echo '<p>Kratak opis:<br><br><span>' . $row["Kratakopis"] . '</span></p>';
        echo '<br><p>Cena:<br><span>' . $row["Cena"] . '</span></p>';
        echo '<button class="detalji" onclick="prikaziDetalje(' . $row["IDProizvoda"] . ')">Detalji</button>';
        echo '</div>';
    }
} else {
    echo "Nema rezultata.";
}

// Zatvaranje konekcije
$conn->close();
?>

<script>
 // Dohvatanje svih dugmadi za sviđanje i ne sviđanje
var svidjaDugmad = document.querySelectorAll('.a');
var nesvidjaDugmad = document.querySelectorAll('.b');

// Dodavanje događaja klika na dugmad "Sviđa mi se"
for (var a = 0; a < svidjaDugmad.length; a++) {
  svidjaDugmad[a].addEventListener('click', promeniSvidjanje);
}

// Dodavanje događaja klika na dugmad "Ne sviđa mi se"
for (var j = 0; j < nesvidjaDugmad.length; j++) {
  nesvidjaDugmad[j].addEventListener('click', promeniNesvidjanje);
}

// Funkcija koja se poziva prilikom klika na dugme "Sviđa mi se"
function promeniSvidjanje(event) {
  // Onemogućeno dugme nakon prvog klika
  alert("Ne možete kliknuti više puta!");
  event.target.disabled = true;

  // Poziva se PHP skripta putem AJAX zahteva kako bi se izvršila promena u bazi
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState === 4 && this.status === 200) {
      console.log('Vrednost za Sviđa mi se uspešno promenjena u bazi.');
    }
  };
  xhttp.open('GET', 'promeni_svidjanja.php', true);
  xhttp.send();
}

// Funkcija koja se poziva prilikom klika na dugme "Ne sviđa mi se"
function promeniNesvidjanje(event) {
  // Onemogućeno dugme nakon prvog klika
  event.target.disabled = true;
  alert("Ne možete kliknuti više puta!");

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState === 4 && this.status === 200) {

    }
  };
  xhttp.open('GET', 'promeni_nesvidjanja.php', true);
  xhttp.send();
}

    </script>

                    <hr width="75%" size="8">
                <li class="artikli">Elektronika</li>
                <br>
                    <div class="slike2">

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
$sql = "SELECT * FROM proizvodi WHERE Kategorija = 'Elektronika'";
$result = $conn->query($sql);

// Provera rezultata upita i prikaz podataka
if ($result->num_rows > 0) {
    // Prolazak kroz svaki red rezultata
    while ($row = $result->fetch_assoc()) {
        echo '<div class="omotac proizvod">';
        echo '<h4 class="natpis">' . $row["Naziv"] . '</h4>';
        echo '<img src="./img_2/img10.jpg' . $row["Slika"] . '" alt="slika" class="odeca">';
        echo '<p>Sviđanja</p>';
        echo '<button  id="svidjaButton" class="svidja c">Sviđa mi se</button><p><span>&nbsp;' . $row["BrojSvidjanja"] . '</span></p>';
        echo '<button  id="nesvidjaButton" class="nesvidja d">Ne sviđa mi se</button><p><span>&nbsp;' . $row["BrojNesvidjanja"] . '</span></p><br>';
        echo '<p>Kratak opis:<br><br><span>' . $row["Kratakopis"] . '</span></p>';
        echo '<br><p>Cena:<br><span>' . $row["Cena"] . '</span></p>';
        echo '<button class="detalji" onclick="prikaziDetalje(' . $row["IDProizvoda"] . ')">Detalji</button>';
        echo '</div>';
    }
} else {
    echo "Nema rezultata.";
}

// Zatvaranje konekcije
$conn->close();
?>


<script>
 // Dohvatanje svih dugmadi za sviđanje i ne sviđanje
var svidjaDugmad = document.querySelectorAll('.c');
var nesvidjaDugmad = document.querySelectorAll('.d');

// Dodavanje događaja klika na dugmad "Sviđa mi se"
for (var a = 0; a < svidjaDugmad.length; a++) {
  svidjaDugmad[a].addEventListener('click', promeniSvidjanje);
}

// Dodavanje događaja klika na dugmad "Ne sviđa mi se"
for (var j = 0; j < nesvidjaDugmad.length; j++) {
  nesvidjaDugmad[j].addEventListener('click', promeniNesvidjanje);
}

// Funkcija koja se poziva prilikom klika na dugme "Sviđa mi se"
function promeniSvidjanje(event) {
  // Onemogućite dugme nakon prvog klika
  alert("Ne možete kliknuti više puta!");
  event.target.disabled = true;

  // Poziva se PHP skripta putem AJAX zahteva kako bi se izvršila promena u bazi
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState === 4 && this.status === 200) {
      console.log('Vrednost za Sviđa mi se uspešno promenjena u bazi.');
    }
  };
  xhttp.open('GET', 'promeni_svidjanja.php', true);
  xhttp.send();
}

// Funkcija koja se poziva prilikom klika na dugme "Ne sviđa mi se"
function promeniNesvidjanje(event) {
  // Onemogućeno dugme nakon prvog klika
  event.target.disabled = true;
  alert("Ne možete kliknuti više puta!");

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState === 4 && this.status === 200) {

    }
  };
  xhttp.open('GET', 'promeni_nesvidjanja.php', true);
  xhttp.send();
}

    </script>

                    <hr width="75%" size="8">
            </ul>
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
<script src="./script/search.js"></script>
</html>