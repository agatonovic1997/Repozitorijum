<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./img_2/shop.png">
    <link rel="stylesheet" href="./stilizovanje/design.css">
    <link rel="stylesheet" href="./stilizovanje/media.css">
    <title>Registracija</title>
</head>
<body id="registracija">
        <nav  class="desno">
    
            <img src="./img/mouse.png" alt="" class="logo" usemap="#mapa">

            <map name="mapa" id="mapa">
              <area shape="rect" coords="0,0,128,128" href="./index.php">
            </map>
            
            <ul>
                <li><a href="./registracija.php" class="klasa7">Registracija</a></li>
                <li><a href="./logovanje.php">Uloguj se</a></li>
                <li><a href="./korpa.php"><img src="./img/shopping-bag.png" alt="korpa" class="korpica"></a></li>
                <span id="brojProizvoda"></span>
            </ul>
        </nav>

<form action="./reg.php" method="post" class="reg">
    <h3 class="bela">Registracija</h3><br>
    
    <div id="nsError" class="error"></div>
    <input type="text" name="ns" id="ns" placeholder="Ime i prezime" required><br><br>
    
    <div id="adError" class="error"></div>
    <input type="text" name="ad" id="ad" placeholder="Adresa" required><br><br>
    
    <div id="pswError" class="error"></div>
    <input type="password" name="psw" id="psw" placeholder="Password" required><br>
    <input type="checkbox" id="check">Prikaži/Sakrij lozinku<br>
    
    <input type="email" name="unos" id="unos" placeholder="E-mail" required><br>
    <div id="unosError" class="error"></div>
    
    <input type="text" name="broj" id="broj" placeholder="Broj telefona" required><br>
    <div id="brojError" class="error"></div><br>
    
    <input type="submit" value="Registruj se" onclick="validacija()">
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