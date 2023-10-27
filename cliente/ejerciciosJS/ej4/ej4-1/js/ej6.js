let cities = {"alcorcón":10,"leganes":12,"pinto":8,"fuenlabrada":11, "getafe": 10, "parla": 15, "mostoles": 7};

let city = prompt("Dime la ciudad: ");
let numBult = parseInt(prompt("Número de bultos: "));
if (city && numBult > 0)
{
    if (cities[city.toLowerCase()])
        document.write("- Nombre de la ciudad: " + city + "<br>" + "- Nº Bultos: " + numBult + "<br>"
                + "- Precio por bulto: " + cities[city.toLowerCase()] + "<br> - Precio Final: "
                        + ((numBult * cities[city.toLowerCase()]) + ((numBult * cities[city.toLowerCase()]) / 0.21)));
    else
        document.write("- Nombre de la ciudad: " + city + "<br>" + "- Nº Bultos: " + numBult + "<br>"
                + "- Precio por bulto: 20" + "<br> - Precio Final: " + ((numBult * 20) + ((numBult * 20) / 0.21)));
}
