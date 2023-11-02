function FillZero(value, length)
{
    let aux = "";
    for (let i = 0; i < (length - value.value.length); i += 1)
        aux += "0";
    aux += value.value;
    value.value = aux;
    return value.value;
}

function calcular() {
    var entity = document.getElementById("entity");
    var office = document.getElementById("office");
    var dControl = document.getElementById("dControl");
    var nb = document.getElementById("nAccount");

    entity = FillZero(entity, 4);
    office = FillZero(office, 4);
    nb = FillZero(nb, 10);

    let firstdigitE = parseInt(entity[0]) * 4 + parseInt(entity[1]) * 8 + parseInt(entity[2]) * 5 + parseInt(entity[3]) * 10;
    let firstdigitO = parseInt(office[0]) * 9 + parseInt(office[1]) * 7 + parseInt(office[2]) * 3 + parseInt(office[3]) * 6;

    let op = 11 - ((firstdigitE + firstdigitO) % 11);

    if (op == 10)
        dControl.value += 1;
    else
        dControl.value += op;

    let account = parseInt(nb[0]) * 1 + parseInt(nb[1]) * 2 + parseInt(nb[2]) * 4 + parseInt(nb[3]) * 8 + parseInt(nb[4]) * 5 + parseInt(nb[5]) * 10 + parseInt(nb[6]) * 9 + parseInt(nb[7]) * 7 + parseInt(nb[8]) * 3 + parseInt(nb[9]) * 6;
    let op2 = 11 - (account % 11);

    dControl.value += op2;
}