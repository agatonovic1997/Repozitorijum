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



  


  
  
  
  


