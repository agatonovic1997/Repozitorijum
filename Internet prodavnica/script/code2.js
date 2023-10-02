const textDiv = document.querySelector('.naslov-container');

 // Dohvatanje dugmeta za povratak na vrh

var scrollToTopButton = document.querySelector('#scrollToTopButton');

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
    var adInput = document.getElementById("ad");
    var pswInput = document.getElementById("psw");
    var emailInput = document.getElementById("unos");
    var brojInput = document.getElementById("broj");
  
    var emailPattern = /^[\w-.]+@gmail.com$/i;
    var brojPattern = /^06[0-79]-\d{6,7}$/;
  
    var emailValid = emailPattern.test(emailInput.value);
    var brojValid = brojPattern.test(brojInput.value);
  
    var formValid = true; // Indikator da li je forma ispravna
  
    // Provera ostalih polja
    if (nsInput.value === "") {
      nsInput.style.border = "4px solid red";
      document.getElementById("nsError").innerHTML = "Popunite polje 'Ime i prezime'.";
      document.getElementById("nsError").style.color = "red";
      formValid = false; // Forma nije ispravna
    } else {
      nsInput.style.border = "4px solid initial";
      document.getElementById("nsError").innerHTML = "";
    }
  
    if (adInput.value === "") {
      adInput.style.border = "4px solid red";
      document.getElementById("adError").innerHTML = "Popunite polje 'Adresa'.";
      document.getElementById("adError").style.color = "red";
      formValid = false; // Forma nije ispravna
    } else {
      adInput.style.border = "4px solid initial";
      document.getElementById("adError").innerHTML = "";
    }
  
    if (pswInput.value === "") {
      pswInput.style.border = "4px solid red";
      document.getElementById("pswError").innerHTML = "Popunite polje 'Password'.";
      document.getElementById("pswError").style.color = "red";
      formValid = false; // Forma nije ispravna
    } else {
      pswInput.style.border = "3px solid initial";
      document.getElementById("pswError").innerHTML = "";
    }
  
    // Provera ostalih polja samo ako su ostala polja popunjena
    if (formValid) {
      if (emailInput.value === "") {
        emailInput.style.border = "4px solid red";
        document.getElementById("unosError").innerHTML = "Popunite polje 'E-mail'.";
        document.getElementById("unosError").style.color = "red";
        formValid = false; // Forma nije ispravna
      } else if (!emailValid) {
        emailInput.style.border = "4px solid red";
        document.getElementById("unosError").innerHTML = "Neispravna e-mail adresa.";
        document.getElementById("unosError").style.color = "red";
        formValid = false; // Forma nije ispravna
      } else {
        emailInput.style.border = "4px solid initial";
        document.getElementById("unosError").innerHTML = "";
      }
  
      if (brojInput.value === "") {
        brojInput.style.border = "4px solid red";
        document.getElementById("brojError").innerHTML = "Popunite polje 'Broj telefona'.";
        document.getElementById("brojError").style.color = "red";
        formValid = false; // Forma nije ispravna
      } else if (!brojValid) {
        brojInput.style.border = "4px solid red";
        document.getElementById("brojError").innerHTML = "Neispravan broj telefona. <i>Primer: 063-1234567</i>";
        document.getElementById("brojError").style.color = "red";
        formValid = false; // Forma nije ispravna
      } else {
        brojInput.style.border = "4px solid initial";
        document.getElementById("brojError").innerHTML = "";
      }
    }
  
    // Provera da li je forma ispravna i prikaz obaveštenja ako nije
    if (!formValid) {
      alert("Popunite sva obavezna polja.");
    }
  }

  //Prikazi/Sakrij lozinku u input polju
  
  check.onclick = togglePassword;

  function togglePassword(){
    if (check.checked)psw.type = "text";
    else psw.type = "password"
  }
  


  
  
  
  


