let operacja, pamiec;

function przecinek() {
    document.getElementById("pasek").value+=".";
}

function jedenprzezx() {
    wynik=1/(parseFloat(document.getElementById("pasek").value));
    document.getElementById("pasek").value=wynik;
}

function reszta() {
    operacja="r";
    pamiec=parseFloat(document.getElementById("pasek").value);
    document.getElementById("pasek").value="";
}

function pierwiastek() {
    pamiec=parseFloat(document.getElementById("pasek").value);
    operacja="pier";
    document.getElementById("pasek").value="";
}



function zero() {
    document.getElementById("pasek").value+="0";
}

function jeden() {
    document.getElementById("pasek").value+="1";
}

function dwa() {
    document.getElementById("pasek").value+="2";
}

function trzy() {
    document.getElementById("pasek").value+="3";
}

function cztery() {
    document.getElementById("pasek").value+="4";
}

function piec() {
    document.getElementById("pasek").value+="5";
}

function szesc() {
    document.getElementById("pasek").value+="6";
}

function siedem() {
    document.getElementById("pasek").value+="7";
}

function osiem() {
    document.getElementById("pasek").value+="8";
}

function dziewiec() {
    document.getElementById("pasek").value+="9";
}

function wyczysc() {
    document.getElementById("pasek").value="";
}



function rowna() {
    let wynik;
    let dlugosc=(document.getElementById("pasek").value);
    let liczba=dlugosc.length;
//  alert(liczba);
//  let liczba=parseFloat(document.getElementById("pasek").value);

    if(operacja=="+") {
        wynik=pamiec+(parseFloat(document.getElementById("pasek").value));
    }
    if(operacja=="-") {
        wynik=pamiec-(parseFloat(document.getElementById("pasek").value));
    }
    if((operacja=="*")&&(liczba!=0)) {
        wynik=pamiec*(parseFloat(document.getElementById("pasek").value));
    }
    if((operacja=="*")&&(liczba==0)) {
        wynik=pamiec*pamiec;
    }
    if(operacja=="/") {
        wynik=pamiec/(parseFloat(document.getElementById("pasek").value));
    }
    if(operacja=="r") {
        wynik=pamiec%(parseFloat(document.getElementById("pasek").value));
    }
    if(operacja=="pier") {
        wynik=Math.pow(pamiec,1/2);
    }

    document.getElementById("pasek").value=wynik;
}



function dodaj() {
    pamiec=parseFloat(document.getElementById("pasek").value);
    operacja="+";
    document.getElementById("pasek").value="";
}

function odjac() {
    pamiec=parseFloat(document.getElementById("pasek").value);
    operacja="-";
    document.getElementById("pasek").value="";
}

function pomnoz() {
    pamiec=parseFloat(document.getElementById("pasek").value);
    operacja="*";
    document.getElementById("pasek").value="";
}

function podziel() {
    pamiec=parseFloat(document.getElementById("pasek").value);
    operacja="/";
    document.getElementById("pasek").value="";
}