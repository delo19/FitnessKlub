var zmiennaGlobalna = "  <Exit>";
var czyInt = 0;
var czyFloat = 0;

$(document).ready(function () {
    var elem = document.getElementById("chcePodac");
    elem.addEventListener("click", pierwsza, false);

});




function pierwsza() {
    var x;

    var tekst = prompt("Wpisz cyfrę", "");
    parsuj(tekst);
    var wynik = "Twoja liczba:" + tekst;
    var randomowa = Math.random() * 100

    var i = 1;
    while (i < 20) {
        i++;
        wynik += " ";
    }

    wynik += "My proponujemy liczbę:" + randomowa + "której Math.floor  wynosi" + Math.floor(randomowa);


    if (tekst != null) {
        x = "Wpisane:  " + tekst + zmiennaGlobalna;
        x += "parsowane na int:" + czyInt + "na float" + czyFloat;
        document.getElementById("text").innerHTML = x;

    }
    alertuj(wynik);
}

function parsuj(tekst) {
    czyInt = parseInt(tekst);
    czyFloat = parseFloat(tekst);
}


function nieKlikac() {
    window.alert("Mialeś nie klikac");
}


function alertuj(wynik) {
    window.alert(wynik);
}


