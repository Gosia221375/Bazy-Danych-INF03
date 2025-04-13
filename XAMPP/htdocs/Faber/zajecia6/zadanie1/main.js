let pole=0;
let obwod=0;

function kwadrat() {
    let a=document.getElementById("akw").value;
    pole=a*a;
    obwod=4*a;
    document.getElementById("wynikKwadratu").innerHTML="Pole kwadratu wynosi "+pole+"<br> Obwód kwadratu wynosi: "+obwod;
}

function prostokat() {
    let a=document.getElementById("apr").value;
    let b=document.getElementById("bpr").value;
    pole=a*b;
    obwod=2*a+2*b;
    document.getElementById("wynikProstokata").innerHTML="Pole prostokąta wynosi "+pole+"<br> Obwód prostokąta wynosi: "+obwod;
}

function trojkat() {
    let a=document.getElementById("atr").value;
    let b=document.getElementById("btr").value;
    let c=document.getElementById("ctr").value;
    let h=document.getElementById("htr").value;
    pole=a*h;
    obwod=a+b+c;
    document.getElementById("wynikTrojkata").innerHTML="Pole trójkąta wynosi "+pole+"<br> Obwód trójkąta wynosi: "+obwod;
}