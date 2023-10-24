function Right(string, total) {
    var size = string.length - 1;
    var result = "";

    total -= 1;
    while (total >= 0)
    {
        result += string[size];
        size -= 1;
        total -= 1;
    }
    return result;
}

function Left(string, total) {
    var i = 0;
    var result = "";

    total -= 1;
    while (total >= 0)
    {
        result += string[i];
        i += 1;
        total -= 1;
    }
    return result;
}

function Mid(string, start, total) {
    var i = start;
    var result = "";

    total -= 1;
    while (total >= 0)
    {
        result += string[i];
        i += 1;
        total -= 1;
    }
    return result;
}

var string = prompt("Dime una cadena: ");

document.write("El resultado de la string usando right con total 5: " + Right(string, 5));
document.write("<br>");
document.write("El resultado de la string usando left con total 6: " + Left(string, 6));
document.write("<br>");
document.write("El resultado de la string usando right con inicio 2 y total 5: " + Mid(string, 2, 5));
document.write("<br>");