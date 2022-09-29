/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/javascript.js to edit this template
 */
function povrsinaJs(){
var x = document.getElementById("povrsinaJS");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
};
function obavijest(){
var x = document.getElementById("obavijest");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
};
function povrsinaPhp(){
var x = document.getElementById("povrsinaphp");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
};

function baza(){
var x = document.getElementById("bazaprikaz");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
};


var klizac1= document.getElementById("A");
klizac1.oninput= function(){
var output= document.getElementById("vrijednostA");
output.innerHTML= klizac1.value;
    output.innerHTML= this.value;
};

var klizac2= document.getElementById("B");
klizac2.oninput= function(){
    var output= document.getElementById("vrijednostB");
output.innerHTML= klizac2.value;
    output.innerHTML= this.value;
};
    var pov;
function povrsina(a,b){
    var pov = a*b;
    return pov; 
};
 function izracunaj(){
      var strA = parseInt(document.getElementById("A").value);
      var strB =parseInt(document.getElementById("B").value);
      var racun = povrsina(strA,strB);
      $("#rezultat").html(racun + " cm2");      
      };
      
 $(document).ready(function(e){
   $(window).on('beforeunload',function(){
      var confirmationMessage = 'Gotov ispit iz PA3.';
    (e || window.event).returnValue = confirmationMessage; //Gecko + IE
    return confirmationMessage; //Gecko + Webkit, Safari, Chrome etc.
    });
   $(".BUTONZAPROMJENU").click(function(){
      $("#promijeniTekst").text("Ispit iz PA3");
   });
 });
      
var daniTjedan = ["Nedjelja", "Ponedjeljak", "Utorak", "Srijeda", 
"Četvrtak", "Petak", "Subota"];
function datum(){
/*NULE KOD JEDNOZNAMENKASTIH VRIJEDNOSTI*/
var d = new Date();
var sekunda = d.getSeconds();
 sekunda = (sekunda<10)? "0"+sekunda : sekunda;
var minuta = d.getMinutes();
 minuta = (minuta<10)? "0"+minuta : minuta;
var sat = d.getHours();
 sat = (sat<10)? "0"+sat : sat;
document.getElementById("datum").innerHTML = daniTjedan[d.getDay()] + ", " + 
d.getDate() + "." + (d.getMonth() + 1) + "." + d.getFullYear() + ".";
document.getElementById("vrijeme").innerHTML = sat + ":" + minuta + ":" + 
sekunda;
}
setInterval(datum, 50);




