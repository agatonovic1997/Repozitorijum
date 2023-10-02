<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./img_2/shop.png">
    <link rel="stylesheet" href="./stilizovanje/design.css">
    <link rel="stylesheet" href="./stilizovanje/media.css">
    <title>Kontakt</title>
</head>
<body id="kontakt">
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
        <!-- Prikaz administratorskih funkcionalnosti samo za  ID -->
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
                    <li class="kontakt vreme"><img src="./img/email.png"class="vreme">&nbsp;E-mail: internetprodavnica@gmail.com</a></li>
                    <li class="kontakt vreme"><img src="./img/telephone.png"class="vreme">&nbsp;Kontakt: +38137485782</a></li>
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
                <li><a href="./proizvod.php">Proizvod</a></li>

<?php if(isset($_SESSION['IDKorisnika'])): ?>
<?php if($_SESSION['IDKorisnika'] == 5): ?>
        <!-- Prikaz administratorskih funkcionalnosti samo za ID -->
        <li><a href="./porudzbine.php">Kupovina</a></li>
        <li><a href="./unesi.p.php">Unesi proizvod</a></li> 
 <?php else: ?>
        <!-- Prikaz posmatračkih funkcionalnosti za ostale korisnike -->
    <?php endif ?>
<?php else: ?>
    <!-- Ovo se ispisuje kada korisnik nije ulogovan! -->
<?php endif ?>

                <li><a href="./contact.php" class="klasa6">Kontakt</a></li>
            </ul>
            </nav>
            
        <div class="container">
        <div class="adresa">
            <h3 class="bela">Internet prodavnica</h3>
            <h3 class="bela">Adresa: Alekse Jelića 16, Kruševac</h3>
            <h3 class="bela">Broj telefona: +38137485782</h3><br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d46246.27060838899!2d21.333948919175796!3d43.577552466751236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ssr!2srs!4v1685485970404!5m2!1ssr!2srs" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

            <form action="" method="post" >

                <h3 class="bela">Kontakt forma</h3><br>
                <span class="error" id="nsError"></span><br>
                <input type="text" id="ns1" placeholder="Ime i prezime" required><br>
                <span class="error" id="unosError"></span><br>
                <input type="email" id="unos1" placeholder="E-mail" required><br>
                <span class="error" id="piError"></span><br>
                <textarea name="pitanje" id="pi1" placeholder="Unesite upit koji želite" required></textarea><br>
                <input type="submit" value="Pošalji" onclick="validacija1()">

              </form>

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