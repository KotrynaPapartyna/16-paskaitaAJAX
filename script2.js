"use strict";

// vartotojams// 

function showUsers() {
    var xhttp = new XMLHttpRequest(); 

    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            document.querySelector("#output").innerHTML = this.responseText; // 
        }
    };

    xhttp.open("POST", "actionUsers.php", true);
    xhttp.send();
}


document.querySelector("#user_create").addEventListener("click", function() {
    
    var userForm = document.querySelector(".userForm");
    userForm.classList.toggle("d-none");

});

document.querySelector("#createUser").addEventListener("click", function() { 
    var vardas = document.querySelector("#vardas").value;
    var pavarde = document.querySelector("#pavarde").value;
    var slapyvardis = document.querySelector("#slapyvardis").value;

    var xhttp = new XMLHttpRequest(); //objektas

    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            document.querySelector("#alert-space").innerHTML = this.responseText; 
        }
    };
    
    xhttp.open("GET", "addUser.php?vardas=" + vardas + "&pavarde=" + pavarde + "&slapyvardis=" + slapyvardis, true);
    xhttp.send();
    
    showUsers();
});