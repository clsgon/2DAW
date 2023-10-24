// Juego  piensa un nº entre 1 y 1000
var rnd = 0;
var query = 0;
var tries = 0;

while (rnd == 0)
    rnd = Math.floor(Math.random() * 10);
while (query != rnd)
{
    tries += 1;
    query = parseInt(prompt("¿En que número estoy pensando?"));
    if (rnd > query)
        alert("El número es mayor de " + query);
    else if (rnd < query)
        alert("El número es menor de " + query);
    else if (rnd == query)
    {
        if (tries == 1)
            document.write("Has acertado el número en un intento.");
        else
            document.write("Has acertado el número en " + tries + " intentos.");
    }
}

