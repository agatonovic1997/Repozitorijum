const textDiv = document.querySelector('.naslov-container');

let counter = 1;

const text = "Dobrodošli na onlajn trgovinu!";
let i = 1;
let speed = 400;

const writeText = function(){
    textDiv.innerHTML = text.slice(0, i);
    i++;

    if(i > text.length){
        i = 1;
    }

    setTimeout(writeText,speed);
}

writeText();

//Karusel

var naslovElement = document.querySelector(".naslov");

var mesto = 1;

var ponavljanje = setInterval(function() {
    mesto++;
    naslovElement.style.backgroundImage = 'url(./img/img' + mesto + '.jpg)';

    if (mesto === 6) {
        mesto = 0;
    }
}, 3000);



  naslovElement.addEventListener("contextmenu", function(event) {
    event.preventDefault(); // sprečava prikazivanje kontekstnog menija
    alert("Desni klik je isključen!")
  });



 // Dohvatanje dugmeta za povratak na vrh
var scrollToTopButton = document.getElementById('scrollToTopButton');

// Funkcija za prikazivanje/pokrivanje dugmeta za povratak na vrh u zavisnosti od pozicije skrola
window.onscroll = function() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    scrollToTopButton.style.display = 'block';
  } else {
    scrollToTopButton.style.display = 'none';
  }
};

// Funkcija za povratak na vrh stranice
scrollToTopButton.addEventListener('click', function() {
  document.body.scrollTop = 0; // Za starije verzije pregledača
  document.documentElement.scrollTop = 0; // Za nove verzije pregledača
});

scrollToTopButton.addEventListener("click", function(event) {
  event.preventDefault();
  document.documentElement.scrollTop = 0;
});


function validacija() {
  var nsInput = document.getElementById("ns");
  var unosInput = document.getElementById("unos");
  var kratakOpisInput = document.getElementById("kratakOpis");
  var dugOpisInput = document.getElementById("dugOpis");
  var kategorijaInput = document.getElementById("kategorija");

  var formValid = true; // Indikator da li je forma ispravna

  // Provera polja "Naziv"
  if (nsInput.value === "") {
    nsInput.style.border = "3px solid red";
    document.getElementById("nsError").innerHTML = "Popunite polje 'Naziv'.";
    document.getElementById("nsError").style.color = "red";
    formValid = false; // Forma nije ispravna
  } else {
    nsInput.style.border = "3px solid initial";
    document.getElementById("nsError").innerHTML = "";
  }

  // Provera polja "Cena"
  if (unosInput.value === "") {
    unosInput.style.border = "3px solid red";
    document.getElementById("unosError").innerHTML = "Popunite polje 'Cena'.";
    document.getElementById("unosError").style.color = "red";
    formValid = false; // Forma nije ispravna
  } else {
    unosInput.style.border = "3px solid initial";
    document.getElementById("unosError").innerHTML = "";
  }

  // Provera polja "Kratak opis"
  if (kratakOpisInput.value === "") {
    kratakOpisInput.style.border = "3px solid red";
    document.getElementById("kratakOpisError").innerHTML = "Popunite polje 'Kratak opis'.";
    document.getElementById("kratakOpisError").style.color = "red";
    formValid = false; // Forma nije ispravna
  } else {
    kratakOpisInput.style.border = "3px solid initial";
    document.getElementById("kratakOpisError").innerHTML = "";
  }

  // Provera polja "Dug opis"
  if (dugOpisInput.value === "") {
    dugOpisInput.style.border = "3px solid red";
    document.getElementById("dugOpisError").innerHTML = "Popunite polje 'Dug opis'.";
    document.getElementById("dugOpisError").style.color = "red";
    formValid = false; // Forma nije ispravna
  } else {
    dugOpisInput.style.border = "3px solid initial";
    document.getElementById("dugOpisError").innerHTML = "";
  }

  // Provera polja "Kategorija"
  if (kategorijaInput.value === "") {
    kategorijaInput.style.border = "3px solid red";
    document.getElementById("kategorijaError").innerHTML = "Popunite polje 'Kategorija'.";
    document.getElementById("kategorijaError").style.color = "red";
    formValid = false; // Forma nije ispravna
  } else {
    kategorijaInput.style.border = "3px solid initial";
    document.getElementById("kategorijaError").innerHTML = "";
  }

  if (!formValid) {
    // Ako je forma ispravna, nastavi slanje ili obradu podataka
    alert("Popunite sva obavezna polja.");
  }
}


function validacija1() {
  var nsInput = document.getElementById("ns1");
  var unosInput = document.getElementById("unos1");
  var piInput = document.getElementById("pi1");

  var formValid = true; // Indikator da li je forma ispravna

  // Provera polja "Ime i prezime"
  if (nsInput.value === "") {
    nsInput.style.border = "3px solid red";
    document.getElementById("nsError").innerHTML = "Popunite polje 'Ime i prezime'.";
    document.getElementById("nsError").style.color = "red";
    formValid = false; // Forma nije ispravna
  } else {
    nsInput.style.border = "3px solid initial";
    document.getElementById("nsError").innerHTML = "";
  }

  // Provera polja "E-mail"
  if (unosInput.value === "") {
    unosInput.style.border = "3px solid red";
    document.getElementById("unosError").innerHTML = "Popunite polje 'E-mail'.";
    document.getElementById("unosError").style.color = "red";
    formValid = false; // Forma nije ispravna
  } else {
    unosInput.style.border = "3px solid initial";
    document.getElementById("unosError").innerHTML = "";
  }

  // Provera polja "Unesite upit koji želite"
  if (piInput.value === "") {
    piInput.style.border = "3px solid red";
    document.getElementById("piError").innerHTML = "Popunite polje 'Unesite upit koji želite'.";
    document.getElementById("piError").style.color = "red";
    formValid = false; // Forma nije ispravna
  } else {
    piInput.style.border = "3px solid initial";
    document.getElementById("piError").innerHTML = "";
  }

  if (!formValid) {
    // Ako je forma ispravna, nastavite sa slanjem ili obradom podataka
    alert("Popunite sva obavezna polja.");
  }
}
















