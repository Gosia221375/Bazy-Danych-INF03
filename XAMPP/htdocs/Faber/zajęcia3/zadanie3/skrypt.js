function oblicz() {
    let zg=document.getElementById("zg").checked;
    let km=parseInt(document.getElementById("km").value);
    let wynik=km*2;

    if (zg) {
        document.getElementById("wynik").innerHTML="Dowieziemy Twoją pizzę za darmo";
    }
    else {
        document.getElementById("wynik").innerHTML="Dowóz będzie cię kosztował "+wynik+" złotych";
    }
}