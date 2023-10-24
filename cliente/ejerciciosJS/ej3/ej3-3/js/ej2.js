var cadena = prompt("¿Palabras en tu cadena?:");

var words = cadena.split(" ");
var i = 0;
var numWords = 0;

while(i < words.length){
    if(words[i])
        numWords += 1;
    i += 1;
}

document.write("Tu frase tiene " + numWords + " palabras");