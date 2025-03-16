let wartosc;

function oblicz() {
    let rodzaj=document.getElementById("rodzaj").value;
    if (rodzaj==1) {
        wartosc=4*parseInt(document.getElementById("ilosc").value);
    }
    else if (rodzaj==2) {
        wartosc=3.5*parseInt(document.getElementById("ilosc").value);
    }
    document.getElementById("paliwo").innerHTML="Koszt paliwa: "+wartosc+" zł";
}