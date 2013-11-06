var zmiennaGlobalna = "  <Exit>";


$(document).ready(function () {
    var elem = document.getElementById("chcePodac");
    elem.addEventListener("click", pierwsza, false);
});




function pierwsza() {
    var x;

    var tekst = prompt("Wpisz cyfrę", "");

    var czyInt = parseInt(tekst);
    var czyFloat = parseFloat(tekst);
    var wynik = "Twoja liczba:" + tekst;
    var randomowa = Math.random()*100
    var i=1;
    while(i<20){
        i++;
        wynik += " ";
    }

    wynik += "My proponujemy liczbę:" + randomowa + "której Math.floor  wynosi" + Math.floor(randomowa);



    if (tekst != null) {
        x = "Wpisane:  " + tekst + zmiennaGlobalna;
        document.getElementById("text").innerHTML = x;
    }
    window.alert(wynik);
}


function nieKlikac() {
    window.alert("Miałęs nie klikać!!!!!!!");
}




function writeDiv() {

}