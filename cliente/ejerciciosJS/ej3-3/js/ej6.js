function Trim(str) {
    var i = 0;
    var size = str.length - 1;
    var result  = "";

    while(str[i] == " ")
        i += 1;
    while (str[size] == " ")
        size -= 1;
    while(i <= size){
        result += str[i];
        i += 1;
    }
    return result;
}

var str = prompt("Dime una cadena para quitar espacios a delante y al final de ella misma: ");
document.write("La cadena a pasado de (" + str + ") a (" + Trim(str) + ")");