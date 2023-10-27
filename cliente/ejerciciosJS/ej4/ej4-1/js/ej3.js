let month = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

document.write("Meses: ");
for(let i = 0; i < month.length; i += 1)
{
    document.write(month[i] + " ");
}

class Month{
    constructor (name) {
        this.name = name;
    }

    toString() {
        document.write(this.name);
    }
}

let aMonth = new Array(new Month(month[0]), new Month(month[1]), new Month(month[2]));

document.write("<br>");
document.write("Meses method toString(): ");
aMonth[0].toString();
aMonth[1].toString();
aMonth[2].toString();