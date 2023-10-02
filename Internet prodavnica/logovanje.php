<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./img_2/shop.png">
    <link rel="stylesheet" href="./stilizovanje/design.css">
    <link rel="stylesheet" href="./stilizovanje/media.css">
    <title>Logovanje</title>
</head>
<body id="logovanje">
        <nav  class="desno">
            <img src="./img/mouse.png" alt="" class="logo" usemap="#mapa">

            <map name="mapa" id="mapa">
              <area shape="rect" coords="0,0,128,128" href="./index.php">
            </map>
            
            <ul>
                <li><a href="./registracija.php">Registracija</a></li>
                <li><a href="./logovanje.php"class="klasa8">Uloguj se</a></li>
                <li><a href="./korpa.php"><img src="./img/shopping-bag.png" alt="korpa" class="korpica"></a></li>
                <span id="brojProizvoda"></span>
            </ul>
        </nav>

            <form action="./login.php" method="post" class="log">
                <h3 class="bela">Logovanje</h3><br>
                <input type="email" name="Email" id="email" placeholder="E-mail" required><br>
                <label for="ns"></label><br>
                <input type="password" name="Sifra" id="psw" placeholder="Password" required><br>
                <input type="checkbox" id="check">Prikaži/Sakrij lozinku<br>
                <label for="psw"></label><br>
                <input type="submit" value="Uloguj se"><br><br>
                <p>Ako niste registrovani, kliknite ovde <a href="./registracija.php">Registracija</a></p>
            </form>

    <footer>
    <p>Copyright 2023 &#169; Internet prodavnica</p>
    <img src="./img_2/up-arrow.png" id="scrollToTopButton" class="scroll-button" alt="" title="Nazad na vrh">
    <div class="ikonice">
        <a href="https://www.facebook.com/" target="_blank"><img src="./img_2/facebook.png" alt="fb" class="mreze"></a>
        <a href="https://www.instagram.com/" target="_blank"><img src="./img_2/instagram.png" alt="ig" class="mreze"></a>
    </div>
    </footer>
</body>
<script src="./script/code2.js"></script>
</html>