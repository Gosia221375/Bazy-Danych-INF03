//Gra z kostkami
let w1;
let w2;
let losowa=Math.floor(Math.random()*6)+1;
let losowa2=Math.floor(Math.random()*6)+1;
let losowa3=Math.floor(Math.random()*6)+1;
let losowa4=Math.floor(Math.random()*6)+1;

document.write("<table border=1><tr><td>Gracz 1</td>");
document.write("<td><img src=kostka"+losowa+".png></td>");
document.write("<td><img src=kostka"+losowa2+".png></td></tr>");
document.write("<tr><td>Gracz 2</td><td><img src=kostka"+losowa3+".png></td>");
document.write("<td><img src=kostka"+losowa4+".png></td></tr></table>");

w1=losowa+losowa2;
w2=losowa3+losowa4;
    if (w1>w2) {
        document.write("<h1>Wygrał Gracz 1</h1>");
    }
    if (w1<w2) {
        document.write("<h1>Wygrał Gracz 2</h1>");
    }
    if (w1==w2) {
        document.write("<h1>Remis</h1>");
    }



//Ćwiczenia z pętlą for
/*
let w;
let wielkosc=prompt("Podaj wielkość tabliczki");

document.write("<table border=1>");

for (let i=1; i<=wielkosc; i++) {
    document.write("<tr>");
    for (let j=1; j<=wielkosc; j++) {
        w=i*j;
        document.write("<td>"+w+"</td>");
    }
    document.write("</tr>");
}
*/



//Pętla while
/*
let w;
let losowa=Math.random();

    while(w!=0) {
        w=prompt("Podaj w /0 koniec pętli")
    }
document.write("Wyjście z pętli");
*/



//Pętla do while - gra w zgadywanie liczby
/*
let w=10;
let losowa=Math.floor(Math.random()*100);
document.write(losowa);
    do {
        w=prompt("Podaj liczbę od 0 do 100");
        if (w>losowa) {
            alert("za dużo");
        }
        if (w<losowa) {
            alert("za mało");
        }
    } while(w!=losowa) 
        alert("Brawo!!!");
        document.write("Wyjście z pętli");
*/