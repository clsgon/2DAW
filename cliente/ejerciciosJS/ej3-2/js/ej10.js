var links = document.getElementsByTagName("a");

document.write("En este documento existen un total de " + links.length + " enlaces.");
document.write("<br>");
document.write("El penúltimo enlace enlaza a la dirección: " + links[links.length - 2]);
document.write("<br>");
var count = 0;
for(var i = 0; i < links.length; i += 1){
    if (links[i] == "http://prueba/")
        count += 1;
}
document.write("El número de enlaces que dirigen a (http://prueba) son " + count);