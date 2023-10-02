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
<body id="pocetna">
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
        
        <span id="brojProizvoda"></span>;
                    
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
                    <li class="kontakt vreme"><img src="./img/email.png"class="vreme">&nbsp;E-mail: internetprodavnica@gmail.com</a></li>
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
                <li><a href="./index.php"class="klasa">Naslovna</a></li>
                <li><a href="./proizvodi.php">Proizvodi</a></li>
                <li><a href="./proizvod.php">Proizvod</a></li>
                

<?php if(isset($_SESSION['IDKorisnika'])): ?>
<?php if($_SESSION['IDKorisnika'] == 5): ?>
        <!-- Prikaz administratorskih funkcionalnosti samo za  ID -->
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
            <img src="./img/store-4156934_1280.png" alt="" class="slika">
            <h1 class="text">Internet prodavnica</h1>
            <div class="gl-text">
            <p>Dobrodošli na našu onlajn prodavnicu! Otkrijte širok izbor kvalitetnih proizvoda koji su vam potrebni. Naša stranica nudi jednostavno i sigurno onlajn kupovinu. Pronađite proizvode iz različitih kategorija, kao što su odeća, elektronika, kućni aparati i još mnogo toga. Sa brzom dostavom i vrhunskom korisničkom podrškom, omogućavamo vam prijatno i pouzdano iskustvo kupovine. Registrujte se danas i započnite sa istraživanjem naše bogate ponude proizvoda! Nudimo vam pristup širokom asortimanu proizvoda vrhunskog kvaliteta po konkurentnim cenama. Naša onlajn prodavnica je tu da vam olakša kupovinu iz udobnosti vašeg doma. Pregledajte našu intuitivno dizajniranu platformu koja omogućava brzo pretraživanje i filtriranje proizvoda prema vašim preferencijama. Uz siguran sistem plaćanja i zaštitu privatnosti, možete se osećati potpuno bezbedno dok kupujete kod nas. Iskoristite posebne ponude, popuste i povremene akcije koje vam omogućavaju uštedu i vrednost za vaš novac. Naš tim stručnjaka za korisničku podršku je tu da vam pruži pomoć i odgovori na sva vaša pitanja. Uživajte u neograničenoj praktičnosti onlajn kupovine sa našom prodavnicom. Pridružite nam se danas i doživite jednostavnost i zadovoljstvo kupovine na mreži!</p>
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