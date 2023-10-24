var s = prompt("¿Es todo números?: ");
var i = 0;

var numbers = true;

while(s[i])
{
    if (isNaN(s[i]))
    {
        numbers = false;
        break;
    }
    i += 1;
}

if (numbers == true)
    document.write("Es todo números");
else
    document.write("No es todo números");