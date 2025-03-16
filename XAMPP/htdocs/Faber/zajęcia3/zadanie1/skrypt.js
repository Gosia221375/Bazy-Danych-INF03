function oblicz() {
    let pow=document.getElementById("powierzchnia").value;
    let puszki=Math.ceil(pow/4);
    document.getElementById("wynik").innerHTML="Liczba jednolitrowych puszek farby potrzebnych do pomalowania wynosi: "+puszki;
}