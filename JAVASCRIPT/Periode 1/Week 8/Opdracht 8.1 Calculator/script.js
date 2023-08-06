function multiply() {
    var getal1 = document.getElementById("getal1").value;
    var getal2 = document.getElementById("getal2").value;
    if (getal1 > 0  && getal2 > 0) {
        var antwoord = getal1 * getal2;
        document.getElementById("antwoord").innerHTML = "Het antwoord is: " + antwoord;
    } 
    else {
        document.getElementById("antwoord").innerHTML = "Het getal is te laag";
    }
}
function divide() {
    var getal1 = document.getElementById("getal1").value;
    var getal2 = document.getElementById("getal2").value;
    if (getal1 > 0  && getal2 > 0) {
        var antwoord = getal1 / getal2;
        document.getElementById("antwoord").innerHTML = "Het antwoord is: " + antwoord;
    } 
    else {
        document.getElementById("antwoord").innerHTML = "Het getal is te laag";
    }
}

function add() {
    var getal1 = document.getElementById("getal1").value;
    var getal2 = document.getElementById("getal2").value;
    if (getal1 > 0  && getal2 > 0) {
        var antwoord = +getal1 + +getal2;
        document.getElementById("antwoord").innerHTML = "Het antwoord is: " + antwoord;
    } 
    else {
        document.getElementById("antwoord").innerHTML = "Het getal is te laag";
    }
}

function minus() {
    var getal1 = document.getElementById("getal1").value;
    var getal2 = document.getElementById("getal2").value;
    if (getal1 > 0  && getal2 > 0) {
        var antwoord = getal1 - getal2;
        document.getElementById("antwoord").innerHTML = "Het antwoord is: " + antwoord;
    } 
    else {
        document.getElementById("antwoord").innerHTML = "Het getal is te laag";
    }
}



