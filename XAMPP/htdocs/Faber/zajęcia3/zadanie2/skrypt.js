function dodawanie() {
    let a=parseInt(document.getElementById("a").value);
    let b=parseInt(document.getElementById("b").value);
    let wynik=a+b;
    document.getElementById("wynik").innerHTML="Wynik: "+wynik;
}

function odejmowanie() {
    let a=parseInt(document.getElementById("a").value);
    let b=parseInt(document.getElementById("b").value);
    let wynik=a-b;
    document.getElementById("wynik").innerHTML="Wynik: "+wynik;
}

function mnozenie() {
    let a=parseInt(document.getElementById("a").value);
    let b=parseInt(document.getElementById("b").value);
    let wynik=a*b;
    document.getElementById("wynik").innerHTML="Wynik: "+wynik;
}

function dzielenie() {
    let a=parseInt(document.getElementById("a").value);
    let b=parseInt(document.getElementById("b").value);
    let wynik=a/b;
    document.getElementById("wynik").innerHTML="Wynik: "+wynik;
}

function potegowanie() {
    let a=parseInt(document.getElementById("a").value);
    let b=parseInt(document.getElementById("b").value);
    let wynik=a**b;
    document.getElementById("wynik").innerHTML="Wynik: "+wynik;
}