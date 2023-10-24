let nb = parseFloat(prompt("Dime un número: "));
let count = parseInt(prompt("Dime un número de decimales: "));

if (nb != NaN && count != NaN)
{
    nb = parseFloat(nb.toFixed(count));
    document.write(nb);

    let sDec = parseInt((nb - parseInt(nb)).toString().length - 2);
    if (sDec <= 0)
        document.write(".");

    if(count > sDec){
        count -= sDec;
        while (count)
        {
            document.write(0);
            count -= 1;
        }
    }
}