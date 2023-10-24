// Mayor de 3 números

function mayor() {
    var n1 = parseInt(document.getElementById("n1").value);
    var n2 = parseInt(document.getElementById("n2").value);
    var n3 = parseInt(document.getElementById("n3").value);
    var n4 = document.getElementById("n4");
    if (n1 > n2 && n1 > n3)
        n4.value = n1;
    else if (n2 > n1 && n2 > n3)
        n4.value = n2;
    else if (n3 > n1 && n3 > n2)
        n4.value = n3;
}