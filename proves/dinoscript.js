var dino = document.getElementById("dino");
var obstaculo = document.getElementById("obstaculo");

function salt(){
    if(dino.classList != "saltando"){
    dino.classList.add("saltando");
}

setTimeout(function(){
    dino.classList.remove("saltando")
},250);
}

var muerto = setInterval(function(){
    //parseint te da un numero de una expresión
    //getComputedStyle de donde coger los datos
    //getPropertyValue que valor coger
    var dinotop = parseInt(window.getComputedStyle(dino).getPropertyValue("top"));
    var obstaculoleft = parseInt(window.getComputedStyle(obstaculo).getPropertyValue("left"));

    if(obstaculoleft<20 && obstaculoleft>0 && dinotop>=130){
        alert("¡MIAU!, HISISTE LA MORISIÓN")
        window.location.reload();
    }
})

var n = 0;
var l = document.getElementById("contador");
window.setInterval(function(){
    l.innerHTML = n;
    n++;
},250);