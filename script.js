"use strict";

// scriptas- KLIENTAMS- VEIKIA

//tas mygtukas paspaudimo metu isvestu informacija 
//i console log


// document.querySelector("#show").addEventListener("click", function() {
    // console.log("Mygtukas paspaustas");
function showClients() {
    var xhttp = new XMLHttpRequest(); // objektas- siust uzklausa i serveri
    // tikrina ar uzklausa vykdoma- yra w3schools. standartine uzklausa
    // fiksuoja ar neivyko pasikeitimai 
    xhttp.onreadystatechange = function() {
        // dokumentas buvo rastas, rysys buvo uzmegztas sekmingai
        if(this.readyState == 4 && this.status == 200) {
            //responseText informacija is serverio gauta po uzklausos
            // ir tada ji atsiranda output'e
            document.querySelector("#output").innerHTML = this.responseText; // 
        }
    };

    xhttp.open("POST", "action.php", true);
    xhttp.send();
}

showClients();

// });

document.querySelector("#create").addEventListener("click", function() {

var clientForm = document.querySelector("#clientForm");
clientForm.classList.toggle("d-none");
// jeigu forma yra paslepta- ji atsiranda
// jeigu ji yra matoma- tuomet yra paslepiama

document.querySelector("#vardas").value = "";
document.querySelector("#pavarde").value = "";
document.querySelector("#teises_id").value = "";

});

document.querySelector("#createClient").addEventListener("click", function() {
    var vardas = document.querySelector("#vardas").value;
    var pavarde = document.querySelector("#pavarde").value;
    var teises_id =  document.querySelector("#teises_id").value;
    
    //ajax uzklausa
    var xhttp = new XMLHttpRequest(); //objektas

    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            document.querySelector("#alert-space").innerHTML = this.responseText; // 
        }
    };
   
    // uzklausos issiuntimui reikalingas kodas:
    // pabandyk atsidaryti
    xhttp.open("GET", "addClient.php?vardas=" + vardas + "&pavarde=" + pavarde + "&teises_id=" + teises_id, true);

    xhttp.send();    

       
    showClients();
   
    
});    

console.log("Script failas veikia");

