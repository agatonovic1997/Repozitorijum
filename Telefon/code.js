let chrome1 = document.querySelector('.zvanje');
let ytb = document.querySelector('.zvanje2');
let ing = document.querySelector('.zvanje3');
let wha = document.querySelector('.zvanje4');
let tik = document.querySelector('.zvanje5');
let fba = document.querySelector('.zvanje6');
let vib = document.querySelector('.zvanje7');
let gp = document.querySelector('.zvanje8');
let cam = document.querySelector('.zvanje9') 
let por = document.querySelector('.zvanje10')
let divovi = document.querySelector('.message')
let divovi1 = document.querySelector('.naslov')
let heding3 = document.querySelector('h3')
let iframe1 = document.querySelector('iframe');
let iframe2 = document.querySelector('#video');
let iframe3 = document.querySelector('#stig');
let iframe4 = document.querySelector('#stwa');
let iframe5 = document.querySelector('#sttk');
let iframe6 = document.querySelector('#stfb');
let iframe7 = document.querySelector('#stvb');
let iframe8 = document.querySelector('#gopy');
let kadar = document.querySelector('#vi');
let img = document.querySelector(".slajder");
let unos = document.querySelector('input[type="text"]');
let glas = document.querySelector('.mikrofon');
let syb = document.querySelector('.simbol');
let s = document.querySelector('#posalji');
let podaci = document.querySelector('#slova');
let omot = document.querySelector('.prporuka');


por.addEventListener('click',function(){
 
      s.style.display = "block";
      podaci.style.display = "block";
      divovi.style.display = "block";
      divovi1.style.display = "block";
      window.scrollTo({top: document.body.scrollHeight,
      behavior: 'smooth'});   
      
});

s.addEventListener('click',fja)

function fja (){
  omot.innerHTML=podaci.value;
  podaci.value = "";
  divovi1.style.background = "darkred";
  divovi1.style.transition = "2s all ease-in-out";
  heding3.style.color = "darkorange";
  omot.style.display= "block";

const existingPlaceholder = podaci.getAttribute("placeholder");

podaci.setAttribute("placeholder", "Dalji unos teksta nije moguć!");
podaci.disabled = true;

setTimeout(function(){
  omot.innerHTML = "PORUKA POSLATA!"
  omot.style.background = "blue";
  omot.style.width="250px";
  setTimeout(function(){
  window.location.reload();
 },2000)
},3500)

}

syb.addEventListener('click', function(){

  document.getElementById('brisanje').value = '' ;

});

glas.addEventListener('click',function(){
  let utterance = new SpeechSynthesisUtterance(unos.value);
  utterance.lang = 'sr-RS';
  speechSynthesis.speak(utterance);
});


let mesto = 0;

let ponavljanje = setInterval(function() {
    mesto++;
    img.setAttribute("src", "./Slike/slika" + mesto + ".jpg");
    if (mesto === 5) {
      mesto = 0;
    }
  }, 5000)



chrome1.addEventListener('click',funkcija);

function funkcija(){
    iframe1.style.display = "block";
    setTimeout(function(){
      window.location.reload();
    },4000)
  
};

ytb.addEventListener('click',funkcija3);

function funkcija3(){
    iframe2.style.display = "block";
    setTimeout(function(){
      window.location.reload();
    },8000)
  
};

ing.addEventListener('click',funkcija4);

function funkcija4(){
    iframe3.style.display = "block";
    setTimeout(function(){
      window.location.reload();
    },6000)
  
};

wha.addEventListener('click',funkcija5);

function funkcija5(){
    iframe4.style.display = "block";
    setTimeout(function(){
      window.location.reload();
    },6000)
  
};

tik.addEventListener('click',funkcija6);

function funkcija6(){
    iframe5.style.display = "block";
    setTimeout(function(){
      window.location.reload();
    },5000)
  
};

fba.addEventListener('click',funkcija7);

function funkcija7(){
    iframe6.style.display = "block";
    setTimeout(function(){
      window.location.reload();
    },8000)
  
};

vib.addEventListener('click',funkcija8);

function funkcija8(){
    iframe7.style.display = "block";
    setTimeout(function(){
      window.location.reload();
    },3000)
  
};

gp.addEventListener('click',funkcija9);

function funkcija9(){
    iframe8.style.display = "block";
    setTimeout(function(){
      window.location.reload();
    },3000)
  
};

const video = document.getElementById('vi');

cam.addEventListener('click', () => {
  navigator.mediaDevices.getUserMedia({video: true})
    .then((stream) => {
      video.srcObject = stream;
      kadar.style.display = "block";
      setTimeout(function(){
        window.location.reload();
      },7000)
    })
    .catch((err) => {
      console.log("Došlo je do greške pri pristupu kameri: " + err);
    });
});

function checkTime(i) {
    if (i < 10) {
      i = "0" + i;    
    }
    return i;
  }
  
  function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    
    m = checkTime(m);   
    s = checkTime(s);
    document.getElementById('time').innerHTML = h + ":" + m;    
    document.getElementById('time2').innerHTML = h + ":" + m + ":" + s;    
    t = setTimeout(function() {
      startTime()           
    }, 500);
  }
  startTime();

var currentDate = new Date()
var day = currentDate.getDate()
var month = currentDate.getMonth() + 1
var year = currentDate.getFullYear()


document.getElementById('date').innerHTML = "<b>" + day + "." + month + "." + year +"."+"</b>"; 

//Ovo je baterija

const chargeLevel = document.getElementById("charge-level");
const charge = document.getElementById("charge");
const chargingTimeRef = document.getElementById("charging-time");

window.onload = () => {
  //For browsers that don't support the battery status API
  if (!navigator.getBattery) {
    alert("Battery Status Api Is Not Supported In Your Browser");
    return false;
  }
};

navigator.getBattery().then((battery) => {
  function updateAllBatteryInfo() {
    updateChargingInfo();
    updateLevelInfo();
  }
  updateAllBatteryInfo();

  //When the charging status changes
  battery.addEventListener("chargingchange", () => {
    updateAllBatteryInfo();
  });

  //When the Battery Levvel Changes
  battery.addEventListener("levelchange", () => {
    updateAllBatteryInfo();
  });

  function updateChargingInfo() {
    if (battery.charging) {
      charge.classList.add("active");
      chargingTimeRef.innerText = "";
    } else {
      charge.classList.remove("active");

      //Display time left to discharge only when it is a integer value i.e not infinity
      if (parseInt(battery.dischargingTime)) {
        let hr = parseInt(battery.dischargingTime / 3600);
        let min = parseInt(battery.dischargingTime / 60 - hr * 60);
        chargingTimeRef.innerText = `Preostalo je ${hr} sat/a i ${min} minut/a`;
      }
    }
  }

  //Updating battery level
  function updateLevelInfo() {
    let batteryLevel = `${parseInt(battery.level * 100)}%`;
    charge.style.width = batteryLevel;
    chargeLevel.textContent = batteryLevel;
  }
});
