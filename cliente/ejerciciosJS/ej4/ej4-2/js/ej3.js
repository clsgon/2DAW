let nums = [8, 4, 17, 4, 5];

function Show() {
    let string = "";
    for (let i = 0; i < nums.length; i+= 1)
        string += nums[i] + " ";
    alert("Lista: " + string);
}

function ShowArray(array) {
    let string = "";
    for (let i = 0; i < array.length; i+= 1)
        string += array[i] + " ";
    alert("Lista: " + string);
}

function Sort(){
    nums.sort((a,b) => a - b);
    Show();
}

function Reverse(){
    nums.reverse();
    Show();
}

function DeleteFirst(){
    nums.shift();
    Show();
}

function DeleteLast(){
    nums.pop();
    Show();
}

function AddFirst(){
    let num = document.getElementById("num");
    if (!isNaN(num.value))
        nums.unshift(parseInt(num.value));
    else
        alert("Escribe un número, para utilizar esta función");
    Show()
}

function AddLast(){
    let num = document.getElementById("num");
    if (!isNaN(num.value))
        nums.push(parseInt(num.value));
    else
        alert("Escribe un número, para utilizar esta función");
    Show()
}

function DeleteElement()
{
    let num = document.getElementById("delete");
    if (!isNaN(num.value))
    {
        let check = false;
        for(let i = 0; i < nums.length; i += 1)
        {
            if (parseInt(num.value) == nums[i])
            {
                nums.splice(i, 1)
                check = true;
            }
        }
        if (check == false)
            alert("Ese elemento no está en la lista.");
    }
    else
        alert("Escribe un número, para utilizar esta función");
    Show()
}