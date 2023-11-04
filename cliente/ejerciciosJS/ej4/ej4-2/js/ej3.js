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
    let sort = nums.sort();
    ShowArray(sort);
}

function Reverse(){
    let reverse = nums.reverse();
    ShowArray(reverse);
}