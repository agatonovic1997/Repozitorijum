// Dohvatanje input polja za pretragu
var pretragaInput = document.getElementById("pretraga");

// Dodavanje događaja "input" na input polje za pretragu
pretragaInput.addEventListener("input", function() {
    var unos = pretragaInput.value.toLowerCase(); // Unos korisnika pretvoren u mala slova
    var artikli = document.querySelectorAll(".proizvod"); // Dohvatanje svih artikala

    // Prolazak kroz svaki artikal i provera da li sadrži unos korisnika
    artikli.forEach(function(artikal) {
        var nazivArtikla = artikal.querySelector(".natpis").textContent.toLowerCase();
        if (nazivArtikla.includes(unos)) {
            artikal.style.display = "block"; // Prikaži artikal ako sadrži unos korisnika
        } else {
            artikal.style.display = "none"; // Sakrij artikal ako ne sadrži unos korisnika
        }
    });
});
