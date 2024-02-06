// si clico el sol el fons es poca groc
function sol(){
    document.body.style.background="skyblue";
    document.getElementById("lluna").style.background="skyblue";
}
// si clico la lluna el fons es posa negre
function lluna(){
    document.body.style.background="#2b333d";
    document.getElementById("lluna").style.background="#2b333d";
}

// inicialment onclick a sobre de l'element
// addEventListener (esdeveniment, receptor);

document.getElementById("sol").addEventListener('click', sol);
document.getElementById("lluna").addEventListener('click', lluna);