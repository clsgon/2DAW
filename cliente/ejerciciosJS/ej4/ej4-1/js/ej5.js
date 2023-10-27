let nums = new Array();
let i = 0;
let num = 0;

while((num = parseInt(prompt("Dime un número(0 - parar): "))) != 0)
{
    nums[i] = num;
    i += 1;
}

let count = nums.length;
let sum = 0;
let max = nums[nums.length - 1];
let min = nums[nums.length - 1];

document.write(" - Datos introducidos(" + count + "): ");
for (let i = 0; i < nums.length; i += 1)
{
    document.write(nums[i] + " ");
    sum += nums[i];
    if (nums[i] > max)
        max = nums[i];
    if (nums[i] < min)
        min = nums[i];
}

let average = sum / nums.length;

if(count)
    alert("- Nº Datos: " + count +
    "\n" +
    "- Suma: " + sum +
    "\n" +
    " - Max: " + max +
    "\n" +
    " - Min: " + min +
    "\n" +
    " - Media: " + average);
else
    alert("- Nº Datos: " + count);