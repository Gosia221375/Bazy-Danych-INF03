function numberToWords(liczba) {
    let slownie = "";
    let jednostki = ["", "jeden", "dwa", "trzy", "cztery", "piec", "szesc", "siedem", "osiem", "dziewiec"];
    let dziesiatki = ["", "", "dwadziescia", "trzydziesci", "czterdziesci", "piecdziesiat", "szescdziesiat", "siedemdziesiat", "osiemdziesiat", "dziewiecdziesiat"];
    let setki = ["", "sto", "dwiescie", "trzysta", "czterysta", "piecset", "szescset", "siedemset", "osiemset", "dziewiecset"];
    let nascie = ["", "jedenascie", "dwanascie", "trzynascie", "czternascie", "pietnascie", "szesnascie", "siedemnascie", "osiemnascie", "dziewietnascie"];
    let tysiace = ["", "jeden tysiac", "dwa tysiace", "trzy tysiace", "cztery tysiace", "piec tysiecy", "szesc tysiecy", "siedem tysiecy", "osiem tysiecy", "dziewiec tysiecy"];
    
    if (liczba >= 1000000) {
        let m = Math.floor(liczba / 1000000);
        slownie += numberToWords(m) + " milion ";
        liczba %= 1000000;
    }
    
    if (liczba >= 1000) {
        let t = Math.floor(liczba / 1000);
        slownie += tysiace[t] + " ";
        liczba %= 1000;
    }
    
    if (liczba >= 100) {
        let s = Math.floor(liczba / 100);
        slownie += setki[s] + " ";
        liczba %= 100;
    }
    
    if (liczba >= 20) {
        let d = Math.floor(liczba / 10);
        let j = liczba % 10;
        slownie += dziesiatki[d] + (j > 0 ? " " + jednostki[j] : "");
    } else if (liczba > 10) {
        slownie += nascie[liczba - 10];
    } else if (liczba > 0) {
        slownie += jednostki[liczba];
    }
    
    return slownie.trim();
}

let liczba = parseInt(prompt("Podaj liczbe:"), 10);
console.log("Slownie to: ", numberToWords(liczba));
