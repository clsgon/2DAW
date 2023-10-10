var result = new Array(6);
for(var i = 0; i < result.length; i += 1){
    result[i] = document.getElementById("result" + (i + 1));
}
//Ej1
var date = new Date();
var initDate = new Date(200, 1, 1);
result[0].innerHTML = date - initDate;


//Ej2
var str = prompt("Escribe lo que quieras: ");
result[1].innerHTML = str.length;

//Ej3
var width = parseInt(screen.width);
var height = parseInt(screen.height);
result[2].innerHTML = Math.sqrt(Math.pow(width, 2) + Math.pow(height, 2));

//Ej4
var body = document.getElementById("body");
var tittle = document.getElementById("tittle");
body.style.color = "white";
body.style.backgroundColor = "grey";
tittle.innerHTML = "Modificaciones del objeto Document";

//Ej5
var str = prompt("Escribe lo que quieras: ");
var i = 0;
var countUp = 0;
var countLow = 0;
while(str[i])
{
    if (str[i] >= 'A' && str[i] <= 'Z')
        countUp += 1;
    if (str[i] >= 'a' && str[i] <= 'z')
        countLow += 1;
    i += 1;
}

if (!(countUp == 0) && !(countLow == 0))
    result[4].innerHTML = "El texto " + str + " esta formado por una mezcla de mayúsculas(" + countUp + ") y minúsculas(" +  countLow + ")";
else if (countLow == 0)
    result[4].innerHTML = "El texto " + str + " esta formado por solo mayúsculas(" + countUp + ")";
else if (countUp == 0)
    result[4].innerHTML = "El texto " + str + " esta formado por solo minúsculas(" + countLow + ")";

//Ej6
var str = prompt("Escribe una palabra: ").split(" ").join("").toLowerCase();
var palindrome = true;
var i = 0;
var size = str.length - 1;

while(str[i]){
    if(str[i] != str[size])
    {
        palindrome = false;
        break;
    }
    size -= 1;
    i -= 1;
}

if(palindrome == false){
    result[5].innerHTML = "La palabra " + str + " no es palindromo";
}else{
    result[5].innerHTML = "La palabra " + str + " es palindromo";
}

