// Enunciado: Vamos a realizar una práctica con ventanas del tipo prompt y alert que nos va a servir para un tema actual, que es el cálculo del valor del pago del préstamo de una hipoteca que supuestamente nos ha concedido un banco.

var mortgage = parseFloat(prompt("Dime el valor de tu hipoteca"));
var interest = parseFloat(prompt("Dime el interés anual(%)"));
var periods = parseFloat(prompt("Dime el número de años a devolver"));

var monthInterest = interest / (12 * 100);
var part1 = mortgage * monthInterest;
var pow = periods * 12;
var part2 = Math.pow(1 / (1 + monthInterest), pow);
var payMonth = part1 / (1 - part2);

alert("El resultado a pagar cada mes es: " + payMonth);
document.write(payMonth);