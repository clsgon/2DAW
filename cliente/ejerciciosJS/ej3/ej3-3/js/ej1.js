function DniLetter(num) {
    var letter = new Array();
    letter = ["", "T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E"];
    var result = letter[(num % 23) + 1];
    document.write(parseInt(num) + result);
}

var num = prompt("Dime los números de tu DNI");
DniLetter(num);