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
<body id="proizvod">
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
                <li><a href="./proizvodi.php">Proizvodi</a></li>
                <li><a href="./proizvod.php" class="klasa3">Proizvod</a></li>

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


            <div class="proizvod-detalji">

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

// Provera postojanja ID parametra u URL-u
if (isset($_GET['id'])) {
    $proizvodId = $_GET['id'];

    // Izvršavanje SQL upita za izbor detalja proizvoda
    $sql = "SELECT Naziv, Dugiopis, Cena FROM proizvodi WHERE IDProizvoda = $proizvodId";
    $result = $conn->query($sql);

    // Provera rezultata upita i prikaz podataka
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $naziv = $row['Naziv'];
        $dugiOpis = $row['Dugiopis'];
        $cena = $row['Cena'];

        // Prikaz detalja proizvoda na stranici
        echo "<h2 class='odmak'>$naziv</h2><br>";
        echo "<p class='odmak'>$dugiOpis</p>";

        if (isset($_SESSION['IDKorisnika'])) {
            // Korisnik je prijavljen
            echo '<button class="sacuvaj" onclick="sacuvajProizvod(' . $proizvodId . ', \'' . $naziv . '\', ' . $cena . ')">Sačuvaj</button>';
        } else {
            // Korisnik nije prijavljen, redirekcija na stranicu za logovanje
            echo '<button class="sacuvaj" onclick="window.location.href=\'logovanje.php\'">Sačuvaj</button>';
        }
        echo '<button class="odbaci" onclick="vrati()">Odustani</button>';
    } else {
        echo "Proizvod nije pronađen.";
    }
} else {
    echo '<span class="upozorenje">Lista je trenutno prazna!</span>';
}

// Zatvaranje konekcije
$conn->close();

?>

<script>
function sacuvajProizvod(proizvodId, naziv, cena) {
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'proizvod.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            alert('Proizvod je dodat u korpu.');
            window.location.href = 'korpa.php';
        }
    };

    var params = 'proizvodId=' + encodeURIComponent(proizvodId) +
                 '&Naziv=' + encodeURIComponent(naziv) +
                 '&Cena=' + encodeURIComponent(cena);

    xhr.send(params);
}

function vrati() {
    window.history.back();
}
</script>

<?php

$servername = "localhost";
$username = "milos";
$password = "Lozinka12345";
$dbname = "internetprodavnica";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Neuspela konekcija: " . $conn->connect_error);
}


if (isset($_POST['proizvodId'], $_POST['Naziv'], $_POST['Cena'])) {
    $proizvodId = $_POST['proizvodId'];
    $naziv = $_POST['Naziv'];
    $cena = $_POST['Cena'];
    $sql1 = "SELECT Naziv, ID, Cena FROM tabela_cuvanje WHERE IDProizvoda = $proizvodId";
    $sql1 = "INSERT INTO tabela_cuvanje (Naziv, Cena) VALUES ('$naziv', '$cena')";
    if ($conn->query($sql1) === TRUE) {
        echo "Proizvod je uspešno sačuvan.";
    } else {
        echo "Greška pri čuvanju proizvoda: " . $conn->error;
    }
} else {
    echo "";
}

$conn->close();
?>

              </div>
              
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