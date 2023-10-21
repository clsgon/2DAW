var s = prompt("¿Es todo letras?: ");
var i = 0;

var letters = true;

while(s[i])
{
    if (!isNaN(s[i]) && s[i] != " ")
    {
        letters = false;
        break;
    }
    i += 1;
}

if (letters == true)
    document.write("Es todo letras");
else
    document.write("No es todo letras");