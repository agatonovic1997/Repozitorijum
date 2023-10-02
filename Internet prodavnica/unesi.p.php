<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./img_2/shop.png">
    <link rel="stylesheet" href="./stilizovanje/design.css">
    <link rel="stylesheet" href="./stilizovanje/media.css">
    <title>Unesi proizvod</title>
</head>
<body id="unesi">
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
        <!-- Prikaz administratorskih funkcionalnosti samo za vaš ID -->
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
                    <li class="kontakt vreme"><img src="./img/three-o-clock-clock.png" class="vreme">&nbsp;Pon-Pet: 08:00 - 21:00</a></li>
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
                <a href="https://www.facebook.com/" target="_blank"><img src="./img_2/fb.png" alt="fb" class="min"></a>
                <a href="https://www.instagram.com/" target="_blank"><img src="./img_2/ig.png" alt="ig" class="min"></a>
            </div>
            </div>

            <nav class="centar">
              <ul>
                <li><a href="./index.php">Naslovna</a></li>
                <li><a href="./proizvodi.php">Proizvodi</a></li>
                <li><a href="./proizvod.php">Proizvod</a></li>
                <li><a href="./porudzbine.php">Kupovina</a></li>
                <li><a href="./unesi.p.php" class="klasa4">Unesi proizvod</a></li>
                <li><a href="./contact.php">Kontakt</a></li>
            </ul>
            </nav>

            <form action="./insert.php" method="post" class="unosi">

                <h3 class="bela">Unesi proizvod</h3><br>
                <span class="error" id="nsError"></span><br>
                <input type="text" name="ns" id="ns" placeholder="Naziv" required><br>

                <span class="error" id="unosError"></span><br>
                <input type="number" name="unos" id="unos" placeholder="Cena" required><br>

                <span class="error" id="kratakOpisError"></span><br>
                <textarea name="pitanje1" id="kratakOpis" placeholder="Kratak opis" required class="textarea"></textarea><br>

                <span class="error" id="dugOpisError"></span><br>
                <textarea name="pitanje2" id="dugOpis" placeholder="Dug opis" required></textarea><br>

                <span class="error" id="kategorijaError"></span><br>
                <input type="text" name="kategorija" id="kategorija" class="centriraj" placeholder="Odeca - Knjige - Elektronika" required><br><br>
                <input type="submit" value="Kreiraj" onclick="validacija()">

              </form>

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